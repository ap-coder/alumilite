@extends('layouts.admin')
@section('content')
@can('build_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.builds.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.build.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.build.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Build">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.build.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.published') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.brand') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.brand_model') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.category') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.customer_company') }}
                    </th>
                    <th>
                        {{ trans('cruds.build.fields.customer_name') }}
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
@can('build_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.builds.massDestroy') }}",
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
    ajax: "{{ route('admin.builds.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'published', name: 'published' },
{ data: 'name', name: 'name' },
{ data: 'brand_name', name: 'brand.name' },
{ data: 'brand_model_model', name: 'brand_model.model' },
{ data: 'category', name: 'categories.name' },
{ data: 'customer_company', name: 'customer_company' },
{ data: 'customer_name', name: 'customer_name' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Build').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection