<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAudienceSatisfactionRequest;
use App\Http\Requests\StoreAudienceSatisfactionRequest;
use App\Http\Requests\UpdateAudienceSatisfactionRequest;
use App\Models\AudienceSatisfaction;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AudienceSatisfactionController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('audience_satisfaction_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = AudienceSatisfaction::query()->select(sprintf('%s.*', (new AudienceSatisfaction)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'audience_satisfaction_show';
                $editGate      = 'audience_satisfaction_edit';
                $deleteGate    = 'audience_satisfaction_delete';
                $crudRoutePart = 'audience-satisfactions';

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
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('published', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->published ? 'checked' : null) . '>';
            });
            $table->editColumn('sort_order', function ($row) {
                return $row->sort_order ? $row->sort_order : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'published', 'sort_order']);

            return $table->make(true);
        }

        return view('admin.audience-satisfactions.index');
    }

    public function create()
    {
        abort_if(Gate::denies('audience_satisfaction_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.audience-satisfactions.create');
    }

    public function store(StoreAudienceSatisfactionRequest $request)
    {
        AudienceSatisfaction::create($request->all());

        return redirect()->route('admin.audience-satisfactions.index');
    }

    public function edit(AudienceSatisfaction $audienceSatisfaction)
    {
        abort_if(Gate::denies('audience_satisfaction_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.audience-satisfactions.edit', compact('audienceSatisfaction'));
    }

    public function update(UpdateAudienceSatisfactionRequest $request, AudienceSatisfaction $audienceSatisfaction)
    {
        $audienceSatisfaction->update($request->all());

        return redirect()->route('admin.audience-satisfactions.index');
    }

    public function show(AudienceSatisfaction $audienceSatisfaction)
    {
        abort_if(Gate::denies('audience_satisfaction_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $audienceSatisfaction->load('items');

        return view('admin.audience-satisfactions.show', compact('audienceSatisfaction'));
    }

    public function destroy(AudienceSatisfaction $audienceSatisfaction)
    {
        abort_if(Gate::denies('audience_satisfaction_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $audienceSatisfaction->delete();

        return back();
    }

    public function massDestroy(MassDestroyAudienceSatisfactionRequest $request)
    {
        $audienceSatisfactions = AudienceSatisfaction::find(request('ids'));

        foreach ($audienceSatisfactions as $audienceSatisfaction) {
            $audienceSatisfaction->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

