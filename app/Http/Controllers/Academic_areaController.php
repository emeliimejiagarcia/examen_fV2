<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Academic_area;
use App\Http\Requests\Academic_areaRequest;
use App\Models\Responsible;
use App\Models\Technological_equipment;

class Academic_areaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academic_areas = Academic_area::with('responsible', 'technological_equipment')->paginate(5);
        return view('academic_areas.index', compact('academic_areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $academic_areas = new Academic_area();
        $responsibles = Responsible::all();
        $technological_equipments = Technological_equipment::all();
        return view('academic_areas.create', compact('academic_areas', 'responsibles', 'technological_equipments'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Academic_areaRequest $request)
    {
        Academic_area::create($request->validated());
        return redirect()->route('academic_areas.index')->with('success', 'Área académica creada con exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $academic_areas = Academic_area::find($id);
        $responsibles = Responsible::all();
        $technological_equipments = Technological_equipment::all();
        return view('academic_areas.show', compact('academic_areas', 'responsibles', 'technological_equipments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $academic_areas = Academic_area::find($id);
        $responsibles = Responsible::all();
        $technological_equipments = Technological_equipment::all();
        return view('academic_areas.edit', compact('academic_areas', 'responsibles', 'technological_equipments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Academic_areaRequest $request, int $id)
    {
        $academic_areas = Academic_area::find($id);
        $academic_areas->update($request->validated());
        return redirect()->route('academic_areas.index')->with('updated', 'Área académica actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $academic_areas = Academic_area::find($id);
        $academic_areas->delete();
        return redirect()->route('academic_areas.index')->with('deleted', 'Área académica eliminada con éxito.');
    }
}
