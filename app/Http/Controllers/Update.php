<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Update;
use App\Models\Employee;
use App\Models\Users;
use Illuminate\Http\Request;

class Update extends Controller
{
    public function ShowEmployeeInView(){
        $session = Session('id');
        $adminEmployees = Employee::where('admin_id', Session("id"))->get();
        return view('update', compact('adminEmployees'));   
        }   
    public function EmployeeEdit($id){
        $id_employee = $id;
         $employee = Employee::find($id);
         if($employee){
            return view('UpdatePage',compact('employee')); 
        }
        else{
            return redirect('/dashboard')->with('error', 'Employee not found');
        }
    }
    public function EmployeeUpdate($id, Request $request){
        $employee_table = new Employee;
        $employee = Employee::find($id);
        $fullname = $request->input('fullname');
        $designation = $request->input('designation');
        $password = $request->input('password');
        $admin = Users::where('email',Session('email'))->first();
        $admin_id = $admin['id'];
        $department = $admin['department'];
        if($employee){
           if($fullname==null){
            $employee->fullname = $employee->fullname;
            $employee->designation = $request['designation'];
            $employee->password = $request['password'];
            $employee->update();
            return redirect('/Update');
           }
           else if($password==NULL){
            $employee->fullname = $request['fullname'];
            $employee->designation = $request['designation'];
            $employee->password = $employee->password;
            $employee->update();      
            return redirect('/Update');     
        }
            else{
            $employee->fullname = $request['fullname'];
            $employee->designation = $request['designation'];
            $employee->password = $request['password'];
            $employee->update();
            return redirect('/Update');
            }
       }
       else{
        return redirect('/dashboard');
       }
   }

}

