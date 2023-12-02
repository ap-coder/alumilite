@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.technicalSpec.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.technical-specs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.technicalSpec.fields.id') }}
                        </th>
                        <td>
                            {{ $technicalSpec->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.technicalSpec.fields.published') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $technicalSpec->published ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.technicalSpec.fields.name') }}
                        </th>
                        <td>
                            {{ $technicalSpec->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.technicalSpec.fields.value') }}
                        </th>
                        <td>
                            {{ $technicalSpec->value }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.technicalSpec.fields.icon_class') }}
                        </th>
                        <td>
                            {{ $technicalSpec->icon_class }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.technical-specs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection