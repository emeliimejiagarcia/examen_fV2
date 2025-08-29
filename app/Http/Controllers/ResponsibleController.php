<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsible;
use App\Http\Requests\ResponsibleRequest;

class ResponsibleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Responsible::query();

        // Filtro de búsqueda por nombre, correo o cédula
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('mail', 'like', "%{$search}%")
                  ->orWhere('identity_card', 'like', "%{$search}%");
            });
        }

        // Filtro por departamento
        if ($request->filled('departament')) {
            $query->where('departament', $request->departament);
        }

        // Filtro por rol académico
        if ($request->filled('academic_role')) {
            $query->where('academic_role', $request->academic_role);
        }

        $responsibles = $query->latest()->paginate(5)->appends($request->query());

        // Obtener listas únicas para los select
        $departments = Responsible::select('departament')->distinct()->pluck('departament');
        $roles = Responsible::select('academic_role')->distinct()->pluck('academic_role');

        return view('responsibles.index', compact('responsibles', 'departments', 'roles'));
    }

    public function create()
    {
        $responsibles = new Responsible();
        return view('responsibles.create', compact('responsibles'));
    }

    public function store(ResponsibleRequest $request)
    {
        Responsible::create($request->validated());
        return redirect()->route('responsibles.index')->with('success', 'Responsable creado correctamente.');
    }

    public function show(int $id)
    {
        $responsibles = Responsible::find($id);
        return view('responsibles.show', compact('responsibles'));
    }

    public function edit(int $id)
    {
        $responsibles = Responsible::find($id);
        return view('responsibles.edit', compact('responsibles'));
    }

    public function update(ResponsibleRequest $request, int $id)
    {
        $responsibles = Responsible::find($id);
        $responsibles->update($request->validated());
        return redirect()->route('responsibles.index')->with('updated', 'Responsable actualizado correctamente.');
    }

    public function destroy(int $id)
    {
        $responsibles = Responsible::find($id);
        $responsibles->delete();
        return redirect()->route('responsibles.index')->with('deleted', 'Responsable eliminado correctamente.');
    }
}

