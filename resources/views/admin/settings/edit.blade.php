@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.setting.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.settings.update", [$setting->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="facebook_link">{{ trans('cruds.setting.fields.facebook_link') }}</label>
                <input class="form-control {{ $errors->has('facebook_link') ? 'is-invalid' : '' }}" type="text" name="facebook_link" id="facebook_link" value="{{ old('facebook_link', $setting->facebook_link) }}">
                @if($errors->has('facebook_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('facebook_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.facebook_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="twitter_link">{{ trans('cruds.setting.fields.twitter_link') }}</label>
                <input class="form-control {{ $errors->has('twitter_link') ? 'is-invalid' : '' }}" type="text" name="twitter_link" id="twitter_link" value="{{ old('twitter_link', $setting->twitter_link) }}">
                @if($errors->has('twitter_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('twitter_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.twitter_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="youtube_link">{{ trans('cruds.setting.fields.youtube_link') }}</label>
                <input class="form-control {{ $errors->has('youtube_link') ? 'is-invalid' : '' }}" type="text" name="youtube_link" id="youtube_link" value="{{ old('youtube_link', $setting->youtube_link) }}">
                @if($errors->has('youtube_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('youtube_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.youtube_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="instagram_link">{{ trans('cruds.setting.fields.instagram_link') }}</label>
                <input class="form-control {{ $errors->has('instagram_link') ? 'is-invalid' : '' }}" type="text" name="instagram_link" id="instagram_link" value="{{ old('instagram_link', $setting->instagram_link) }}">
                @if($errors->has('instagram_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('instagram_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.instagram_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rss_link">{{ trans('cruds.setting.fields.rss_link') }}</label>
                <input class="form-control {{ $errors->has('rss_link') ? 'is-invalid' : '' }}" type="text" name="rss_link" id="rss_link" value="{{ old('rss_link', $setting->rss_link) }}">
                @if($errors->has('rss_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('rss_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.rss_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="short_bio">{{ trans('cruds.setting.fields.short_bio') }}</label>
                <textarea class="form-control {{ $errors->has('short_bio') ? 'is-invalid' : '' }}" name="short_bio" id="short_bio">{{ old('short_bio', $setting->short_bio) }}</textarea>
                @if($errors->has('short_bio'))
                    <div class="invalid-feedback">
                        {{ $errors->first('short_bio') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.short_bio_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.setting.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $setting->phone) }}">
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.setting.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $setting->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.setting.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $setting->address) }}">
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="working_hours">{{ trans('cruds.setting.fields.working_hours') }}</label>
                <input class="form-control {{ $errors->has('working_hours') ? 'is-invalid' : '' }}" type="text" name="working_hours" id="working_hours" value="{{ old('working_hours', $setting->working_hours) }}">
                @if($errors->has('working_hours'))
                    <div class="invalid-feedback">
                        {{ $errors->first('working_hours') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.working_hours_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="header_logo">{{ trans('cruds.setting.fields.header_logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('header_logo') ? 'is-invalid' : '' }}" id="header_logo-dropzone">
                </div>
                @if($errors->has('header_logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('header_logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.header_logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="footer_logo">{{ trans('cruds.setting.fields.footer_logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('footer_logo') ? 'is-invalid' : '' }}" id="footer_logo-dropzone">
                </div>
                @if($errors->has('footer_logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('footer_logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.footer_logo_helper') }}</span>
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
    Dropzone.options.headerLogoDropzone = {
    url: '{{ route('admin.settings.storeMedia') }}',
    maxFilesize: 10, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    // params: {
    //   size: 2,
    //   width: 600,
    //   height: 600
    // },
    success: function (file, response) {
      $('form').find('input[name="header_logo"]').remove()
      $('form').append('<input type="hidden" name="header_logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="header_logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($setting) && $setting->header_logo)
      var file = {!! json_encode($setting->header_logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="header_logo" value="' + file.file_name + '">')
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

    Dropzone.options.footerLogoDropzone = {
    url: '{{ route('admin.settings.storeMedia') }}',
    maxFilesize: 10, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    // params: {
    //   size: 2,
    //   width: 600,
    //   height: 600
    // },
    success: function (file, response) {
      $('form').find('input[name="footer_logo"]').remove()
      $('form').append('<input type="hidden" name="footer_logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="footer_logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($setting) && $setting->footer_logo)
      var file = {!! json_encode($setting->footer_logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="footer_logo" value="' + file.file_name + '">')
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