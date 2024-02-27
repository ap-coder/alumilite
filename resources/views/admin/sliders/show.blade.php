@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.slider.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sliders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.id') }}
                        </th>
                        <td>
                            {{ $slider->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.published') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $slider->published ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.location') }}
                        </th>
                        <td>
                            {{ App\Models\Slider::LOCATION_SELECT[$slider->location] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.image') }}
                        </th>
                        <td>
                            @if($slider->image)
                                <a href="{{ $slider->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $slider->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.sub_title') }}
                        </th>
                        <td>
                            {{ $slider->sub_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.sub_title_css') }}
                        </th>
                        <td>
                            {{ $slider->sub_title_css }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.main_title') }}
                        </th>
                        <td>
                            {{ $slider->main_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.main_title_css') }}
                        </th>
                        <td>
                            {{ $slider->main_title_css }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.sub_title_2') }}
                        </th>
                        <td>
                            {{ $slider->sub_title_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.sub_title_2_css') }}
                        </th>
                        <td>
                            {{ $slider->sub_title_2_css }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.slider_description') }}
                        </th>
                        <td>
                            {{ $slider->slider_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.slider_description_css') }}
                        </th>
                        <td>
                            {{ $slider->slider_description_css }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.text_heading') }}
                        </th>
                        <td>
                            {{ $slider->text_heading }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.text_heading_css') }}
                        </th>
                        <td>
                            {{ $slider->text_heading_css }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.heading_1') }}
                        </th>
                        <td>
                            {{ $slider->heading_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.heading_1_css') }}
                        </th>
                        <td>
                            {{ $slider->heading_1_css }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.heading_2') }}
                        </th>
                        <td>
                            {{ $slider->heading_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.heading_2_css') }}
                        </th>
                        <td>
                            {{ $slider->heading_2_css }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.heading_3') }}
                        </th>
                        <td>
                            {{ $slider->heading_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.heading_3_css') }}
                        </th>
                        <td>
                            {{ $slider->heading_3_css }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.text') }}
                        </th>
                        <td>
                            {{ $slider->text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.text_css') }}
                        </th>
                        <td>
                            {{ $slider->text_css }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.main_button_text') }}
                        </th>
                        <td>
                            {{ $slider->main_button_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.main_button_link') }}
                        </th>
                        <td>
                            {{ $slider->main_button_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.main_button_tab_index') }}
                        </th>
                        <td>
                            {{ $slider->main_button_tab_index }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.main_button_css') }}
                        </th>
                        <td>
                            {{ $slider->main_button_css }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.main_button_icon_class') }}
                        </th>
                        <td>
                            {{ $slider->main_button_icon_class }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.second_button_text') }}
                        </th>
                        <td>
                            {{ $slider->second_button_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.second_button_link') }}
                        </th>
                        <td>
                            {{ $slider->second_button_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.second_button_tab_index') }}
                        </th>
                        <td>
                            {{ $slider->second_button_tab_index }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.second_button_css') }}
                        </th>
                        <td>
                            {{ $slider->second_button_css }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.second_button_icon_class') }}
                        </th>
                        <td>
                            {{ $slider->second_button_icon_class }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sliders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection