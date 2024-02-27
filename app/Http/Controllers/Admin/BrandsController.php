<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyBrandRequest;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class BrandsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('brand_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Brand::query()->select(sprintf('%s.*', (new Brand)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'brand_show';
                $editGate      = 'brand_edit';
                $deleteGate    = 'brand_delete';
                $crudRoutePart = 'brands';

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

            $table->rawColumns(['actions', 'placeholder', 'published']);

            return $table->make(true);
        }

        return view('admin.brands.index');
    }

    public function create()
    {
        abort_if(Gate::denies('brand_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.brands.create');
    }

    public function store(StoreBrandRequest $request)
    {
        $brand = Brand::create($request->all());

        if ($request->input('logo', false)) {
            $brand->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $brand->id]);
        }

        $brand = Brand::findOrFail($brand->id);

        $menuName = \Str::of($brand->slug)->replace('-', ' ')->title();

        if ($brand->logo) {
            $seo_image_url = $brand->logo->getUrl();
        } else {
            $seo_image_url = '';
        }

        $brand->staticSeo()->create(
            [
                'brand_id' => $brand->id,
                'canonical' => '1',
                'content_type' => 'brand',
                'menu_name' => $menuName,
                'page_name' => $menuName,
                'page_path' => 'brands/'.$brand->slug,
                'open_graph_type' => 'website',
                'html_schema_1' => 'Thing',
                'html_schema_2' => 'Brand',
                'html_schema_3' => '',
                'body_schema' => 'Website',
                'seo_image_url' => $seo_image_url,
            ]
        );

        return redirect()->route('admin.brands.index');
    }

    public function edit(Brand $brand)
    {
        abort_if(Gate::denies('brand_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.brands.edit', compact('brand'));
    }

    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $brand->update($request->all());

        if ($request->input('logo', false)) {
            if (! $brand->logo || $request->input('logo') !== $brand->logo->file_name) {
                if ($brand->logo) {
                    $brand->logo->delete();
                }
                $brand->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
            }
        } elseif ($brand->logo) {
            $brand->logo->delete();
        }

        $brand = Brand::findOrFail($brand->id);

        $menuName = \Str::of($brand->slug)->replace('-', ' ')->title();

        if ($brand->logo) {
            $seo_image_url = $brand->logo->getUrl();
        } else {
            $seo_image_url = '';
        }

        $brand->staticSeo()->updateOrCreate(
            [
                'brand_id' => $brand->id,
            ],
            [
                'brand_id' => $brand->id,
                'canonical' => '1',
                'content_type' => 'brand',
                'menu_name' => $menuName,
                'page_name' => $menuName,
                'page_path' => 'brands/'.$brand->slug,
                'open_graph_type' => 'website',
                'html_schema_1' => 'Thing',
                'html_schema_2' => 'Brand',
                'html_schema_3' => '',
                'body_schema' => 'Website',
                'seo_image_url' => $seo_image_url,
            ]
        );

        return $request->preview ? response()->json($brand->slug) : redirect()->route('admin.brands.index');

    }

    public function show(Brand $brand)
    {
        abort_if(Gate::denies('brand_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brand->load('brandProducts', 'brandBuilds');

        return view('admin.brands.show', compact('brand'));
    }

    public function destroy(Brand $brand)
    {
        abort_if(Gate::denies('brand_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brand->delete();

        return back();
    }

    public function massDestroy(MassDestroyBrandRequest $request)
    {
        $brands = Brand::find(request('ids'));

        foreach ($brands as $brand) {
            $brand->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('brand_create') && Gate::denies('brand_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Brand();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
