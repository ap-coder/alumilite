<div class="row">

    <div class="form-group col-md-4">
        <label for="menu_name">{{ trans('cruds.staticSeo.fields.menu_name') }}</label>
        <input class="form-control {{ $errors->has('menu_name') ? 'is-invalid' : '' }}" type="text" name="menu_name" id="menu_name" value="{{ old('menu_name', @$staticSeo->menu_name) }}">
        @if($errors->has('menu_name'))
            <span class="text-danger">{{ $errors->first('menu_name') }}</span>
        @endif
        <span class="help-block">{{ trans('cruds.staticSeo.fields.menu_name_helper') }}</span>
    </div>
    <div class="form-group col-md-4">
        <label>{{ trans('cruds.staticSeo.fields.content_type') }}</label>
        <select class="form-control {{ $errors->has('content_type') ? 'is-invalid' : '' }}" name="content_type" id="content_type" disabled>
            <option value disabled {{ old('content_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
            @foreach(App\Models\StaticSeo::CONTENT_TYPE_SELECT as $key => $label)
                <option value="{{ $key }}" {{ old('content_type', $staticSeo->content_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </select>
        @if($errors->has('content_type'))
            <span class="text-danger">{{ $errors->first('content_type') }}</span>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label>{{ trans('cruds.staticSeo.fields.open_graph_type') }}</label>
        <select class="form-control {{ $errors->has('open_graph_type') ? 'is-invalid' : '' }}" name="open_graph_type" id="open_graph_type">
            <option value disabled {{ old('open_graph_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
            @foreach(App\Models\StaticSeo::OPEN_GRAPH_TYPE_SELECT as $key => $label)
                <option value="{{ $key }}" {{ old('open_graph_type', $staticSeo->open_graph_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </select>
        @if($errors->has('open_graph_type'))
            <span class="text-danger">{{ $errors->first('open_graph_type') }}</span>
        @endif
    </div>

</div>
