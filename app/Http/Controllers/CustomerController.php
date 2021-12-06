<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $getCustomer = Customer::all();
        return view('customer.index', compact('getCustomer'));
    }
    
    public function destroy($id)
    {
        $getCustomer = Customer::find($id);
        $getCustomer->delete();
        return redirect()->back();
    }

    public function create()
    {
        return view('customer.tambah_customer');
    }
    
    public function store(Request $request)
    {
        // eloquent (gaperlu model)
            // $customer = new Customer();
            // $customer->email = $request->email;
            // $customer->name = $request->name;
            // $customer->address = $request->address;
            // $customer->phone = $request->phone;
            // $customer->save();
            // return redirect()->back();

        //mess assigment (tambahan di model customer($fillable))
            Customer::create($request->all());
            return redirect()->back();
    }

    public function edit($id)
    {
        $getCustomer = Customer::find($id);
        return view('customer.edit_customer',[
            'getCustomer' => $getCustomer,
        ]);
    }

    public function update($id,Request $request)
    {
       $customer = Customer::find($id);
       $customer->email = $request->email;
       $customer->name = $request->name;
       $customer->address = $request->address;
       $customer->phone = $request->phone;
       $customer->save();
       return redirect()->route('customer');
    }

}
