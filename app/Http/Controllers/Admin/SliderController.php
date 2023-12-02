<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySliderRequest;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Slider;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class SliderController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('slider_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Slider::query()->select(sprintf('%s.*', (new Slider)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'slider_show';
                $editGate      = 'slider_edit';
                $deleteGate    = 'slider_delete';
                $crudRoutePart = 'sliders';

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
            $table->editColumn('image', function ($row) {
                if ($photo = $row->image) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });
            $table->editColumn('sub_title', function ($row) {
                return $row->sub_title ? $row->sub_title : '';
            });
            $table->editColumn('main_title', function ($row) {
                return $row->main_title ? $row->main_title : '';
            });
            $table->editColumn('sub_title_2', function ($row) {
                return $row->sub_title_2 ? $row->sub_title_2 : '';
            });
            $table->editColumn('slider_description', function ($row) {
                return $row->slider_description ? $row->slider_description : '';
            });
            $table->editColumn('text_heading', function ($row) {
                return $row->text_heading ? $row->text_heading : '';
            });
            $table->editColumn('heading_1', function ($row) {
                return $row->heading_1 ? $row->heading_1 : '';
            });
            $table->editColumn('heading_2', function ($row) {
                return $row->heading_2 ? $row->heading_2 : '';
            });
            $table->editColumn('heading_3', function ($row) {
                return $row->heading_3 ? $row->heading_3 : '';
            });
            $table->editColumn('text', function ($row) {
                return $row->text ? $row->text : '';
            });
            $table->editColumn('main_button_text', function ($row) {
                return $row->main_button_text ? $row->main_button_text : '';
            });
            $table->editColumn('main_button_link', function ($row) {
                return $row->main_button_link ? $row->main_button_link : '';
            });
            $table->editColumn('main_button_tab_index', function ($row) {
                return $row->main_button_tab_index ? $row->main_button_tab_index : '';
            });
            $table->editColumn('second_button_text', function ($row) {
                return $row->second_button_text ? $row->second_button_text : '';
            });
            $table->editColumn('second_button_link', function ($row) {
                return $row->second_button_link ? $row->second_button_link : '';
            });
            $table->editColumn('second_button_tab_index', function ($row) {
                return $row->second_button_tab_index ? $row->second_button_tab_index : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'image']);

            return $table->make(true);
        }

        return view('admin.sliders.index');
    }

    public function create()
    {
        abort_if(Gate::denies('slider_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sliders.create');
    }

    public function store(StoreSliderRequest $request)
    {
        $slider = Slider::create($request->all());

        if ($request->input('image', false)) {
            $slider->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $slider->id]);
        }

        return redirect()->route('admin.sliders.index');
    }

    public function edit(Slider $slider)
    {
        abort_if(Gate::denies('slider_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $slider->update($request->all());

        if ($request->input('image', false)) {
            if (! $slider->image || $request->input('image') !== $slider->image->file_name) {
                if ($slider->image) {
                    $slider->image->delete();
                }
                $slider->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($slider->image) {
            $slider->image->delete();
        }

        return redirect()->route('admin.sliders.index');
    }

    public function show(Slider $slider)
    {
        abort_if(Gate::denies('slider_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sliders.show', compact('slider'));
    }

    public function destroy(Slider $slider)
    {
        abort_if(Gate::denies('slider_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $slider->delete();

        return back();
    }

    public function massDestroy(MassDestroySliderRequest $request)
    {
        $sliders = Slider::find(request('ids'));

        foreach ($sliders as $slider) {
            $slider->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('slider_create') && Gate::denies('slider_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Slider();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
