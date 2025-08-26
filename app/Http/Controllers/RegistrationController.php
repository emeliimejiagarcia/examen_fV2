<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Http\Requests\RegistrationRequest;
use App\Models\Vendor;
use App\Models\Loans;
use App\Models\Technological_equipment;
use App\Models\Type_equipment;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrations = Registration::with('vendor', 'loans', 'technological_equipment', 'type_equipment')->paginate(5);
        return view('registrations.index', compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registrations = new Registration();
        $vendors = Vendor::all();
        $loans = Loans::all();
        $technological_equipments = Technological_equipment::all();
        $type_equipments = Type_equipment::all();
        return view('registrations.create', compact('registrations', 'vendors', 'loans', 'technological_equipments', 'type_equipments'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegistrationRequest $request)
    {
        Registration::create($request->validated());
       return redirect()->route('registrations.index')->with('success','Registro creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $registrations = Registration::find($id);
        $vendors = Vendor::all();
        $loans = Loans::all();
        $technological_equipments = Technological_equipment::all();
        $type_equipments = Type_equipment::all();
        return view('registrations.show', compact('registrations', 'vendors', 'loans', 'technological_equipments', 'type_equipments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $registrations = Registration::find($id);
        $vendors = Vendor::all();
        $loans = Loans::all();
        $technological_equipments = Technological_equipment::all();
        $type_equipments = Type_equipment::all();
        return view('registrations.edit', compact('registrations', 'vendors', 'loans', 'technological_equipments', 'type_equipments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RegistrationRequest $request, int $id)
    {
        $registrations = Registration::find($id);
        $registrations->update($request->validated());
        return redirect()->route('registrations.index')->with('success','Registro actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $registrations = Registration::find($id);
       $registrations->delete();
       return redirect()->route('registrations.index')->with('deleted','Registro eliminado exitosamente.');
    }
}
