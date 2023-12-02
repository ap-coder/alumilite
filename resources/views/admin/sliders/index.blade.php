@extends('layouts.admin')
@section('content')
@can('slider_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.sliders.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.slider.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.slider.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Slider">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.location') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.image') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.sub_title') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.main_title') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.sub_title_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.slider_description') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.text_heading') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.heading_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.heading_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.heading_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.text') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.main_button_text') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.main_button_link') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.main_button_tab_index') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.second_button_text') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.second_button_link') }}
                    </th>
                    <th>
                        {{ trans('cruds.slider.fields.second_button_tab_index') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('slider_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.sliders.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.sliders.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'location', name: 'location' },
{ data: 'image', name: 'image', sortable: false, searchable: false },
{ data: 'sub_title', name: 'sub_title' },
{ data: 'main_title', name: 'main_title' },
{ data: 'sub_title_2', name: 'sub_title_2' },
{ data: 'slider_description', name: 'slider_description' },
{ data: 'text_heading', name: 'text_heading' },
{ data: 'heading_1', name: 'heading_1' },
{ data: 'heading_2', name: 'heading_2' },
{ data: 'heading_3', name: 'heading_3' },
{ data: 'text', name: 'text' },
{ data: 'main_button_text', name: 'main_button_text' },
{ data: 'main_button_link', name: 'main_button_link' },
{ data: 'main_button_tab_index', name: 'main_button_tab_index' },
{ data: 'second_button_text', name: 'second_button_text' },
{ data: 'second_button_link', name: 'second_button_link' },
{ data: 'second_button_tab_index', name: 'second_button_tab_index' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Slider').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection