<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\add_employee_controller;
use Illuminate\Support\Facades\Session;
use App\Models\Employee;
use App\Models\Users;
use Illuminate\Http\Request;

class add_employee_controller extends Controller
{
    public function add_employee(Request $request)
    {
        // Retrieve form data
        $fullname = $request->input("fullname");
        $designation = $request->input('designation');
        $password = $request->input('password');
        $users = new Users;
        $admin = Users::where('email',Session('email'))->first();
        $admin_id = $admin['id'];
        $department = $admin['department'];
           // Inserting data in table
        $employee = new Employee;
        $employee ->admin_id = $admin_id;
        $employee ->department = $department;
        $employee ->fullname = $request["fullname"];
        $employee ->designation = $request["designation"];
        $employee ->password = $request["password"];
        $employee->save();  
        Session::flash('success', 'Your data has been inserted!');
        return redirect()->back();
        }  
}
