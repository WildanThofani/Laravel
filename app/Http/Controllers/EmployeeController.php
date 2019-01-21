<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    //buat fungsi baru untuk index
    function index(){
        $employee = Employee::get(['employee_id', 'employee_name', 'employee_address', 'employee_phone_number']);
        return view('employee.index', compact('employee'));
    }
    function create(){
        //echo "telo";
        //ingak ingak url customer/create
        return view('employee.create');
    }

    function store(Request $request) {

        //echo "Jatimiko";
        $txtId = $request->input('txt_id');
        $txtName = $request->input('txt_name');
        $txtAddress = $request->input('txt_address');
        $txtPhone_Number = $request->input('txt_phone_number');

        echo $txtId." <br /> ",
        $txtName. "<br /> ",
        $txtAddress. " <br />",
        $txtPhone_Number. " <br />";

        Employee::create([
            'employee_id' => $txtId,
            'employee_name' => $txtName,
            'employee_address' =>$txtAddress,
            'employee_phone_number' =>$txtPhone_Number
        ]);
        return redirect('/Employee');
    }
    public function show($id){
        $employee = Employee::where('employee_id', $id)->get();
        return view('employee.show', compact('employee'));

    }

    public function edit($id){
       $employee = Employee::where('employee_id', $id)->get();
       return view('employee.edit', compact('employee'));
    }
    public function update(Request $request, $id){
        $txtId = $request->input('txt_id');
        $txtName = $request->input('txt_name');
        $txtAddress = $request->input('txt_address');
        $txtPhone_Number = $request->input('txt_phone_number');

        Employee::where('employee_id',$id)->update([
            'employee_name' => $txtName,
            'employee_address' => $txtAddress,
            "employee_phone_number" => $txtPhone_Number

        ]);
        
        return redirect('/Employee');
    }
    public function destroy($id)
    {
        $employee = Employee::where('employee_id',$id)->first();
        $employee->delete();
        return redirect('/Employee');
    }
}
