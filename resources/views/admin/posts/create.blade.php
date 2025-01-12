@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.post.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.posts.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="form-check {{ $errors->has('published') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="published" value="0">
                    <input class="form-check-input" type="checkbox" name="published" id="published" value="1" {{ old('published', 0) == 1 || old('published') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="published">{{ trans('cruds.post.fields.published') }}</label>
                </div>
                @if($errors->has('published'))
                    <div class="invalid-feedback">
                        {{ $errors->first('published') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.post.fields.published_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.post.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.post.fields.title_helper') }}</span>
            </div>
            
            
            {{-- <div class="form-group">
                <label for="categories">{{ trans('cruds.post.fields.category') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>

                   <div class="input-group">
                        <select class="form-control select2" name="categories[]" id="categories" multiple="multiple">
                            @foreach($categories as $id => $name)
                                <option value="{{ $id }}" {{ in_array($id, old('categories', [])) ? 'selected' : '' }}>{{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="addCategory"><i class="cil-plus"></i> Button </button>
                        </div>
                    </div>

                @if($errors->has('categories'))
                    <div class="invalid-feedback">
                        {{ $errors->first('categories') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.post.fields.category_helper') }}</span>
            </div> --}}


            <div class="form-group">
                <label for="categories">{{ trans('cruds.post.fields.category') }}</label>
                <div class="input-group">
                    <select class="form-control select2" name="categories[]" id="categories" multiple="multiple">
                        @foreach($categories as $id => $name)
                            <option value="{{ $id }}" {{ in_array($id, old('categories', [])) ? 'selected' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="addCategory">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                @if($errors->has('categories'))
                    <div class="invalid-feedback">
                        {{ $errors->first('categories') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.post.fields.category_helper') }}</span>
            </div>

 
      
            {{-- <div class="form-group">
                <label for="tags">{{ trans('cruds.post.fields.tag') }}</label>
                <div class="input-group">
                    <select class="form-control select2" name="tags[]" id="tags" multiple="multiple">
                        @foreach($tags as $id => $name) <!-- Assuming $tags is defined similarly to $categories -->
                            <option value="{{ $id }}" {{ in_array($id, old('tags', [])) ? 'selected' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="addTag">
                            <i class="fas fa-plus"></i> <!-- Font Awesome "+" icon -->
                        </button>
                    </div>
                </div>
                @if($errors->has('tags'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tags') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.post.fields.tag_helper') }}</span>
            </div> --}}
            

            <div class="form-group">
                <label for="tags">{{ trans('cruds.post.fields.tag') }}</label>
                <div class="input-group">
                    <select class="form-control select2" name="tags[]" id="tags" multiple="multiple">
                        @foreach($tags as $id => $name) <!-- Assuming $tags is defined similarly to $categories -->
                            <option value="{{ $id }}" {{ in_array($id, old('tags', [])) ? 'selected' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="addTag">
                            <i class="fas fa-plus"></i> <!-- Font Awesome "+" icon -->
                        </button>
                    </div>
                </div>
                @if($errors->has('tags'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tags') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.post.fields.tag_helper') }}</span>
            </div>


            {{-- <div class="form-group">
                <label for="tags">{{ trans('cruds.post.fields.tag') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('tags') ? 'is-invalid' : '' }}" name="tags[]" id="tags" multiple>
                    @foreach($tags as $id => $tag)
                        <option value="{{ $id }}" {{ in_array($id, old('tags', [])) ? 'selected' : '' }}>{{ $tag }}</option>
                    @endforeach
                </select>
                @if($errors->has('tags'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tags') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.post.fields.tag_helper') }}</span>
            </div> --}}



            <div class="form-group">
                <label for="page_text">{{ trans('cruds.post.fields.page_text') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('page_text') ? 'is-invalid' : '' }}" name="page_text" id="page_text">{!! old('page_text') !!}</textarea>
                @if($errors->has('page_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('page_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.post.fields.page_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="excerpt">{{ trans('cruds.post.fields.excerpt') }}</label>
                <textarea class="form-control {{ $errors->has('excerpt') ? 'is-invalid' : '' }}" name="excerpt" id="excerpt">{{ old('excerpt') }}</textarea>
                @if($errors->has('excerpt'))
                    <div class="invalid-feedback">
                        {{ $errors->first('excerpt') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.post.fields.excerpt_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="featured_image">{{ trans('cruds.post.fields.featured_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('featured_image') ? 'is-invalid' : '' }}" id="featured_image-dropzone">
                </div>
                @if($errors->has('featured_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('featured_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.post.fields.featured_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="author_id">{{ trans('cruds.post.fields.author') }}</label>
                <select class="form-control select2 {{ $errors->has('author') ? 'is-invalid' : '' }}" name="author_id" id="author_id" style="width: 100%;" >
                    @foreach($authors as $id => $author)
                    <option value="{{ $id }}" {{ (old('author_id') ? old('author_id') : $post->author->id ?? '') == $id ? 'selected' : '' }}>{{ $author }}</option>
                    @endforeach
                </select>
                @if($errors->has('author'))
                    <span class="text-danger">{{ $errors->first('author') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.post.fields.author_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="slug">{{ trans('cruds.post.fields.slug') }}</label>
                <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', '') }}">
                @if($errors->has('slug'))
                    <div class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.post.fields.slug_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.posts.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $post->id ?? 0 }}');
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
        extraPlugins: [SimpleUploadAdapter],
        mediaEmbed: {previewsInData: true}
      }
    );
  }
});
</script>

<script>
    Dropzone.options.featuredImageDropzone = {
    url: '{{ route('admin.posts.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="featured_image"]').remove()
      $('form').append('<input type="hidden" name="featured_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="featured_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($post) && $post->featured_image)
      var file = {!! json_encode($post->featured_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="featured_image" value="' + file.file_name + '">')
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

<script>
    $(document).ready(function() {
        // Initialize Select2
        $('#categories').select2({             
            width: '100%',  
            tags: true, // Allows the creation of new options on the fly
            createTag: function (params) {
                // This function overrides the default behavior for creating new tags
                // You can add custom logic here if needed, for example, to prevent automatic tag creation
                return null; // Prevents Select2 from automatically creating a new tag
            }
        });

        $('#addCategory').click(function() {
            var categoryName = prompt("Please enter the new category name:");
            if (categoryName) {
                $.ajax({
                    url: '/admin/content-categories/store-ajax',
                    type: 'POST',
                    data: {
                        name: categoryName,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        // Create a new Option and append it to the Select2 control
                        var newOption = new Option(response.name, response.id, true, true);
                        $('#categories').append(newOption).trigger('change');

                        // Optionally, you can make the new option selected immediately
                        // $('#categories').val(response.id).trigger('change');
                    },
                    error: function(xhr, status, error) {
                        alert("Error adding category: " + error);
                    }
                });
            }
        });
    });

    $(document).ready(function() {
        $('#addTag').click(function() {
            var tagName = prompt("Please enter the new tag name:");
            if (tagName) {
                $.ajax({
                    url: '/admin/content-tags/store-ajax', 
                    type: 'POST',
                    data: {
                        name: tagName,
                        _token: $('meta[name="csrf-token"]').attr('content') // CSRF token
                    },
                    success: function(response) {
                        var newOption = new Option(response.name, response.id, true, true);
                        $('#tags').append(newOption).trigger('change');
                    },
                    error: function(xhr, status, error) {
                        alert("Error adding tag: " + error);
                    }
                });
            }
        });

        $('.select2').select2({
            width: '100%',
            tags: true // Allows the creation of new options on the fly
        });
    });



    $(document).ready(function() {
        function adjustSelect2Width() {
            var select2Width = $('.input-group').width() - $('.input-group-append').outerWidth(true) - 2; // 2px for border
            $('.select2-container--default').css('width', select2Width);
        }

        adjustSelect2Width();
        $(window).resize(adjustSelect2Width);
    });
</script>

@endsection