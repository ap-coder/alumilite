<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;
use App\Models\BrandModel;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use App\Models\ProductType;
use App\Models\TechnicalSpec;
use App\Models\Feature;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Product::with(['brand', 'brand_model', 'categories', 'tags', 'technical_specs', 'product_type'])->select(sprintf('%s.*', (new Product)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'product_show';
                $editGate      = 'product_edit';
                $deleteGate    = 'product_delete';
                $crudRoutePart = 'products';

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
            $table->editColumn('price', function ($row) {
                return $row->price ? $row->price : '';
            });
            $table->editColumn('msrp', function ($row) {
                return $row->msrp ? $row->msrp : '';
            });
            // $table->addColumn('brand_name', function ($row) {
            //     return $row->brand ? $row->brand->name : '';
            // });

            // $table->addColumn('brand_model_model', function ($row) {
            //     return $row->brand_model ? $row->brand_model->model : '';
            // });

            $table->editColumn('category', function ($row) {
                $labels = [];
                foreach ($row->categories as $category) {
                    $labels[] = sprintf('<span class="label label-info label-many">%s</span>', $category->name);
                }

                return implode(' ', $labels);
            });

            $table->rawColumns(['actions', 'placeholder', 'published', 'category']);

            return $table->make(true);
        }

        return view('admin.products.index');
    }

    protected static function booted() {
        static::updating(function ($product) {
            \Log::debug('Product updating:', $product->toArray());
        });
    }

    public function create()
    {
        abort_if(Gate::denies('product_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brands = Brand::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $brand_models = BrandModel::pluck('model', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = ProductCategory::pluck('name', 'id');

        $tags = ProductTag::pluck('name', 'id');

        $technical_specs = TechnicalSpec::pluck('name', 'id');

        $features = Feature::pluck('name', 'id');

        $product_types = ProductType::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.products.create', compact('brand_models', 'brands', 'categories', 'product_types', 'tags', 'technical_specs','features'));
    }

    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->all());
        $product->categories()->sync($request->input('categories', []));
        $product->tags()->sync($request->input('tags', []));
        $product->technical_specs()->sync($request->input('technical_specs', []));
        $product->features()->sync($request->input('features', []));

        if ($request->input('photo', false)) {
            $product->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        foreach ($request->input('additional_photos', []) as $file) {
            $product->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('additional_photos');
        }

        foreach ($request->input('documents', []) as $file) {
            $product->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('documents');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $product->id]);
        }

        $product = Product::findOrFail($product->id);

        $menuName = \Str::of($product->slug)->replace('-', ' ')->title();

        $cleanDescription = strip_tags($product->description);
        $shortDescription = substr($cleanDescription, 0, 110);

        if ($product->photo) {
            $seo_image_url = $product->photo->getUrl();
        } else {
            $seo_image_url = '';
        }

        $product->staticSeo()->create(
            [
                'product_id' => $product->id,
                'canonical' => '1',
                'content_type' => 'product',
                'menu_name' => $menuName,
                'page_name' => $menuName,
                'page_path' => 'products/'.$product->slug,
                'open_graph_type' => 'product',
                'html_schema_1' => 'Thing',
                'html_schema_2' => 'Product',
                'html_schema_3' => '',
                'body_schema' => 'IndividualProduct',
                'body_schema_itemid' => '#product',
                'seo_image_url' => $seo_image_url,
                'meta_title' => $product->name,
                'facebook_title' => $product->name,
                'twitter_title' => $product->name,
                'facebook_description' => $shortDescription,
                'twitter_description' => $shortDescription,
                'meta_description' => $shortDescription,
            ]
        );

        return redirect()->route('admin.products.index');
    }

    public function edit(Product $product)
    {
        abort_if(Gate::denies('product_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brands = Brand::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $brand_models = BrandModel::pluck('model', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = ProductCategory::pluck('name', 'id');

        $tags = ProductTag::pluck('name', 'id');

        $technical_specs = TechnicalSpec::pluck('name', 'id');

        $features = Feature::pluck('name', 'id');

        $product_types = ProductType::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $product->load('brand', 'brand_model', 'categories', 'tags', 'technical_specs', 'product_type');

        return view('admin.products.edit', compact('brand_models', 'brands', 'categories', 'product', 'product_types', 'tags', 'technical_specs','features'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());

        $product->categories()->sync($request->input('categories', []));
        $product->tags()->sync($request->input('tags', []));
        $product->technical_specs()->sync($request->input('technical_specs', []));
        $product->features()->sync($request->input('features', []));

        if ($request->input('photo', false)) {
            if (! $product->photo || $request->input('photo') !== $product->photo->file_name) {
                if ($product->photo) {
                    $product->photo->delete();
                }
                $product->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($product->photo) {
            $product->photo->delete();
        }

        if (count($product->additional_photos) > 0) {
            foreach ($product->additional_photos as $media) {
                if (! in_array($media->file_name, $request->input('additional_photos', []))) {
                    $media->delete();
                }
            }
        }
        $media = $product->additional_photos->pluck('file_name')->toArray();
        foreach ($request->input('additional_photos', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $product->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('additional_photos');
            }
        }

        if (count($product->documents) > 0) {
            foreach ($product->documents as $media) {
                if (! in_array($media->file_name, $request->input('documents', []))) {
                    $media->delete();
                }
            }
        }
        $media = $product->documents->pluck('file_name')->toArray();
        foreach ($request->input('documents', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $product->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('documents');
            }
        }

        // $product = Product::findOrFail($product->id);

        $staticSeo = $product->staticSeo()->first();

        if ($staticSeo && !$staticSeo->deactivate_update) {
            $cleanDescription = strip_tags($product->description);
            $shortDescription = substr($cleanDescription, 0, 110);

            $menuName = \Str::of($product->slug)->replace('-', ' ')->title();

            if ($product->photo) {
                $seo_image_url = $product->photo->getUrl();
            } else {
                $seo_image_url = '';
            }

            $product->staticSeo()->updateOrCreate(
                [
                    'product_id' => $product->id,
                ],
                [
                    'product_id' => $product->id,
                    'canonical' => '1',
                    'content_type' => 'product',
                    'menu_name' => $menuName,
                    'page_name' => $menuName,
                    'page_path' => 'products/' . $product->slug,
                    'open_graph_type' => 'product',
                    'html_schema_1' => 'Thing',
                    'html_schema_2' => 'Product',
                    'html_schema_3' => '',
                    'body_schema' => 'IndividualProduct',
                    'body_schema_itemid' => '#product',
                    'seo_image_url' => $seo_image_url,
                    'meta_title' => $product->name,
                    'facebook_title' => $product->name,
                    'twitter_title' => $product->name,
                    'facebook_description' => $shortDescription,
                    'twitter_description' => $shortDescription,
                    'meta_description' => $shortDescription,
                ]
            );
        }

        return $request->preview ? response()->json($product->slug) : redirect()->route('admin.products.index');

    }

    public function show(Product $product)
    {
        abort_if(Gate::denies('product_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $product->load('brand', 'brand_model', 'categories', 'tags', 'technical_specs', 'product_type','features');

        return view('admin.products.show', compact('product'));
    }

    public function destroy(Product $product)
    {
        abort_if(Gate::denies('product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $product->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductRequest $request)
    {
        $products = Product::find(request('ids'));

        foreach ($products as $product) {
            $product->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('product_create') && Gate::denies('product_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Product();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
