<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technological_equipment;
use App\Http\Requests\Technological_equipmentRequest;
use App\Models\Vendor;
class Technological_equipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $technological_equipments = Technological_equipment::with('vendor')->paginate(5);
      return view('technological_equipments.index', compact('technological_equipments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $technological_equipments = new Technological_equipment();
        $vendors = Vendor::all();
        return view('technological_equipments.create', compact('technological_equipments', 'vendors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Technological_equipmentRequest $request)
    {
        Technological_equipment::create($request->validated());
        return redirect()->route('technological_equipments.index')->with('success', 'Equipo tecnológico registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $technological_equipments = Technological_equipment::find($id);
        $vendors = Vendor::all();
        return view('technological_equipments.show', compact('technological_equipments', 'vendors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $technological_equipments = Technological_equipment::find($id);
        $vendors = Vendor::all();
        return view('technological_equipments.edit', compact('technological_equipments', 'vendors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Technological_equipmentRequest $request, int $id)
    {
        $technological_equipments = Technological_equipment::find($id);
        $technological_equipments->update($request->validated());
        return redirect()->route('technological_equipments.index')->with('updated', 'Equipo tecnológico actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $technological_equipments = Technological_equipment::find($id);
        $technological_equipments->delete();
        return redirect()->route('technological_equipments.index')->with('deleted', 'Equipo tecnológico eliminado correctamente.');
    }
}
