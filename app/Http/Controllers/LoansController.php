<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loans;
use App\Http\Requests\LoansRequest;
use App\Models\Responsible;
use App\Models\Technological_equipment;

class LoansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = Loans::with('responsible', 'technological_equipment')->paginate(5);
        return view('loans.index', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $loans = new Loans();
        $responsibles = Responsible::all();
        $technological_equipments = Technological_equipment::all();
        return view('loans.create', compact('loans', 'responsibles', 'technological_equipments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoansRequest $request)
    {
        Loans::create($request->validated());
        return redirect()->route('loans.index')->with('success', 'Préstamo creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $loans = Loans::find($id);
        $responsibles = Responsible::all();
        $technological_equipments = Technological_equipment::all();
        return view('loans.show', compact('loans', 'responsibles', 'technological_equipments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $loans = Loans::find($id);
        $responsibles = Responsible::all();
        $technological_equipments = Technological_equipment::all();
        return view ('loans.edit', compact('loans','responsibles','technological_equipments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LoansRequest $request, int $id)
    {
        $loans = Loans::find($id);
        $loans->update($request->validated());
        return redirect()->route('loans.index')->with('success', 'Préstamo actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $loans = Loans::find($id);
        $loans->delete();
        return redirect()->route('loans.index')->with('success', 'Préstamo eliminado exitosamente.');
    }
}
