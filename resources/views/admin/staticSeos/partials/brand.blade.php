
@if ($staticSeo->content_type=='brand')
    {{-- brand section only  --}}
    <div class="col-12">
        <div class="form-group col-6">
            <label for="brand_id">{{ trans('cruds.staticSeo.fields.brand') }}</label>
            <select class="form-control select2 {{ $errors->has('brand') ? 'is-invalid' : '' }} form-control-lg" name="brand_id" id="brand_id">
                @foreach($brands as $id => $entry)
                    <option value="{{ $id }}" {{ (old('brand_id') ? old('brand_id') : $staticSeo->brand->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                @endforeach
            </select>
            @if($errors->has('brand'))
                <span class="text-danger">{{ $errors->first('brand') }}</span>
            @endif
            <span class="help-block">{{ trans('cruds.staticSeo.fields.brand_helper') }}</span>
        </div>
    </div>
    {{-- brand section only  --}}
@endif

