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
    public function index(Request $request)
    {
        // Inicializar la consulta con relaciones
        $query = Loans::with('responsible', 'technological_equipment');

        // Filtro por nombre de usuario
        if ($request->filled('username')) {
            $query->where('username', 'like', '%' . $request->username . '%');
        }

        // Filtro por tipo de usuario
        if ($request->filled('user_type')) {
            $query->where('user_type', $request->user_type);
        }

        // Filtro por área
        if ($request->filled('area')) {
            $query->where('area', $request->area);
        }

        // Filtro por rol académico
        if ($request->filled('academic_role')) {
            $query->where('academic_role', $request->academic_role);
        }

        // Obtener resultados paginados y mantener filtros en la paginación
        $loans = $query->paginate(5)->appends($request->query());

        // Pasar catálogos necesarios
        $responsibles = Responsible::all();
        $technological_equipments = Technological_equipment::all();

        return view('loans.index', compact('loans', 'responsibles', 'technological_equipments'));
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
        $loans = Loans::findOrFail($id);
        $responsibles = Responsible::all();
        $technological_equipments = Technological_equipment::all();
        return view('loans.show', compact('loans', 'responsibles', 'technological_equipments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $loans = Loans::findOrFail($id);
        $responsibles = Responsible::all();
        $technological_equipments = Technological_equipment::all();
        return view('loans.edit', compact('loans','responsibles','technological_equipments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LoansRequest $request, int $id)
    {
        $loans = Loans::findOrFail($id);
        $loans->update($request->validated());
        return redirect()->route('loans.index')->with('success', 'Préstamo actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $loans = Loans::findOrFail($id);
        $loans->delete();
        return redirect()->route('loans.index')->with('success', 'Préstamo eliminado exitosamente.');
    }
}
