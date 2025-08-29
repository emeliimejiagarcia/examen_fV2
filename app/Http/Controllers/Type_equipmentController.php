<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type_equipment;
use App\Http\Requests\Type_equipmentRequest;
use App\Models\Technological_equipment;

class Type_equipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Type_equipment::query()->with('technological_equipment');

        // Filtro por nombre del equipo
        if ($request->filled('equipment_name')) {
            $query->where('equipment_name', 'like', '%' . $request->equipment_name . '%');
        }

        // Filtro por código del equipo
        if ($request->filled('code')) {
            $query->where('code', 'like', '%' . $request->code . '%');
        }

        // Filtro por estado del equipo
        if ($request->filled('type_status')) {
            $query->where('type_status', 'like', '%' . $request->type_status . '%');
        }

        $type_equipments = $query->paginate(5)->appends($request->query());

        return view('type_equipments.index', compact('type_equipments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type_equipments = new Type_equipment();
        $technological_equipments = Technological_equipment::all();
        return view('type_equipments.create', compact('type_equipments', 'technological_equipments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Type_equipmentRequest $request)
    {
        Type_equipment::create($request->validated());
        return redirect()->route('type_equipments.index')->with('success', 'Tipo de equipo tecnológico creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $type_equipments = Type_equipment::findOrFail($id);
        $technological_equipments = Technological_equipment::all();
        return view('type_equipments.show', compact('type_equipments', 'technological_equipments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $type_equipments = Type_equipment::findOrFail($id);
        $technological_equipments = Technological_equipment::all();
        return view('type_equipments.edit', compact('type_equipment', 'technological_equipments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Type_equipmentRequest $request, int $id)
    {
        $type_equipments = Type_equipment::findOrFail($id);
        $type_equipments->update($request->validated());
        return redirect()->route('type_equipments.index')->with('updated', 'Tipo de equipo tecnológico actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $type_equipments = Type_equipment::findOrFail($id);
        $type_equipments->delete();
        return redirect()->route('type_equipments.index')->with('deleted', 'Tipo de equipo tecnológico eliminado correctamente.');
    }
}
