<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Http\Requests\VendorRequest;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Inicia la consulta
        $query = Vendor::query();

        // Filtro por nombre, correo o cédula
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('mail', 'like', "%{$search}%")
                  ->orWhere('identity_card', 'like', "%{$search}%");
            });
        }

        // Filtro por dirección
        if ($request->filled('address')) {
            $query->where('address', 'like', "%{$request->address}%");
        }

        // Filtro por departamento
        if ($request->filled('department')) {
            $query->where('department', $request->department);
        }

        // Obtener resultados paginados
        $vendors = $query->latest()->paginate(5);

        // Obtener lista de departamentos únicos para el select
        $departments = Vendor::select('department')->distinct()->pluck('department');

        return view('vendors.index', compact('vendors', 'departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vendors = new Vendor();
        return view('vendors.create', compact('vendors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VendorRequest $request)
    {
        $vendors = new Vendor($request->validated());

        if ($request->hasFile('authorization_file')) {
            $path = $request->file('authorization_file')->store('authorizations', 'public');
            $vendors->authorization_file = $path;
        }

        $vendors->save();

        return redirect()->route('vendors.index')->with('success', 'Proveedor registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $vendors = Vendor::findOrFail($id);
        return view('vendors.show', compact('vendors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $vendors = Vendor::findOrFail($id);
        return view('vendors.edit', compact('vendors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VendorRequest $request, int $id)
    {
        $vendors = Vendor::findOrFail($id);
        $vendors->update($request->validated());

        if ($request->hasFile('authorization_file')) {
            $path = $request->file('authorization_file')->store('authorizations', 'public');
            $vendors->authorization_file = $path;
            $vendors->save();
        }

        return redirect()->route('vendors.index')->with('updated', 'Proveedor actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $vendors = Vendor::findOrFail($id);
        $vendors->delete();
        return redirect()->route('vendors.index')->with('deleted', 'Proveedor eliminado correctamente.');
    }
}
