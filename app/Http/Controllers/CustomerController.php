<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{


    public function index(){
        $customers=\App\Customer::all();

        return view('customers.index',compact('customers'));
    }

    public function create(){
        return view('customers.create');
    }

    public function store(Request $request){
        $customer = new \App\Customer;
        $customer->name = $request->get('name');
        $customer->lastname = $request->get('lastname');
        $customer->save();

        return redirect('customers')->with('success', 'Contatto aggiunto');
    }

    public function edit($id){
        $customer = new \App\Customer;

        return view('customers.edit', compact('customer','id'));
    }

    public function update(Request $request, $id){
        $passport= \App\Customer::find($id);
        $passport->name=$request->get('name');
        $passport->lastname=$request->get('lastname');
        $passport->save();
        return redirect('customers');
    }

    public function destroy($id){
        $customer = \App\Customer::find($id);
        $customer->delete();

        return redirect('customers')->with('success','Contatto cancellato');
    }
}
