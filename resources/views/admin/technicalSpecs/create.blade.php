@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.technicalSpec.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.technical-specs.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="form-check {{ $errors->has('published') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="published" value="0">
                    <input class="form-check-input" type="checkbox" name="published" id="published" value="1" {{ old('published', 0) == 1 || old('published') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="published">{{ trans('cruds.technicalSpec.fields.published') }}</label>
                </div>
                @if($errors->has('published'))
                    <div class="invalid-feedback">
                        {{ $errors->first('published') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.technicalSpec.fields.published_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.technicalSpec.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.technicalSpec.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value">{{ trans('cruds.technicalSpec.fields.value') }}</label>
                <input class="form-control {{ $errors->has('value') ? 'is-invalid' : '' }}" type="text" name="value" id="value" value="{{ old('value', '') }}">
                @if($errors->has('value'))
                    <div class="invalid-feedback">
                        {{ $errors->first('value') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.technicalSpec.fields.value_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="icon_class">{{ trans('cruds.technicalSpec.fields.icon_class') }}</label>
                <input class="form-control {{ $errors->has('icon_class') ? 'is-invalid' : '' }}" type="text" name="icon_class" id="icon_class" value="{{ old('icon_class', '') }}">
                @if($errors->has('icon_class'))
                    <div class="invalid-feedback">
                        {{ $errors->first('icon_class') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.technicalSpec.fields.icon_class_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection