{{-- @can('can_edit_microdata') --}}

    <div class="col-md-6 card card-primary card-outline">
        <div id="accordion">
            <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                <div class="card-header">
                    <h4 class="card-title w-100">
                        MICRODATA
                    </h4>
	                <div class="card-tools">
		                <button type="button" class="btn btn-tool" data-card-widget="collapse">
			                <i class="fas fa-plus"></i>
		                </button>
		                <button type="button" class="btn btn-tool" data-card-widget="remove">
			                <i class="fas fa-times"></i>
		                </button>
	                </div>
                </div>
            </a>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <h2>Microdata fields</h2>
                    <p>Only edit these if you know what they are and if they are set wrong. These effect SEO readability so will hurt rankings if you tamper. </p>
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="html_schema_1">{{ trans('cruds.staticSeo.fields.html_schema_1') }}</label>
                            <input class="form-control {{ $errors->has('html_schema_1') ? 'is-invalid' : '' }}" type="text" name="html_schema_1" id="html_schema_1" value="{{ old('html_schema_1', $staticSeo->html_schema_1) }}">
                            @if($errors->has('html_schema_1'))
                                <span class="text-danger">{{ $errors->first('html_schema_1') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.staticSeo.fields.html_schema_1_helper') }}</span>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="html_schema_2">{{ trans('cruds.staticSeo.fields.html_schema_2') }}</label>
                            <input class="form-control {{ $errors->has('html_schema_2') ? 'is-invalid' : '' }}" type="text" name="html_schema_2" id="html_schema_2" value="{{ old('html_schema_2', $staticSeo->html_schema_2) }}">
                            @if($errors->has('html_schema_2'))
                                <span class="text-danger">{{ $errors->first('html_schema_2') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.staticSeo.fields.html_schema_2_helper') }}</span>
                        </div>

                        @if ($staticSeo->content_type=='event')
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="html_schema_3">{{ trans('cruds.staticSeo.fields.html_schema_3') }}</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Event Type</option>
                                    @foreach(App\Models\StaticSeo::EVENT_TYPE_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('html_schema_3', $staticSeo->html_schema_3) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @else
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="html_schema_3">{{ trans('cruds.staticSeo.fields.html_schema_3') }}</label>
                                <input class="form-control {{ $errors->has('html_schema_3') ? 'is-invalid' : '' }}" type="text" name="html_schema_3" id="html_schema_3" value="{{ old('html_schema_3', $staticSeo->html_schema_3) }}">
                                @if($errors->has('html_schema_3'))
                                    <span class="text-danger">{{ $errors->first('html_schema_3') }}</span>
                                @endif
                                <span class="help-block">{{ trans('cruds.staticSeo.fields.html_schema_3_helper') }}</span>
                            </div>
                        @endif



                        <div class="form-group col-md-6 col-sm-12">
                            <label for="body_schema">{{ trans('cruds.staticSeo.fields.body_schema') }}</label>
                            <input class="form-control {{ $errors->has('body_schema') ? 'is-invalid' : '' }}" type="text" name="body_schema" id="body_schema" value="{{ old('body_schema', $staticSeo->body_schema) }}">
                            @if($errors->has('body_schema'))
                                <span class="text-danger">{{ $errors->first('body_schema') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.staticSeo.fields.body_schema_helper') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- @endcan --}}