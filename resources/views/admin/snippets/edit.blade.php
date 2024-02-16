@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.snippet.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.snippets.update", [$snippet->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.snippet.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $snippet->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.snippet.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="snippet">{{ trans('cruds.snippet.fields.snippet') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('snippet') ? 'is-invalid' : '' }}" name="snippet" id="snippet">{!! old('snippet', $snippet->snippet) !!}</textarea>
                @if($errors->has('snippet'))
                    <div class="invalid-feedback">
                        {{ $errors->first('snippet') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.snippet.fields.snippet_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="code_snippet">{{ trans('cruds.snippet.fields.code_snippet') }}</label>
                <textarea class="form-control {{ $errors->has('code_snippet') ? 'is-invalid' : '' }}" name="code_snippet" id="code_snippet">{{ old('code_snippet', $snippet->code_snippet) }}</textarea>
                @if($errors->has('code_snippet'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code_snippet') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.snippet.fields.code_snippet_helper') }}</span>
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

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.snippets.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $snippet->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection