<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance_report;
use App\Http\Requests\Maintenance_reportRequest;
use App\Models\Responsible;
use App\Models\Technological_equipment;
class Maintenance_reportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maintenance_reports = Maintenance_report::with('responsible','technological_equipment')->paginate(5);
        return view ('maintenance_reports.index',compact('maintenance_reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $maintenance_reports = new Maintenance_report();
        $responsibles = Responsible::all();
        $technological_equipments = Technological_equipment::all();
        return view ('maintenance_reports.create',compact('maintenance_reports','responsibles','technological_equipments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Maintenance_reportRequest $request)
    {
        Maintenance_report::create($request->validated());
       return redirect()->route('maintenance_reports.index')->with('success','Reporte de mantenimiento creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $maintenance_reports = Maintenance_report::find($id);
        $responsibles = Responsible::all();
        $technological_equipments = Technological_equipment::all();
        return view('maintenance_reports.show',compact('maintenance_reports','responsibles','technological_equipments',));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $maintenance_reports = Maintenance_report::find($id);
        $responsibles = Responsible::all();
        $technological_equipments = Technological_equipment::all();

        return view ('maintenance_reports.edit', compact('maintenance_reports','responsibles','technological_equipments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Maintenance_reportRequest $request, int $id)
    {
        $maintenance_reports = Maintenance_report::find($id);
        $maintenance_reports->update($request->validated());
        return redirect()->route('maintenance_reports.index')->with('updated','Reporte de mantenimiento actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $maintenance_reports = Maintenance_report::find($id);
        $maintenance_reports->delete();
        return redirect()->route('maintenance_reports.index')->with('deleted','Reporte de mantenimiento eliminado correctamente');
    }
}
