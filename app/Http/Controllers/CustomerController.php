<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    //buat fungsi baru untuk index
    function index(){
        //echo "assoy geboyy";
        $customer = Customer::get(['customer_id', 'name', 'address']);
        //var_dump($customer);
        return view('customer.index', compact('customer'));
    }
    function create(){
        //echo "telo";
        //ingak ingak url customer/create
        return view('customer.create');
    }

    function store(Request $request) {

        //echo "Jatimiko";
        $txtId = $request->input('txt_id');
        $txtName = $request->input('txt_name');
        $txtAddress = $request->input('txt_address');

        echo $txtId." <br /> ",
        $txtName. "<br /> ",
        $txtAddress. " <br />";

        Customer::create([
            'customer_id' => $txtId,
            'name' => $txtName,
            'address' =>$txtAddress
        ]);
        return redirect('/Customer');
    }
    public function show($id){
        //select * from customer where customer_id = $id
        //$customer = Customer::where('customer_id', $id);
        //var_dump($customer);
        $customer = Customer::where('customer_id', $id)->get();
        return view('customer.show', compact('customer'));

    }

    public function edit($id){
       $customer = Customer::where('customer_id', $id)->get();
       return view('customer.edit', compact('customer'));
    }
    public function update(Request $request, $id){
        $txtId = $request->input('txt_id');
        $txtName = $request->input('txt_name');
        $txtAddress = $request->input('txt_address');

        Customer::where('customer_id',$id)->update([
            'name' => $txtName,
            "address" => $txtAddress

        ]);
        
        return redirect('/Customer');
    }
    public function destroy($id)
    {
        $customer = Customer::where('customer_id',$id)->first();
        $customer->delete();
        return redirect('/Customer');
    }
}
