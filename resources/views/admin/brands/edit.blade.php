@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.brand.title_singular') }}
        @if ($brand->staticSeo)
            <a class="btn btn-success float-right" href="{{ route('admin.static-seos.edit', $brand->staticSeo->id) }}">SEO</a>
        @endif
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.brands.update", [$brand->id]) }}" enctype="multipart/form-data" id="submitBrandsForm">
            @method('PUT')
            @csrf
            <div class="form-group">
                <div class="form-check {{ $errors->has('published') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="published" value="0">
                    <input class="form-check-input" type="checkbox" name="published" id="published" value="1" {{ $brand->published || old('published', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="published">{{ trans('cruds.brand.fields.published') }}</label>
                </div>
                @if($errors->has('published'))
                    <div class="invalid-feedback">
                        {{ $errors->first('published') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.brand.fields.published_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.brand.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $brand->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.brand.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="slug">{{ trans('cruds.brand.fields.slug') }}</label>
                <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', $brand->slug) }}">
                @if($errors->has('slug'))
                    <div class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.build.fields.slug_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.brand.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $brand->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.brand.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="logo">{{ trans('cruds.brand.fields.logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                </div>
                @if($errors->has('logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.brand.fields.logo_helper') }}</span>
            </div>
            <hr>


              <div class="form-group">
                <button class="btn btn-success saveContent" type="button" id="save" bType="save">
                  {{ trans('global.save') }}
                </button>
                <button class="btn btn-primary saveContent" id="save-and-preview" type="button"  bType="preview">
                  {{ trans('global.save_and_preview') }}
                </button>
                <button class="btn btn-danger" type="submit">
                  {{ trans('global.save_and_close') }}
              </button>
              </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>

$('.saveContent').click(function() {
        var bType = $(this).attr('bType');
        $('#submitBrandsForm').validate({
            rules: {
                'name': {
                    required: true,
                },
            },
            messages: {
                name: 'Please Enter brand Name',
            },
        });
        if ($('#submitBrandsForm').valid()) // check if form is valid
        {
            $this = $(this);
            $loader = '<div class="spinner-border text-dark" role="status">' +
                '<span class="sr-only">Loading...</span>' +
                '</div>';
            $this.html($loader);
            var formData = $('#submitBrandsForm').serializeArray();
            formData.push({ name: 'preview', value: 1 });
            $.ajax({
                type: 'POST',
                url: '{{ route("admin.brands.update", [$brand->id]) }}',
                dataType: 'json',
                data: formData,
                success: function(resultData) {
                    var url = "{{ url('brands') }}" + '/' + resultData;
                    if (bType == 'save') {
                        $this.html("{{ trans('global.save') }}");
                    } else {
                        $this.html("{{ trans('global.save_and_preview') }}");
                        window.open(url, '_blank');
                    }
                },
            });
        }
    });

    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.brands.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 600,
      height: 600
    },
    success: function (file, response) {
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($brand) && $brand->logo)
      var file = {!! json_encode($brand->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
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
