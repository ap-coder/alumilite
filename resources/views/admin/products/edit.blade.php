@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.product.title_singular') }}
        @if ($product->staticSeo)
            <a class="btn btn-success float-right" href="{{ route('admin.static-seos.edit', $product->staticSeo->id) }}">SEO</a>
        @endif
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.products.update", [$product->id]) }}" enctype="multipart/form-data" id="submitProductsForm">
            @method('PUT')
            @csrf
            <div class="form-row">
                <div class="form-group col">
                    <div class="form-check {{ $errors->has('published') ? 'is-invalid' : '' }}">
                        <input type="hidden" name="published" value="0">
                        <input class="form-check-input" type="checkbox" name="published" id="published" value="1" {{ $product->published || old('published', 0) === 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="published">{{ trans('cruds.product.fields.published') }}</label>
                    </div>
                    @if($errors->has('published'))
                        <div class="invalid-feedback">
                            {{ $errors->first('published') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.product.fields.published_helper') }}</span>
                </div>

                <div class="form-group col">
                    <label for="year_from">{{ trans('cruds.product.fields.year_from') }}</label>
                    <input class="form-control {{ $errors->has('year_from') ? 'is-invalid' : '' }}" type="text" name="year_from" id="year_from" value="{{ old('year_from', $product->year_from) }}">
                    @if($errors->has('year_from'))
                        <div class="invalid-feedback">
                            {{ $errors->first('year_from') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.product.fields.year_from_helper') }}</span>
                </div>

                <div class="form-group col">
                    <label for="year_to">{{ trans('cruds.product.fields.year_to') }}</label>
                    <input class="form-control {{ $errors->has('year_to') ? 'is-invalid' : '' }}" type="text" name="year_to" id="year_to" value="{{ old('year_to', $product->year_to) }}">
                    @if($errors->has('year_to'))
                        <div class="invalid-feedback">
                            {{ $errors->first('year_to') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.product.fields.year_to_helper') }}</span>
                </div>

            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.product.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.name_helper') }}</span>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="required" for="price">{{ trans('cruds.product.fields.price') }}</label>
                    <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $product->price) }}" step="0.01" required>
                    @if($errors->has('price'))
                        <div class="invalid-feedback">
                            {{ $errors->first('price') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.product.fields.price_helper') }}</span>
                </div>
                <div class="form-group col">
                    <label for="msrp">{{ trans('cruds.product.fields.msrp') }}</label>
                    <input class="form-control {{ $errors->has('msrp') ? 'is-invalid' : '' }}" type="number" name="msrp" id="msrp" value="{{ old('msrp', $product->msrp) }}" step="0.01">
                    @if($errors->has('msrp'))
                        <div class="invalid-feedback">
                            {{ $errors->first('msrp') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.product.fields.msrp_helper') }}</span>
                </div>

                <div class="form-group col">
                    <label class="required" for="name">{{ trans('cruds.product.fields.paypal_prod') }}</label>
                    <input class="form-control {{ $errors->has('paypal_prod') ? 'is-invalid' : '' }}" type="text" name="paypal_prod" id="paypal_prod" value="{{ old('paypal_prod', $product->paypal_prod) }}">
                    @if($errors->has('paypal_prod'))
                        <div class="invalid-feedback">
                            {{ $errors->first('paypal_prod') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.product.fields.paypal_prod_helper') }}</span>
                </div>


            </div>



            <div class="form-group">
                <label for="excerpt">{{ trans('cruds.product.fields.excerpt') }}</label>
                <textarea class="form-control {{ $errors->has('excerpt') ? 'is-invalid' : '' }}" name="excerpt" id="excerpt">{{ old('excerpt', $product->excerpt) }}</textarea>
                @if($errors->has('excerpt'))
                    <div class="invalid-feedback">
                        {{ $errors->first('excerpt') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.product.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $product->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.description_helper') }}</span>
            </div>


            <div class="form-group">
                <label for="photo">{{ trans('cruds.product.fields.photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="photo-dropzone">
                </div>
                @if($errors->has('photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.photo_helper') }}</span>
            </div>


            <div class="form-group">
                <label for="additional_photos">{{ trans('cruds.product.fields.additional_photos') }}</label>
                <div class="needsclick dropzone {{ $errors->has('additional_photos') ? 'is-invalid' : '' }}" id="additional_photos-dropzone">
                </div>
                @if($errors->has('additional_photos'))
                    <div class="invalid-feedback">
                        {{ $errors->first('additional_photos') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.additional_photos_helper') }}</span>
            </div>


            <div class="form-group">
                <label for="documents">{{ trans('cruds.product.fields.documents') }}</label>
                <div class="needsclick dropzone {{ $errors->has('documents') ? 'is-invalid' : '' }}" id="documents-dropzone">
                </div>
                @if($errors->has('documents'))
                    <div class="invalid-feedback">
                        {{ $errors->first('documents') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.documents_helper') }}</span>
            </div>

            <div class="form-row">
                <div class="form-group col">
                    <label for="brand_id">{{ trans('cruds.product.fields.brand') }}</label>
                    <select class="form-control select2 {{ $errors->has('brand') ? 'is-invalid' : '' }}" name="brand_id" id="brand_id">
                        @foreach($brands as $id => $entry)
                            <option value="{{ $id }}" {{ (old('brand_id') ? old('brand_id') : $product->brand->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('brand'))
                        <div class="invalid-feedback">
                            {{ $errors->first('brand') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.product.fields.brand_helper') }}</span>
                </div>

                <div class="form-group col">
                    <label for="brand_model_id">{{ trans('cruds.product.fields.brand_model') }}</label>
                    <select class="form-control select2 {{ $errors->has('brand_model') ? 'is-invalid' : '' }}" name="brand_model_id" id="brand_model_id">
                        @foreach($brand_models as $id => $entry)
                            <option value="{{ $id }}" {{ (old('brand_model_id') ? old('brand_model_id') : $product->brand_model->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('brand_model'))
                        <div class="invalid-feedback">
                            {{ $errors->first('brand_model') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.product.fields.brand_model_helper') }}</span>
                </div>
            </div>






            <div class="form-group col-8">
                <label for="categories">{{ trans('cruds.product.fields.category') }}</label>
                <div class="input-group">
                    <select class="form-control select2" name="categories[]" id="categories" multiple>
                        @foreach($categories as $id => $name)
                            <option value="{{ $id }}" {{ in_array($id, old('categories', $product->categories->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $name }}</option>
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
                <span class="help-block">Only select one or two to reduce issues in SEO.</span>
            </div>



            <div class="form-group col-8">
                <label for="tags">{{ trans('cruds.product.fields.tag') }}</label>
                <div class="input-group">
                    <select class="form-control select2" name="tags[]" id="tags" multiple>
                        @foreach($tags as $id => $tag)
                            <option value="{{ $id }}" {{ in_array($id, old('tags', $product->tags->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $tag }}</option>
                        @endforeach
                    </select>

                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="addTag">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                @if($errors->has('tags'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tags') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.tag_helper') }}</span>
            </div>



            <div class="form-group col-8">
                <label for="features">{{ trans('cruds.product.fields.feature') }}</label>
                <div class="input-group">
                    <select class="form-control select2" name="features[]" id="features" multiple>
                        @foreach($features as $id => $feature)
                        <option value="{{ $id }}" {{ in_array($id, old('features', $product->features->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $feature }}</option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="addFeature">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                @if($errors->has('features'))
                    <div class="invalid-feedback">
                        {{ $errors->first('features') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.feature_helper') }}</span>
            </div>


            <div class="form-group col-8">
                <label for="technical_specs">{{ trans('cruds.product.fields.technical_specs') }}</label>
                <div class="input-group">
                    <select class="form-control select2" name="technical_specs[]" id="technical_specs" multiple>
                        @foreach($technical_specs as $id => $technical_spec)
                        <option value="{{ $id }}" {{ in_array($id, old('technical_specs', $product->technical_specs->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $technical_spec }}</option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="addTechnicalSpec">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                @if($errors->has('technical_specs'))
                    <div class="invalid-feedback">
                        {{ $errors->first('technical_specs') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.technical_specs_helper') }}</span>
            </div>


            {{-- <div class="form-group">
                <label for="categories">{{ trans('cruds.product.fields.category') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('categories') ? 'is-invalid' : '' }}" name="categories[]" id="categories" multiple>
                    @foreach($categories as $id => $category)
                        <option value="{{ $id }}" {{ (in_array($id, old('categories', [])) || $product->categories->contains($id)) ? 'selected' : '' }}>{{ $category }}</option>
                    @endforeach
                </select>
                @if($errors->has('categories'))
                    <div class="invalid-feedback">
                        {{ $errors->first('categories') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tags">{{ trans('cruds.product.fields.tag') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('tags') ? 'is-invalid' : '' }}" name="tags[]" id="tags" multiple>
                    @foreach($tags as $id => $tag)
                        <option value="{{ $id }}" {{ (in_array($id, old('tags', [])) || $product->tags->contains($id)) ? 'selected' : '' }}>{{ $tag }}</option>
                    @endforeach
                </select>
                @if($errors->has('tags'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tags') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.tag_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="features">{{ trans('cruds.product.fields.feature') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('features') ? 'is-invalid' : '' }}" name="features[]" id="features" multiple>
                    @foreach($features as $id => $feature)
                        <option value="{{ $id }}" {{ (in_array($id, old('features', [])) || $product->features->contains($id)) ? 'selected' : '' }}>{{ $feature }}</option>
                    @endforeach
                </select>
                @if($errors->has('features'))
                    <div class="invalid-feedback">
                        {{ $errors->first('features') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.feature_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="technical_specs">{{ trans('cruds.product.fields.technical_specs') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('technical_specs') ? 'is-invalid' : '' }}" name="technical_specs[]" id="technical_specs" multiple>
                    @foreach($technical_specs as $id => $technical_spec)
                        <option value="{{ $id }}" {{ (in_array($id, old('technical_specs', [])) || $product->technical_specs->contains($id)) ? 'selected' : '' }}>{{ $technical_spec }}</option>
                    @endforeach
                </select>
                @if($errors->has('technical_specs'))
                    <div class="invalid-feedback">
                        {{ $errors->first('technical_specs') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.technical_specs_helper') }}</span>
            </div> --}}


            <div class="form-row">

                <div class="form-group col">
                    <label for="product_type_id">{{ trans('cruds.product.fields.product_type') }}</label>
                    <select class="form-select select2 {{ $errors->has('product_type') ? 'is-invalid' : '' }}" name="product_type_id" id="product_type_id">
                        @foreach($product_types as $id => $entry)
                            <option value="{{ $id }}" {{ (old('product_type_id') ? old('product_type_id') : $product->product_type->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('product_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product_type') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.product.fields.product_type_helper') }}</span>
                </div>
                <div class="form-group col">
                    <label for="slug">{{ trans('cruds.product.fields.slug') }}</label>
                    <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', $product->slug) }}">
                    @if($errors->has('slug'))
                        <div class="invalid-feedback">
                            {{ $errors->first('slug') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.product.fields.slug_helper') }}</span>
                </div>
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
    $(document).ready(function() {
        $('#addTag').on('click', function() {
            var tagName = prompt("Enter new tag name:");
            if (!tagName) return;

            $.ajax({
                url: '/admin/product-tags/store-ajax', // Adjust the URL if necessary
                type: 'POST',
                data: {
                    name: tagName,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    var newOption = new Option(response.name, response.id, true, true);
                    $('#tags').append(newOption).trigger('change'); // Update the selector to '#tags'
                },
                error: function(xhr, status, error) {
                    alert("Error adding tag: " + error);
                }
            });
        });


        $('#addTechnicalSpec').on('click', function() {
            var specName = prompt("Enter new technical spec name:");
            if (!specName) return;

            $.ajax({
                url: '/admin/technical-specs/store-ajax',
                type: 'POST',
                data: {
                    name: specName,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    var newOption = new Option(response.name, response.id, true, true);
                    $('#technical_specs').append(newOption).trigger('change');
                },
                error: function(xhr, status, error) {
                    alert("Error adding technical spec: " + error);
                }
            });
        });

        $('#addFeature').on('click', function() {
            var featureName = prompt("Enter new feature name:");
            if (!featureName) return;

            $.ajax({
                url: '/admin/features/store-ajax',
                type: 'POST',
                data: {
                    name: featureName,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    var newOption = new Option(response.name, response.id, true, true);
                    $('#features').append(newOption).trigger('change');
                },
                error: function(xhr, status, error) {
                    alert("Error adding feature: " + error);
                }
            });
        });

        $('#addCategory').on('click', function() {
            var categoryName = prompt("Enter new product category name:");
            if (!categoryName) return;

            $.ajax({
                url: '/admin/product-categories/store-ajax', // Adjust this URL as needed
                type: 'POST',
                data: {
                    name: categoryName,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    var newOption = new Option(response.name, response.id, true, true);
                    $('#categories').append(newOption).trigger('change');
                },
                error: function(xhr, status, error) {
                    alert("Error adding product category: " + error);
                }
            });
        });
    });
</script>

<script>

    $('.saveContent').click(function() {
        var bType = $(this).attr('bType');
        $('#submitProductsForm').validate({
            rules: {
                'name': {
                    required: true,
                },
            },
            messages: {
                name: 'Please Enter Product Name',
            },
        });
        if ($('#submitProductsForm').valid()) // check if form is valid
        {
            $this = $(this);
            $loader = '<div class="spinner-border text-dark" role="status">' +
                '<span class="sr-only">Loading...</span>' +
                '</div>';
            $this.html($loader);
            var formData = $('#submitProductsForm').serializeArray();
            formData.push({ name: 'preview', value: 1 });

            var description=getDataFromTheDescEditor();

            // Find and replace `content` if there
            for (index = 0; index < formData.length; ++index) {
                if (formData[index].name == "description") {
                    formData[index].value = description;
                    break;
                }
            }

            $.ajax({
                type: 'POST',
                url: '{{ route("admin.products.update", [$product->id]) }}',
                dataType: 'json',
                data: formData,
                success: function(resultData) {
                    var url = "{{ url('products') }}" + '/' + resultData;
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

    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.products.storeMedia') }}',
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
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
    @if(isset($product) && $product->photo)
        var file = {!! json_encode($product->photo) !!}
            this.options.addedfile.call(this, file)
        this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
        file.previewElement.classList.add('dz-complete')
        $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
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
    var uploadedAdditionalPhotosMap = {}
    Dropzone.options.additionalPhotosDropzone = {
        url: '{{ route('admin.products.storeMedia') }}',
        maxFilesize: 2, // MB
        acceptedFiles: '.jpeg,.jpg,.png,.gif',
        addRemoveLinks: true,
        headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {
        size: 2,
        width: 1800,
        height: 1800
        },
        success: function (file, response) {
        $('form').append('<input type="hidden" name="additional_photos[]" value="' + response.name + '">')
        uploadedAdditionalPhotosMap[file.name] = response.name
        },
        removedfile: function (file) {
        console.log(file)
        file.previewElement.remove()
        var name = ''
        if (typeof file.file_name !== 'undefined') {
            name = file.file_name
        } else {
            name = uploadedAdditionalPhotosMap[file.name]
        }
        $('form').find('input[name="additional_photos[]"][value="' + name + '"]').remove()
        },
        init: function () {
    @if(isset($product) && $product->additional_photos)
        var files = {!! json_encode($product->additional_photos) !!}
            for (var i in files) {
            var file = files[i]
            this.options.addedfile.call(this, file)
            this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
            file.previewElement.classList.add('dz-complete')
            $('form').append('<input type="hidden" name="additional_photos[]" value="' + file.file_name + '">')
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
    var uploadedDocumentsMap = {}
    Dropzone.options.documentsDropzone = {
        url: '{{ route('admin.products.storeMedia') }}',
        maxFilesize: 2, // MB
        addRemoveLinks: true,
        headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {
        size: 2
        },
        success: function (file, response) {
        $('form').append('<input type="hidden" name="documents[]" value="' + response.name + '">')
        uploadedDocumentsMap[file.name] = response.name
        },
        removedfile: function (file) {
        file.previewElement.remove()
        var name = ''
        if (typeof file.file_name !== 'undefined') {
            name = file.file_name
        } else {
            name = uploadedDocumentsMap[file.name]
        }
        $('form').find('input[name="documents[]"][value="' + name + '"]').remove()
        },
        init: function () {
    @if(isset($product) && $product->documents)
            var files =
                {!! json_encode($product->documents) !!}
                for (var i in files) {
                var file = files[i]
                this.options.addedfile.call(this, file)
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="documents[]" value="' + file.file_name + '">')
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

    let theDescEditor;

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
                    xhr.open('POST', '{{ route('admin.products.storeCKEditorImages') }}', true);
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
                    data.append('crud_id', '{{ $product->id ?? 0 }}');
                    xhr.send(data);
                });
                })
            }
        };
        }
    }

    var allEditors = document.querySelectorAll('#description');
    for (var i = 0; i < allEditors.length; ++i) {
        ClassicEditor.create(
        allEditors[i], {
            extraPlugins: [SimpleUploadAdapter],
            mediaEmbed: {previewsInData: true}
        }
        ).then( editor => {
            // CKEditorInspector.attach( editor );
            theDescEditor = editor;
        } )
    }
    });

    function getDataFromTheDescEditor() {
    return theDescEditor.getData();
    }
</script>
@endsection
