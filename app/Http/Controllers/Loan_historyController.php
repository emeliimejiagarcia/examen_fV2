<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Loan_historyRequest;
use App\Models\Loan_history;
use App\Models\Loans;
class Loan_historyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loan_histories = Loan_history::with('loan')->paginate(5);
        return view ('loan_histories.index',compact('loan_histories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $loan_histories = new Loan_history();
        $loans = Loans::all();
        return view ('loan_histories.create',compact('loan_histories','loans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Loan_historyRequest $request)
    {
        Loan_history::create($request->validated());
       return redirect()->route('loan_histories.index')->with('success','Historial de préstamo creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $loan_histories = Loan_history::find($id);
        $loans = Loans::all();
        return view('loan_histories.show', compact('loan_histories', 'loans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $loan_histories = Loan_history::find($id);
        $loans = Loans::all();
        return view('loan_histories.edit', compact('loan_histories', 'loans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Loan_historyRequest $request, int $id)
    {
        $loan_histories = Loan_history::find($id);
        $loan_histories->update($request->validated());
        return redirect()->route('loan_histories.index')->with('updated', 'Historial de préstamo actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $loan_histories = Loan_history::find($id);
        $loan_histories->delete();
        return redirect()->route('loan_histories.index')->with('deleted', 'Historial de préstamo eliminado correctamente');
    }
}
