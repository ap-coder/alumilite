{{-- build section only  --}}
@if ($staticSeo->content_type=='build')
    <div class="row">
        <div class="form-group col-6">
            <label for="build_id">{{ trans('cruds.staticSeo.fields.build') }}</label>
            <select class="form-control select2 {{ $errors->has('build') ? 'is-invalid' : '' }}" name="build_id" id="build_id">
                @foreach($builds as $id => $entry)
                    <option value="{{ $id }}" {{ (old('build_id') ? old('build_id') : $staticSeo->build->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                @endforeach
            </select>
            @if($errors->has('build'))
                <span class="text-danger">{{ $errors->first('build') }}</span>
            @endif
            <span class="help-block">{{ trans('cruds.staticSeo.fields.build_helper') }}</span>
        </div>
    </div>
@endif
{{-- build section only  --}}
