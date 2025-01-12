@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.contentPage.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.content-pages.store") }}" enctype="multipart/form-data">
            @csrf
           
            <div class="row">
              <div class="col-7 col-sm-9">
                @include('admin.contentPages.partials.title')
	              @include('admin.contentPages.partials.path')
                  <div class="tab-content" id="vert-tabs-right-tabContent">
                      <div class="tab-pane fade show active" id="vert-tabs-right-general" role="tabpanel" aria-labelledby="vert-tabs-right-general-tab">
                          @include('admin.contentPages.partials.general')
                      </div>
                      <div class="tab-pane fade" id="vert-tabs-right-images"    role="tabpanel" aria-labelledby="vert-tabs-right-images-tab">
                          @include('admin.contentPages.partials.images')
          
                      </div>
          
                      <div class="tab-pane fade" id="vert-tabs-right-seo"      role="tabpanel" aria-labelledby="vert-tabs-right-seo-tab">
                      </div>

                      <div class="tab-pane fade" id="vert-tabs-right-settings" role="tabpanel" aria-labelledby="vert-tabs-right-settings-tab">
                        @include('admin.contentPages.partials.settings')
                    </div>
                    
                      <div class="tab-pane fade" id="vert-tabs-right-content-section" role="tabpanel" aria-labelledby="vert-tabs-right-content-section-tab">
                      </div>
                      <div class="tab-pane fade" id="vert-tabs-right-masthead" role="tabpanel" aria-labelledby="vert-tabs-right-masthead-tab">
                        @include('admin.contentPages.partials.masthead')
                    </div>
                    <div class="tab-pane fade" id="vert-tabs-right-uploaded-media" role="tabpanel" aria-labelledby="vert-tabs-right-uploaded-media-tab">
                      @include('admin.contentPages.partials.uploaded-media')
                  </div>
                  </div>
              </div>
          
              <div class="col-5 col-sm-3">
                  <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
          
                      <a class="nav-link" id="vert-tabs-right-settings-tab" data-toggle="pill" href="#vert-tabs-right-settings" role="tab" aria-controls="vert-tabs-right-settings" aria-selected="false">DETAILS</a>
                      <a class="nav-link active" id="vert-tabs-right-general-tab" data-toggle="pill" href="#vert-tabs-right-general" role="tab" aria-controls="vert-tabs-right-general" aria-selected="true">PAGE CONTENT</a>
                       <a class="nav-link" id="vert-tabs-right-images-tab" data-toggle="pill" href="#vert-tabs-right-images" role="tab" aria-controls="vert-tabs-right-images" aria-selected="true">IMAGES</a>
                       <a class="nav-link" id="vert-tabs-right-masthead-tab" data-toggle="pill" href="#vert-tabs-right-masthead" role="tab" aria-controls="vert-tabs-right-masthead" aria-selected="false">MASTHEAD OPTIONS</a>
                      <a class="nav-link" id="vert-tabs-right-seo-tab" data-toggle="pill" href="#vert-tabs-right-seo" role="tab" aria-controls="vert-tabs-right-seo" aria-selected="false">SEO META</a>
                      <a class="nav-link" id="vert-tabs-right-content-section-tab" data-toggle="pill" href="#vert-tabs-right-content-section" role="tab" aria-controls="vert-tabs-right-content-section" aria-selected="false">NOTICES</a>
                      
                      {{-- <a class="nav-link" id="vert-tabs-right-uploaded-media-tab" data-toggle="pill" href="#vert-tabs-right-uploaded-media" role="tab" aria-controls="vert-tabs-right-uploaded-media" aria-selected="false">Uploaded Media</a> --}}
                  </div>
              </div>
          
          </div>
          
          
          <hr>
            <div class="form-group">
                <button class="btn btn-info" type="submit">
                    Next
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
  $('#path-segments').change(function(){
    var segments = $(this).val();
    if(segments==0){
        $('.path').hide();
        $('.path2').hide();
        $('.path3').hide();
        $('.path4').hide();
      }else if(segments==1){
        $('.path').show();
        $('.path2').hide();
        $('.path3').hide();
        $('.path4').hide();
      }else if(segments==2){
        $('.path').show();
        $('.path2').show();
        $('.path3').hide();
        $('.path4').hide();
      }else if(segments==3){
        $('.path').show();
        $('.path2').show();
        $('.path3').show();
        $('.path4').hide();
      }else if(segments==4){
        $('.path').show();
        $('.path2').show();
        $('.path3').show();
        $('.path4').show();
      }
  }).change();

  
$('.copyToClipboard').click(function () {
        var key = $(this).attr('key');
        let str = $(this).attr('link');
        const el = document.createElement('textarea');
        el.value = str;
        el.setAttribute('readonly', '');
        el.style.position = 'absolute';
        el.style.left = '-9999px';
        document.body.appendChild(el);
        el.select();
        document.execCommand('copy');
        document.body.removeChild(el);

        var tooltip = document.getElementById("myTooltip"+key);
        tooltip.innerHTML = "Copied";
    })

    function outFunc(key) {
      var tooltip = document.getElementById("myTooltip"+key);
      tooltip.innerHTML = "Copy to clipboard";
    }

    $('.copyToClipboardFile').click(function () {
        var key = $(this).attr('key');
        let str = $(this).attr('link');
        const el = document.createElement('textarea');
        el.value = str;
        el.setAttribute('readonly', '');
        el.style.position = 'absolute';
        el.style.left = '-9999px';
        document.body.appendChild(el);
        el.select();
        document.execCommand('copy');
        document.body.removeChild(el);

        var tooltip = document.getElementById("myTooltipfile"+key);
        tooltip.innerHTML = "Copied";
    })

    function outFuncFile(key) {
      var tooltip = document.getElementById("myTooltipfile"+key);
      tooltip.innerHTML = "Copy to clipboard";
    }

$('#use_textonly_header').click(function(){
    if($(this).prop('checked') == true){
      $('#use_textonly_header_box').show();
      $('#use_featured_image_header_box').hide();
      $('#use_svg_header_box').hide();

      $('#use_svg_header').prop('checked',false);
      $('#use_featured_image_header').prop('checked',false);
    }else{
      $('#use_textonly_header_box').hide();
    }
  });

  $('#use_svg_header').click(function(){
    if($(this).prop('checked') == true){
      $('#use_featured_image_header_box').show();
      $('#use_textonly_header_box').hide();
      $('#use_svg_header_box').hide();

      $('#use_textonly_header').prop('checked',false);
      $('#use_featured_image_header').prop('checked',false);
    }else{
      $('#use_featured_image_header_box').hide();
    }
  });

  $('#use_featured_image_header').click(function(){
    if($(this).prop('checked') == true){

      $('#use_featured_image_header_box').hide();
      $('#use_textonly_header_box').show();
      $('#use_svg_header_box').show();

      $('#use_textonly_header').prop('checked',false);
      $('#use_svg_header').prop('checked',false);
    }else{
      $('#use_textonly_header_box').hide();
      $('#use_svg_header_box').hide();
    }
  });


</script>

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
                xhr.open('POST', '{{ route('admin.content-pages.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $contentPage->id ?? 0 }}');
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

<script>
  Dropzone.options.photosDropzone = {
  url: '{{ route('admin.content-pages.storeMedia') }}',
  maxFilesize: 10, // MB
  acceptedFiles: '.jpeg,.jpg,.png,.gif',
  maxFiles: 10,
  addRemoveLinks: true,
  headers: {
    'X-CSRF-TOKEN': "{{ csrf_token() }}"
  },
  // params: {
  //   size: 10,
  //   width: 1200,
  //   height: 500
  // },
  success: function (file, response) {
    $('form').find('input[name="photos"]').remove()
    $('form').append('<input type="hidden" name="photos[]" value="' + response.name + '">')
  },
  removedfile: function (file) {
    file.previewElement.remove()
    if (file.status !== 'error') {
      $('form').find('input[name="photos[]"]').remove()
      this.options.maxFiles = this.options.maxFiles + 1
    }
  },
  init: function () {
@if(isset($contentPage) && $contentPage->photos)
    var file = {!! json_encode($contentPage->photos) !!}
        this.options.addedfile.call(this, file)
    this.options.thumbnail.call(this, file, file.preview)
    file.previewElement.classList.add('dz-complete')
    $('form').append('<input type="hidden" name="photos[]" value="' + file.file_name + '">')
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
  var uploadedAttachmentsMap = {}
Dropzone.options.attachmentsDropzone = {
  url: '{{ route('admin.content-pages.storeMedia') }}',
  maxFilesize: 10, // MB
  addRemoveLinks: true,
  headers: {
    'X-CSRF-TOKEN': "{{ csrf_token() }}"
  },
  params: {
    size: 10
  },
  success: function (file, response) {
    $('form').append('<input type="hidden" name="attachments[]" value="' + response.name + '">')
    uploadedAttachmentsMap[file.name] = response.name
  },
  removedfile: function (file) {
    file.previewElement.remove()
    var name = ''
    if (typeof file.file_name !== 'undefined') {
      name = file.file_name
    } else {
      name = uploadedAttachmentsMap[file.name]
    }
    $('form').find('input[name="attachments[]"][value="' + name + '"]').remove()
  },
  init: function () {
@if(isset($contentPage) && $contentPage->attachments)
        var files =
          {!! json_encode($contentPage->attachments) !!}
            for (var i in files) {
            var file = files[i]
            this.options.addedfile.call(this, file)
            file.previewElement.classList.add('dz-complete')
            $('form').append('<input type="hidden" name="attachments[]" value="' + file.file_name + '">')
          }
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
    Dropzone.options.featuredImageDropzone = {
    url: '{{ route('admin.content-pages.storeMedia') }}',
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
@if(isset($contentPage) && $contentPage->featured_image)
      var file = {!! json_encode($contentPage->featured_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
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
@endsection