<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GenderType;

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
        $customer->fiscal_code = $request->get('fiscalCode');
        $customer->birth_date = $request->get('birthDate');
        $customer->gender = $request->get('gender');
        $customer->address = $request->get('address');
        $customer->city = $request->get('city');
        $customer->email = $request->get('email');
        $customer->primary_number = $request->get('primaryNumber');
        $customer->secondary_number = $request->get('secondaryNumber');
        //$customer->gender_type_id = GenderType::where('code', $request->get('genderType'))->pluck('id');
        //$customer->gender_type_id = GenderType::where('code', $request->get('genderType'))->get('id');
        $customer->save();

        return redirect('customers')->with('success', 'Contatto aggiunto');
    }

    public function edit($id){
        $customer = \App\Customer::find($id);
        return view('customers.edit', compact('customer','id'));
    }

    public function detail($id){
        $customer = \App\Customer::find($id);
        return view('customers.detail', compact('customer','id'));
    }

    public function update(Request $request, $id){
        $customer= \App\Customer::find($id);
        $customer->name=$request->get('name');
        $customer->lastname=$request->get('lastname');
        $customer->save();
        return redirect('customers');
    }

    public function destroy($id){
        $customer = \App\Customer::find($id);
        $customer->delete();

        return redirect('customers')->with('success','Contatto cancellato');
    }
}
