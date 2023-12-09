@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.build.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.builds.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.id') }}
                        </th>
                        <td>
                            {{ $build->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.published') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $build->published ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.name') }}
                        </th>
                        <td>
                            {{ $build->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.subtitle') }}
                        </th>
                        <td>
                            {{ $build->subtitle }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.description') }}
                        </th>
                        <td>
                            {!! $build->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.photo') }}
                        </th>
                        <td>
                            @if($build->photo)
                                <a href="{{ $build->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $build->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.additional_photos') }}
                        </th>
                        <td>
                            @foreach($build->additional_photos as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.documents') }}
                        </th>
                        <td>
                            @foreach($build->documents as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.brand') }}
                        </th>
                        <td>
                            {{ $build->brand->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.brand_model') }}
                        </th>
                        <td>
                            {{ $build->brand_model->model ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.category') }}
                        </th>
                        <td>
                            @foreach($build->categories as $key => $category)
                                <span class="label label-info">{{ $category->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.timeframe') }}
                        </th>
                        <td>
                            {{ $build->timeframe }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.slug') }}
                        </th>
                        <td>
                            {{ $build->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.customer_company') }}
                        </th>
                        <td>
                            {{ $build->customer_company }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.customer_name') }}
                        </th>
                        <td>
                            {{ $build->customer_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.customer_link') }}
                        </th>
                        <td>
                            {{ $build->customer_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.customer_website') }}
                        </th>
                        <td>
                            {{ $build->customer_website }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.build.fields.created_at') }}
                        </th>
                        <td>
                            {{ $build->created_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.builds.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#build_reviews" role="tab" data-toggle="tab">
                {{ trans('cruds.review.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="build_reviews">
            @includeIf('admin.builds.relationships.buildReviews', ['reviews' => $build->buildReviews])
        </div>
    </div>
</div>

@endsection