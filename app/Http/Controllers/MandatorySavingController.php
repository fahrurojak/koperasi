<?php

namespace App\Http\Controllers;

use App\Models\MandatorySaving;
use App\Models\Customer;
use Illuminate\Http\Request;

class MandatorySavingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mandatorySavings = MandatorySaving::with('customer')->get();

        return view('mandatory_savings.index', compact('mandatorySavings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('mandatory_savings.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'amount' => 'required|numeric',
        ]);

        $mandatorySaving = new MandatorySaving();
        $mandatorySaving->date = date('Y-m-d');
        $mandatorySaving->customer_id = $request->customer_id;
        $mandatorySaving->amount = $request->amount;

        if ($mandatorySaving->save()) {
            return redirect()->route('mandatory-saving.index')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('mandatory-saving.index')->with('error', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MandatorySaving  $mandatorySaving
     * @return \Illuminate\Http\Response
     */
    public function show(MandatorySaving $mandatorySaving)
    {
        return view('mandatory_savings.show', compact('mandatorySaving'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MandatorySaving  $mandatorySaving
     * @return \Illuminate\Http\Response
     */
    public function edit(MandatorySaving $mandatorySaving)
    {
        $customers = Customer::all();
        return view('mandatory_savings.edit', compact('mandatorySaving', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MandatorySaving  $mandatorySaving
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MandatorySaving $mandatorySaving)
    {
        $request->validate([
            'customer_id' => 'required',
            'amount' => 'required|numeric',
        ]);

        $mandatorySaving->customer_id = $request->customer_id;
        $mandatorySaving->amount = $request->amount;

        if ($mandatorySaving->save()) {
            return redirect()->route('mandatory-saving.index')->with('success', 'Data Berhasil Diubah');
        } else {
            return redirect()->route('mandatory-saving.index')->with('error', 'Data Gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MandatorySaving  $mandatorySaving
     * @return \Illuminate\Http\Response
     */
    public function destroy(MandatorySaving $mandatorySaving)
    {
        if ($mandatorySaving->delete()) {
            return redirect()->route('mandatory-saving.index')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('mandatory-saving.index')->with('error', 'Data Gagal Dihapus');
        }
    }
}
