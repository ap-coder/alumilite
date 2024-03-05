<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTechnicalSpecRequest;
use App\Http\Requests\StoreTechnicalSpecRequest;
use App\Http\Requests\UpdateTechnicalSpecRequest;
use App\Models\TechnicalSpec;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TechnicalSpecController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('technical_spec_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = TechnicalSpec::query()->select(sprintf('%s.*', (new TechnicalSpec)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'technical_spec_show';
                $editGate      = 'technical_spec_edit';
                $deleteGate    = 'technical_spec_delete';
                $crudRoutePart = 'technical-specs';

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
            $table->editColumn('value', function ($row) {
                return $row->value ? $row->value : '';
            });
            $table->editColumn('icon_class', function ($row) {
                return $row->icon_class ? $row->icon_class : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'published']);

            return $table->make(true);
        }

        return view('admin.technicalSpecs.index');
    }

    public function create()
    {
        abort_if(Gate::denies('technical_spec_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.technicalSpecs.create');
    }

    public function store(StoreTechnicalSpecRequest $request)
    {
        $technicalSpec = TechnicalSpec::create($request->all());

        return redirect()->route('admin.technical-specs.index');
    }

    public function storeAjax(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|unique:technical_specs,name', // Adjust table_name accordingly
        ]);

        $entity = TechnicalSpec::create($validatedData); // Adjust EntityModel accordingly

        return response()->json(['id' => $entity->id, 'name' => $entity->name]);
    }


    public function edit(TechnicalSpec $technicalSpec)
    {
        abort_if(Gate::denies('technical_spec_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.technicalSpecs.edit', compact('technicalSpec'));
    }

    public function update(UpdateTechnicalSpecRequest $request, TechnicalSpec $technicalSpec)
    {
        $technicalSpec->update($request->all());

        return redirect()->route('admin.technical-specs.index');
    }

    public function show(TechnicalSpec $technicalSpec)
    {
        abort_if(Gate::denies('technical_spec_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.technicalSpecs.show', compact('technicalSpec'));
    }

    public function destroy(TechnicalSpec $technicalSpec)
    {
        abort_if(Gate::denies('technical_spec_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $technicalSpec->delete();

        return back();
    }

    public function massDestroy(MassDestroyTechnicalSpecRequest $request)
    {
        $technicalSpecs = TechnicalSpec::find(request('ids'));

        foreach ($technicalSpecs as $technicalSpec) {
            $technicalSpec->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
