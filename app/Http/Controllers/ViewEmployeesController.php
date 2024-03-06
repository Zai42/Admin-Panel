<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\ViewEmployeesController;

use App\Models\Employee;
use App\Models\Users;
use Illuminate\Http\Request;
    
class ViewEmployeesController extends Controller
{
    public function ViewEmployee(){
    $employee = new Employee;
    $session = Session('id');
    $adminEmployees = Employee::where('admin_id', Session("id"))->get();
    return view('view_employee', compact('adminEmployees'));   
    } 
}
