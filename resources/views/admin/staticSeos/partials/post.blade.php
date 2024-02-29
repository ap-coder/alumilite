
@if ($staticSeo->content_type=='post')
    {{-- post section only  --}}
    <div class="col-12">
        <div class="form-group col-6">
            <label for="post_id">{{ trans('cruds.staticSeo.fields.post') }}</label>
            <select class="form-control select2 {{ $errors->has('post') ? 'is-invalid' : '' }}  form-control-lg" name="post_id" id="post_id">
                @foreach($posts as $id => $entry)
                    <option value="{{ $id }}" {{ (old('post_id') ? old('post_id') : $staticSeo->post->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                @endforeach
            </select>
            @if($errors->has('post'))
                <span class="text-danger">{{ $errors->first('post') }}</span>
            @endif
            <span class="help-block">{{ trans('cruds.staticSeo.fields.post_helper') }}</span>
        </div>
    </div>
    {{-- post section only  --}}
@endif

