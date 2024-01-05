@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.pagesection.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.pagesections.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
            <div class="form-group col-2">
                <div class="form-check {{ $errors->has('published') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="published" value="0">
                    <input class="form-check-input" type="checkbox" name="published" id="published" value="1" {{ old('published', 0) == 1 || old('published') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="published">{{ trans('cruds.pagesection.fields.published') }}</label>
                </div>
                @if($errors->has('published'))
                    <span class="text-danger">{{ $errors->first('published') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pagesection.fields.published_helper') }}</span>
            </div>
            <div class="form-group col-2">
                <div class="form-check {{ $errors->has('use_crud_section') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="use_crud_section" value="0">
                    <label class="form-check-label" for="use_crud_section">
                        <input class="form-check-input" type="checkbox" name="use_crud_section" id="use_crud_section" value="1" {{ old('use_crud_section', 0) == 1 || old('use_crud_section') === null ? '' : '' }}>

                        <span class="label-text">{{ trans('cruds.pagesection.fields.use_crud_section') }}</span>
                    </label>
                </div>
                @if($errors->has('use_crud_section'))
                    <span class="text-danger">{{ $errors->first('use_crud_section') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pagesection.fields.use_crud_section_helper') }}</span>
            </div>
            <div class="form-group col-2">
                <label for="order">{{ trans('cruds.pagesection.fields.order') }}</label>
                <input class="form-control {{ $errors->has('order') ? 'is-invalid' : '' }}" type="number" name="order" id="order" value="{{ old('order', '0') }}" step="1">
                @if($errors->has('order'))
                    <span class="text-danger">{{ $errors->first('order') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pagesection.fields.order_helper') }}</span>
            </div>
            </div>
            <div class="form-group">
                <label for="section_nickname">{{ trans('cruds.pagesection.fields.section_nickname') }}</label>
                <input class="form-control {{ $errors->has('section_nickname') ? 'is-invalid' : '' }}" type="text" name="section_nickname" id="section_nickname" value="{{ old('section_nickname', '') }}">
                @if($errors->has('section_nickname'))
                    <span class="text-danger">{{ $errors->first('section_nickname') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pagesection.fields.section_nickname_helper') }}</span>
            </div>
            <div class="form-group" id="section_box">
                <label class="required" for="section">{{ trans('cruds.pagesection.fields.section') }}</label>
                <textarea class="form-control {{ $errors->has('section') ? 'is-invalid' : '' }}" name="section" id="section">{{ old('section') }}</textarea>
                @if($errors->has('section'))
                    <span class="text-danger">{{ $errors->first('section') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pagesection.fields.section_helper') }}</span>
            </div>
            <div class="form-group" style="display:none;" id="select_crud_section_box">
                <label for="select_crud_section">{{ trans('cruds.pagesection.fields.select_crud_section') }}</label>
                <select class="form-control select2 {{ $errors->has('select_crud_section') ? 'is-invalid' : '' }}" name="select_crud_section" id="select_crud_section">
                    <option value disabled {{ old('select_crud_section', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Pagesection::SELECT_CRUD_SECTION as $key => $label)
                        <option value="{{ $key }}" {{ old('select_crud_section','') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                <span class="help-block">{{ trans('cruds.pagesection.fields.select_crud_section_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="section_preview">{{ trans('cruds.pagesection.fields.section_preview') }}</label>
                <div class="needsclick dropzone {{ $errors->has('section_preview') ? 'is-invalid' : '' }}" id="section_preview-dropzone">
                </div>
                @if($errors->has('section_preview'))
                    <span class="text-danger">{{ $errors->first('section_preview') }}</span>
                @endif
                <span class="help-block">This is the page section preview.</span>
            </div>
            
            <div class="form-group">
                <label for="pages">{{ trans('cruds.pagesection.fields.pages') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('pages') ? 'is-invalid' : '' }}" name="pages[]" id="pages" multiple>
                    @foreach($pages as $id => $page)
                        <option value="{{ $id }}" {{ in_array($id, old('pages', [])) ? 'selected' : '' }}>{{ $page }}</option>
                    @endforeach
                </select>
                @if($errors->has('pages'))
                    <span class="text-danger">{{ $errors->first('pages') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pagesection.fields.pages_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>

<div id="dummy"></div>

@endsection


@section('scripts')

<script>

    $('#use_crud_section').click(function(){
        if($(this).prop('checked') == true){
            $('#section_box').hide();
            $('#select_crud_section_box').show();
        }else{
            $('#select_crud_section_box').hide();
            $('#section_box').show();
        }
    });

    Dropzone.options.sectionPreviewDropzone = {
    url: '{{ route('admin.pagesections.storeMedia') }}',
    maxFilesize: 10, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif,.svg,.webp',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 10,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="section_preview"]').remove()
      $('form').append('<input type="hidden" name="section_preview" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="section_preview"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {

    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
  }
  </script>

@endsection
