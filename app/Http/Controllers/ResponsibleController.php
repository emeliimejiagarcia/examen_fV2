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
    public function index()
    {
        $responsibles = Responsible::latest()->paginate(5);
        return view ('responsibles.index', compact('responsibles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $responsibles = new Responsible();
        return view ('responsibles.create', compact('responsibles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResponsibleRequest $request)
    {
        Responsible::create($request->validated());
        return redirect()->route('responsibles.index')->with('success', 'Responsable creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $responsibles = Responsible::find($id);
        return view ('responsibles.show', compact('responsibles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $responsibles = Responsible::find($id);
        return view ('responsibles.edit', compact('responsibles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ResponsibleRequest $request, int $id)
    {
        $responsibles = Responsible::find($id);
        $responsibles->update($request->validated());

        return redirect()->route('responsibles.index')->with('updated', 'Responsable actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $responsibles = Responsible::find($id);
        $responsibles->delete();
        return redirect()->route('responsibles.index')->with('deleted', 'Responsable eliminado correctamente.');
    }
}
