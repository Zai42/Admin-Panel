<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Delete;
use App\Models\Employee;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function ShowEmployeeInDelete(){
        $employee = new Employee;
        $session = Session('id');
        $adminEmployees = Employee::where('admin_id', Session("id"))->get();
        return view('delete_emp', compact('adminEmployees'));   
        } 
    public function DeleteEmployee($id){
        $employee_to_delete = Employee::find($id);
        if($employee_to_delete){
            $employee_to_delete->delete();
        }
        return redirect("/Delete");
    }
}
