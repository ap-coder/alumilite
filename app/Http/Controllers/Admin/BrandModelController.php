<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBrandModelRequest;
use App\Http\Requests\StoreBrandModelRequest;
use App\Http\Requests\UpdateBrandModelRequest;
use App\Models\BrandModel;
use App\Models\Brand;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class BrandModelController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('brand_model_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = BrandModel::query()->select(sprintf('%s.*', (new BrandModel)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'brand_model_show';
                $editGate      = 'brand_model_edit';
                $deleteGate    = 'brand_model_delete';
                $crudRoutePart = 'brand-models';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('brand', function ($row) {
                return $row->brand ? $row->brand->name : '';
            });
            $table->editColumn('model', function ($row) {
                return $row->model ? $row->model : '';
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.brandModels.index');
    }

    public function create()
    {
        abort_if(Gate::denies('brand_model_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brands = Brand::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.brandModels.create', compact('brands'));
    }

    public function store(StoreBrandModelRequest $request)
    {
        $brandModel = BrandModel::create($request->all());

        return redirect()->route('admin.brand-models.index');
    }

    public function edit(BrandModel $brandModel)
    {
        abort_if(Gate::denies('brand_model_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brands = Brand::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.brandModels.edit', compact('brandModel','brands'));
    }

    public function update(UpdateBrandModelRequest $request, BrandModel $brandModel)
    {
        $brandModel->update($request->all());

        return redirect()->route('admin.brand-models.index');
    }

    public function show(BrandModel $brandModel)
    {
        abort_if(Gate::denies('brand_model_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brandModel->load('brandModelProducts', 'brandModelBuilds');

        return view('admin.brandModels.show', compact('brandModel'));
    }

    public function destroy(BrandModel $brandModel)
    {
        abort_if(Gate::denies('brand_model_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brandModel->delete();

        return back();
    }

    public function massDestroy(MassDestroyBrandModelRequest $request)
    {
        $brandModels = BrandModel::find(request('ids'));

        foreach ($brandModels as $brandModel) {
            $brandModel->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
