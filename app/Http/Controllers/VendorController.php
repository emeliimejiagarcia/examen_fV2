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
    public function index()
    {
        $vendors = Vendor::latest()->paginate(5);
        return view ('vendors.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vendors = new Vendor();
        return view ('vendors.create', compact('vendors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VendorRequest $request)
    {
        Vendor::create($request->validated());
        return redirect()->route('vendors.index')->with('success', 'Vendedor creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $vendors = Vendor::find($id);
        return view ('vendors.show', compact('vendors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $vendors = Vendor::find($id);
        return view ('vendors.edit', compact('vendors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VendorRequest $request, int $id)
    {
        $vendors = Vendor::find($id);
        $vendors->update($request->validated());
        return redirect()->route('vendors.index')->with('updated', 'Vendedor actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $vendors = Vendor::find($id);
        $vendors->delete();
        return redirect()->route('vendors.index')->with('deleted', 'Vendedor eliminado correctamente.');
    }
}
