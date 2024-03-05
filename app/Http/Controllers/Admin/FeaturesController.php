<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFeatureRequest;
use App\Http\Requests\StoreFeatureRequest;
use App\Http\Requests\UpdateFeatureRequest;
use App\Models\Feature;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class FeaturesController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('feature_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Feature::query()->select(sprintf('%s.*', (new Feature)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'feature_show';
                $editGate      = 'feature_edit';
                $deleteGate    = 'feature_delete';
                $crudRoutePart = 'features';

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
            $table->editColumn('published', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->published ? 'checked' : null) . '>';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'published']);

            return $table->make(true);
        }

        return view('admin.features.index');
    }

    public function create()
    {
        abort_if(Gate::denies('feature_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.features.create');
    }

    public function store(StoreFeatureRequest $request)
    {
        $feature = Feature::create($request->all());

        return redirect()->route('admin.features.index');
    }

    public function storeAjax(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|unique:features,name', // Adjust table_name accordingly
        ]);

        $entity = Feature::create($validatedData); // Adjust EntityModel accordingly

        return response()->json(['id' => $entity->id, 'name' => $entity->name]);
    }


    public function edit(Feature $feature)
    {
        abort_if(Gate::denies('feature_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.features.edit', compact('feature'));
    }

    public function update(UpdateFeatureRequest $request, Feature $feature)
    {
        $feature->update($request->all());

        return redirect()->route('admin.features.index');
    }

    public function show(Feature $feature)
    {
        abort_if(Gate::denies('feature_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.features.show', compact('feature'));
    }

    public function destroy(Feature $feature)
    {
        abort_if(Gate::denies('feature_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $feature->delete();

        return back();
    }

    public function massDestroy(MassDestroyFeatureRequest $request)
    {
        $features = Feature::find(request('ids'));

        foreach ($features as $feature) {
            $feature->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
