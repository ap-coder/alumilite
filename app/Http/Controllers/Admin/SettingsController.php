<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySettingRequest;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SettingsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $setting = Setting::first();

        return view('admin.settings.edit', compact('setting'));
    }

    public function create()
    {
        abort_if(Gate::denies('setting_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.settings.create');
    }

    public function store(StoreSettingRequest $request)
    {
        $setting = Setting::create($request->all());

        if ($request->input('header_logo', false)) {
            $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('header_logo'))))->toMediaCollection('header_logo');
        }

        if ($request->input('footer_logo', false)) {
            $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('footer_logo'))))->toMediaCollection('footer_logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $setting->id]);
        }

        return redirect()->route('admin.settings.index');
    }

    public function edit(Setting $setting)
    {
        abort_if(Gate::denies('setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.settings.edit', compact('setting'));
    }

    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $setting->update($request->all());

        if ($request->input('header_logo', false)) {
            if (! $setting->header_logo || $request->input('header_logo') !== $setting->header_logo->file_name) {
                if ($setting->header_logo) {
                    $setting->header_logo->delete();
                }
                $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('header_logo'))))->toMediaCollection('header_logo');
            }
        } elseif ($setting->header_logo) {
            $setting->header_logo->delete();
        }

        if ($request->input('footer_logo', false)) {
            if (! $setting->footer_logo || $request->input('footer_logo') !== $setting->footer_logo->file_name) {
                if ($setting->footer_logo) {
                    $setting->footer_logo->delete();
                }
                $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('footer_logo'))))->toMediaCollection('footer_logo');
            }
        } elseif ($setting->footer_logo) {
            $setting->footer_logo->delete();
        }

        return redirect()->route('admin.settings.index');
    }

    public function show(Setting $setting)
    {
        abort_if(Gate::denies('setting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.settings.show', compact('setting'));
    }

    public function destroy(Setting $setting)
    {
        abort_if(Gate::denies('setting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $setting->delete();

        return back();
    }

    public function massDestroy(MassDestroySettingRequest $request)
    {
        $settings = Setting::find(request('ids'));

        foreach ($settings as $setting) {
            $setting->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('setting_create') && Gate::denies('setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Setting();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
