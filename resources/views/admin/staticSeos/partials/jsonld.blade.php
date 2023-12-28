
<div class="col-md-6 card card-primary card-outline">
    <div id="accordion1">
        <a class="d-block w-100" data-toggle="collapse" href="#collapseData">
            <div class="card-header">
                <h4 class="card-title w-100">
                    {{ trans('cruds.staticSeo.fields.json_ld_tag') }}
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
        <div id="collapseData" class="collapse" data-parent="#accordion1">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-12">
                        <textarea class="form-control {{ $errors->has('json_ld_tag') ? 'is-invalid' : '' }}" name="json_ld_tag" id="json_ld_tag">{{ old('json_ld_tag', $staticSeo->json_ld_tag) }}</textarea>
                        @if($errors->has('json_ld_tag'))
                            <span class="text-danger">{{ $errors->first('json_ld_tag') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.staticSeo.fields.json_ld_tag_helper') }}</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>