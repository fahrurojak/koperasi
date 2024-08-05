<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::all();
        return view('loan.index', compact('loans'));
    }

    public function create()
    {
        return view('loan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'amount' => 'required|numeric',
            'term' => 'required|integer',
        ]);

        Loan::create([
            'code' => $request->code,
            'name' => $request->name,
            'amount' => $request->amount,
            'term' => $request->term,
        ]);

        return redirect()->route('loan.index')
                         ->with('success', 'Loan created successfully.');
    }

    public function show(Loan $loan)
    {
        return view('loan.show', compact('loan'));
    }

    public function edit(Loan $loan)
    {
        return view('loan.edit', compact('loan'));
    }

    public function update(Request $request, Loan $loan)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'amount' => 'required|numeric',
            'term' => 'required|integer',
        ]);

        $loan->update([
            'code' => $request->code,
            'name' => $request->name,
            'amount' => $request->amount,
            'term' => $request->term,
        ]);

        return redirect()->route('loan.index')
                         ->with('success', 'Loan updated successfully.');
    }

    public function destroy(Loan $loan)
    {
        $loan->delete();

        return redirect()->route('loan.index')
                         ->with('success', 'Loan deleted successfully.');
    }
}
