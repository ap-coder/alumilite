<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyBuildRequest;
use App\Http\Requests\StoreBuildRequest;
use App\Http\Requests\UpdateBuildRequest;
use App\Models\Brand;
use App\Models\BrandModel;
use App\Models\Build;
use App\Models\ProductCategory;
use App\Models\ProductType;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class BuildController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('build_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Build::with(['brand', 'brand_model', 'categories'])->select(sprintf('%s.*', (new Build)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'build_show';
                $editGate      = 'build_edit';
                $deleteGate    = 'build_delete';
                $crudRoutePart = 'builds';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('published', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->published ? 'checked' : null) . '>';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->addColumn('brand_name', function ($row) {
                return $row->brand ? $row->brand->name : '';
            });

            $table->addColumn('brand_model_model', function ($row) {
                return $row->brand_model ? $row->brand_model->model : '';
            });

            $table->editColumn('category', function ($row) {
                $labels = [];
                foreach ($row->categories as $category) {
                    $labels[] = sprintf('<span class="label label-info label-many">%s</span>', $category->name);
                }

                return implode(' ', $labels);
            });
            $table->editColumn('customer_company', function ($row) {
                return $row->customer_company ? $row->customer_company : '';
            });
            $table->editColumn('customer_name', function ($row) {
                return $row->customer_name ? $row->customer_name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'published', 'brand', 'brand_model', 'category']);

            return $table->make(true);
        }

        return view('admin.builds.index');
    }

    public function create()
    {
        abort_if(Gate::denies('build_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brands = Brand::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $brand_models = BrandModel::pluck('model', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = ProductCategory::pluck('name', 'id');

        $product_types = ProductType::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.builds.create', compact('brand_models', 'brands', 'categories','product_types'));
    }

    public function store(StoreBuildRequest $request)
    {
        $build = Build::create($request->all());
        $build->categories()->sync($request->input('categories', []));
        if ($request->input('photo', false)) {
            $build->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        foreach ($request->input('additional_photos', []) as $file) {
            $build->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('additional_photos');
        }

        foreach ($request->input('documents', []) as $file) {
            $build->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('documents');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $build->id]);
        }

        $build = Build::findOrFail($build->id);

        $menuName = \Str::of($build->slug)->replace('-', ' ')->title();

        if ($build->photo) {
            $seo_image_url = $build->photo->getUrl();
        } else {
            $seo_image_url = '';
        }

        $build->staticSeo()->create(
            [
                'build_id' => $build->id,
                'canonical' => '1',
                'content_type' => 'build',
                'menu_name' => $menuName,
                'page_name' => $menuName,
                'page_path' => 'builds/'.$build->slug,
                'open_graph_type' => 'website',
                'html_schema_1' => 'Thing',
                'html_schema_2' => 'Build',
                'html_schema_3' => '',
                'body_schema' => 'Website',
                'seo_image_url' => $seo_image_url,
            ]
        );

        return redirect()->route('admin.builds.index');
    }

    public function edit(Build $build)
    {
        abort_if(Gate::denies('build_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brands = Brand::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $brand_models = BrandModel::pluck('model', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = ProductCategory::pluck('name', 'id');

        $product_types = ProductType::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $build->load('brand', 'brand_model', 'categories');

        return view('admin.builds.edit', compact('brand_models', 'brands', 'build', 'categories','product_types'));
    }

    public function update(UpdateBuildRequest $request, Build $build)
    {
        $build->update($request->all());
        $build->categories()->sync($request->input('categories', []));
        if ($request->input('photo', false)) {
            if (! $build->photo || $request->input('photo') !== $build->photo->file_name) {
                if ($build->photo) {
                    $build->photo->delete();
                }
                $build->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($build->photo) {
            $build->photo->delete();
        }

        if (count($build->additional_photos) > 0) {
            foreach ($build->additional_photos as $media) {
                if (! in_array($media->file_name, $request->input('additional_photos', []))) {
                    $media->delete();
                }
            }
        }
        $media = $build->additional_photos->pluck('file_name')->toArray();
        foreach ($request->input('additional_photos', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $build->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('additional_photos');
            }
        }

        if (count($build->documents) > 0) {
            foreach ($build->documents as $media) {
                if (! in_array($media->file_name, $request->input('documents', []))) {
                    $media->delete();
                }
            }
        }
        $media = $build->documents->pluck('file_name')->toArray();
        foreach ($request->input('documents', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $build->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('documents');
            }
        }

        $build = Build::findOrFail($build->id);

        $menuName = \Str::of($build->slug)->replace('-', ' ')->title();

        if ($build->photo) {
            $seo_image_url = $build->photo->getUrl();
        } else {
            $seo_image_url = '';
        }

        $build->staticSeo()->updateOrCreate(
            [
                'build_id' => $build->id,
            ],
            [
                'build_id' => $build->id,
                'canonical' => '1',
                'content_type' => 'build',
                'menu_name' => $menuName,
                'page_name' => $menuName,
                'page_path' => 'builds/'.$build->slug,
                'open_graph_type' => 'website',
                'html_schema_1' => 'Thing',
                'html_schema_2' => 'Build',
                'html_schema_3' => '',
                'body_schema' => 'Website',
                'seo_image_url' => $seo_image_url,
            ]
        );

        return redirect()->route('admin.builds.index');
    }

    public function show(Build $build)
    {
        abort_if(Gate::denies('build_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $build->load('brand', 'brand_model', 'categories', 'buildReviews');

        return view('admin.builds.show', compact('build'));
    }

    public function destroy(Build $build)
    {
        abort_if(Gate::denies('build_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $build->delete();

        return back();
    }

    public function massDestroy(MassDestroyBuildRequest $request)
    {
        $builds = Build::find(request('ids'));

        foreach ($builds as $build) {
            $build->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('build_create') && Gate::denies('build_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Build();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
