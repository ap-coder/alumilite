@foreach($pageSections as $key => $pageSection)
<tr data-entry-id="{{ $pageSection->id }}">
    <td>
        <input type="hidden" class="PageSectionOrders" name="PageSectionOrders[]" value="{{ $pageSection->id }}"> 
    </td>
    <th>
        <input type="checkbox" disabled {{ ($pageSection->published ? 'checked' : null) }}>
    </th>
    <td class="text-uppercase">
       {{--  PS: &nbsp; --}} {{ $pageSection->section_nickname ?? '' }}
    </td>
    
    <td>
        
        @can('pagesection_edit')
            <a class="btn btn-xs btn-info editPageSection" myid="{{ $pageSection->id }}" href="javascript:void(0);" data-toggle="modal" data-target="#editPageSectionModal{{ $pageSection->id }}">
                <i class="fas fa-edit"></i>
            </a>
        @endcan

        @can('pagesection_delete')
            <a class="btn btn-xs btn-danger DeletePageSectionBtn" myid="{{ $pageSection->id }}" href="javascript:void(0);">
                <i class='fas fa-minus-square'></i>
            </a>
            @endcan

    </td>

</tr>

<div class="modal" id="editPageSectionModal{{ $pageSection->id }}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form id="editPageSectionForm{{ $pageSection->id }}">
            @csrf
          <!-- Modal Header -->
          <div class="modal-header">
          <h4 class="modal-title"> Edit  {{ trans('cruds.pagesection.title_singular') }}</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body" style="min-height: calc(100vh - 200px);">

            <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                  <ul class="nav nav-tabs" id="custom-tabs-one-tab{{ $pageSection->id }}" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-one-section-details-tab{{ $pageSection->id }}" data-toggle="pill" href="#custom-tabs-one-section-details{{ $pageSection->id }}" role="tab" aria-controls="custom-tabs-one-section-details{{ $pageSection->id }}" aria-selected="true">Section Details</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-one-section-assets-tab{{ $pageSection->id }}" data-toggle="pill" href="#custom-tabs-one-section-assets{{ $pageSection->id }}" role="tab" aria-controls="custom-tabs-one-section-assets{{ $pageSection->id }}" aria-selected="false">Section Assets</a>
                    </li>
                   
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-one-tabContent{{ $pageSection->id }}">
                    <div class="tab-pane fade show active" id="custom-tabs-one-section-details{{ $pageSection->id }}" role="tabpanel" aria-labelledby="custom-tabs-one-section-details-tab{{ $pageSection->id }}">
                        <div class="form-group">
                            <div class="form-check {{ $errors->has('published') ? 'is-invalid' : '' }}">
                                {{-- <input type="hidden" name="published" value="0"> --}}
                                <input class="form-check-input" type="checkbox" name="pageSectionpublished" value="1" id="published{{ $pageSection->id }}" {{ @$pageSection->published || old('published', 0) === 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="published{{ $pageSection->id }}">{{ trans('cruds.pagesection.fields.published') }}</label>
                            </div>
                            @if($errors->has('published'))
                                <span class="text-danger">{{ $errors->first('published') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.pagesection.fields.published_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="nickname">{{ trans('cruds.pagesection.fields.section_nickname') }}</label>
                            <input class="form-control {{ $errors->has('section_nickname') ? 'is-invalid' : '' }}" type="text" name="section_nickname" id="nickname{{ $pageSection->id }}" value="{{ old('section_nickname', @$pageSection->section_nickname) }}">
                            @if($errors->has('section_nickname'))
                                <span class="text-danger">{{ $errors->first('section_nickname') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.pagesection.fields.section_nickname_helper') }}</span>
                        </div>
                       
                        <div class="form-group">
                            <label for="PageSectionTxt">{{ trans('cruds.pagesection.fields.section') }}</label>
                            <textarea class="prism-live language-html line-numbers {{ $errors->has('section') ? 'is-invalid' : '' }} PageSectionTxt" name="section" id="PageSectionTxt{{ $pageSection->id }}">{{ old('section', @$pageSection->section) }}</textarea>
                            @if($errors->has('section'))
                                <span class="text-danger">{{ $errors->first('section') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.pagesection.fields.section_helper') }}</span>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-section-assets{{ $pageSection->id }}" role="tabpanel" aria-labelledby="custom-tabs-one-section-assets-tab{{ $pageSection->id }}">
                        <div class="form-group cdnbox">
                            <label for="ps_cdn_css{{ $pageSection->id }}">{{ trans('cruds.pagesection.fields.ps_cdn_css') }}</label>
                            <textarea class="prism-live cdninput normalize-whitespace language-html {{ $errors->has('ps_cdn_css') ? 'is-invalid' : '' }} ps_cdn_css" name="ps_cdn_css" id="ps_cdn_css{{ $pageSection->id }}">{{ old('ps_cdn_css', @$pageSection->ps_cdn_css) }}</textarea>
                            @if($errors->has('ps_cdn_css'))
                                <span class="text-danger">{{ $errors->first('ps_cdn_css') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.pagesection.fields.ps_cdn_css_helper') }}</span>
                        </div>
                          <div class="form-group cdnbox">
                            <label for="ps_cdn_js{{ $pageSection->id }}">{{ trans('cruds.pagesection.fields.ps_cdn_js') }}</label>
                            <textarea class="prism-live cdninput normalize-whitespace language-html {{ $errors->has('ps_cdn_js') ? 'is-invalid' : '' }} ps_cdn_js" name="ps_cdn_js" id="ps_cdn_js{{ $pageSection->id }}">{{ old('ps_cdn_js', @$pageSection->ps_cdn_js) }}</textarea>
                            @if($errors->has('ps_cdn_js'))
                                <span class="text-danger">{{ $errors->first('ps_cdn_js') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.pagesection.fields.ps_cdn_js_helper') }}</span>
                        </div>
                          <div class="form-group cdnbox">
                            <label for="ps_js{{ $pageSection->id }}">{{ trans('cruds.pagesection.fields.ps_js') }}</label>
                            <textarea class="prism-live cdninput normalize-whitespace language-javascript {{ $errors->has('ps_js') ? 'is-invalid' : '' }} ps_js" name="ps_js" id="ps_js{{ $pageSection->id }}">{{ old('ps_js', @$pageSection->ps_js) }}</textarea>
                            @if($errors->has('ps_js'))
                                <span class="text-danger">{{ $errors->first('ps_js') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.pagesection.fields.ps_js_helper') }}</span>
                        </div>
                          <div class="form-group cdnbox">
                            <label for="ps_css{{ $pageSection->id }}">{{ trans('cruds.pagesection.fields.ps_css') }}</label>
                            <textarea class="prism-live cdninput normalize-whitespace language-css {{ $errors->has('ps_css') ? 'is-invalid' : '' }} ps_css" name="ps_css" id="ps_css{{ $pageSection->id }}">{{ old('ps_css', @$pageSection->ps_css) }}</textarea>
                            @if($errors->has('ps_css'))
                                <span class="text-danger">{{ $errors->first('ps_css') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.pagesection.fields.ps_css_helper') }}</span>
                        </div>
                    </div>
                   
                    
                  </div>
                </div>
                <!-- /.card -->
              </div>
            {{-- <input type="hidden" name="id" id="page_section_id" class="form-control" value="{{ @$pageSection->id }}"> --}}
        
           
                
          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-info" id="savePageSection" pid="{{ @$pageSection->id }}">Save</button>
          </div>
          </form>
      </div>
    </div>
  </div>

  
@endforeach