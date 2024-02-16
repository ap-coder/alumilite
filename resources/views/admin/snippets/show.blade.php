@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.snippet.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.snippets.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.snippet.fields.id') }}
                        </th>
                        <td>
                            {{ $snippet->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.snippet.fields.name') }}
                        </th>
                        <td>
                            {{ $snippet->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.snippet.fields.snippet') }}
                        </th>
                        <td>
                            {!! $snippet->snippet !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.snippet.fields.code_snippet') }}
                        </th>
                        <td>
                            {{ $snippet->code_snippet }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.snippets.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection