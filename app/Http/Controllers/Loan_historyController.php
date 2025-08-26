<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan_history;
use App\Http\Requests\Loan_historyRequest;
use App\Models\Loans;
class Loan_historyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loan_historys = Loan_history::with('loans')->paginate(5);
        return view ('loan_historys.index',compact('loan_historys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $loan_historys = new Loan_history();
        $loans = Loans::all();
        return view ('loan_historys.create',compact('loan_historys','loans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Loan_historyRequest $request)
    {
        Loan_history::create($request->validated());
       return redirect()->route('loan_historys.index')->with('success','Historial de préstamo creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $loan_historys = Loan_history::find($id);
        $loans = Loans::all();
        return view('loan_historys.show', compact('loan_historys', 'loans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $loan_historys = Loan_history::find($id);
        $loans = Loans::all();
        return view('loan_historys.edit', compact('loan_historys', 'loans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Loan_historyRequest $request, int $id)
    {
        $loan_historys = Loan_history::find($id);
        $loan_historys->update($request->validated());
        return redirect()->route('loan_historys.index')->with('updated', 'Historial de préstamo actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $loan_historys = Loan_history::find($id);
        $loan_historys->delete();
        return redirect()->route('loan_historys.index')->with('deleted', 'Historial de préstamo eliminado correctamente');
    }
}
