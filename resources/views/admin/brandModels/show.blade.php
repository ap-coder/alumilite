@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.brandModel.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.brand-models.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.brandModel.fields.id') }}
                        </th>
                        <td>
                            {{ $brandModel->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.brandModel.fields.model') }}
                        </th>
                        <td>
                            {{ $brandModel->model }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.brandModel.fields.description') }}
                        </th>
                        <td>
                            {{ $brandModel->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.brand-models.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#brand_model_products" role="tab" data-toggle="tab">
                {{ trans('cruds.product.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#brand_model_builds" role="tab" data-toggle="tab">
                {{ trans('cruds.build.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="brand_model_products">
            @includeIf('admin.brandModels.relationships.brandModelProducts', ['products' => $brandModel->brandModelProducts])
        </div>
        <div class="tab-pane" role="tabpanel" id="brand_model_builds">
            @includeIf('admin.brandModels.relationships.brandModelBuilds', ['builds' => $brandModel->brandModelBuilds])
        </div>
    </div>
</div>

@endsection