<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // get
    public function create() {
        return view('customers.create');
    }

    // post
    public function store(Request $request) {

        $this->validate($request, [
            'code' => 'required|unique:customers|max:4',
            'name' => 'required|max:30',
            'phone' => 'max:15',
            'address' => 'required'
        ]);
        
        // model customer
        $customer = new Customer();

        // input attribute customer 
        $customer->code = $request->code;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;        

        // insert table customer
        if($customer->save()){
            // return redirect()->route('customer.show', $customer->id);
            return redirect()->route('customer.index');
        } else {
            dd('Data gagal Disimpan');
        }
    }

    public function show($id) {
        $customer = Customer::find($id);

        return view('customers.show', compact('customer'));
    }

    public function index() {
        // $customers = Customer::all();
        $customers = Customer::
            // where('address', 'Jakarta')
            // where([
            //     'address' => 'Bandung',
            //     'name' => 'Zoni'
            // ])
            orderBy('name', 'asc')
            ->get();

        return view('customers.index', compact('customers'));
    }

    public function edit($id) {
        $customer = Customer::find($id);

        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:30',
            'phone' => 'max:15',
            'address' => 'required'
        ]);
        
        // model customer
        $customer = Customer::find($request->id);

        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;        

        // update table customer
        if($customer->save()){
            // return redirect()->route('customer.show', $customer->id);
            return redirect()->route('customer.index');
        } else {
            dd('Data gagal Disimpan');
        }
    }

    public function destroy(Request $request, $id) {
        $customer = Customer::find($id);
        
        if($customer->delete()) {
            return redirect()->route('customer.index')->with('success', 'Data berhasil dihapus!');
        } else {
            dd('Data gagal Dihapus');
        }
    }
}
