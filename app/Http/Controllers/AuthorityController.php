<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AuthorityController;
use Illuminate\Support\Facades\Session;
use App\Models\Employee;
use App\Models\Authority;
use App\Models\AuthorityDetail;

class AuthorityController extends Controller
{
    public function give_id(){
        // return redirect('/Add_Authority');
        $adminemployee = Employee::where("admin_id", Session("id"))->get();
        $authority = AuthorityDetail::all();
        return view('authority_add', compact('adminemployee','authority'));   
        // return view('authority_add'); 
    }   
    public function add_authority_in_db(Request $request){
           // Retrieve form data
           $admin_id = Session('id');
           $authority_name = $request->input('authority_name');
           $authority_id = AuthorityDetail::where("Authority_Title",$authority_name)->first();
           $authority_id = $authority_id->Authority_id;
           $authority_status = $request->input('authority_status');
           $emp_id = $request->input('emp_id');
              // Inserting data in table
           $autority = new Authority;
           $autority ->authority_id = $authority_id;
           $autority ->emp_id = $emp_id;
           $autority ->authority_name = $authority_name;
           $autority ->authority_status = $authority_status;
           $autority ->admin_id = $admin_id;
           $autority->save();  
           Session::flash('success', 'Your data has been inserted!');
           return redirect()->back();
    }     
    public function giveinfo(){
        $adminemployee = Employee::where("admin_id", Session("id"))->get();
        $authority_detail = AuthorityDetail::all();
        $employee_authority = Authority::all();
        return view('UpdateAuthority', compact('adminemployee','authority_detail', 'employee_authority'));   
    }  
    public function getinfotoupdate(){
        $adminemployee = Employee::where("admin_id", Session("id"))->get();
        $authority_detail = AuthorityDetail::all();
        $employee_authority = Authority::all();
        return view('UpdateAuthority', compact('adminemployee','authority_detail', 'employee_authority'));   
    }    
    public function viewauthority(){
        $employee_authority = Authority::all();
        return view('ViewAuthority',compact('employee_authority')); 
    }      
    public function updateauthority($id, Request $request){
        $specific_employee_authority = Authority::find($id);
        $authority_status = $request->input('authorit_status');

        //Inserting data
            // $specific_employee_authority->authority_id = $specific_employee_authority->authority_id; 
            // $specific_employee_authority->emp_id = $specific_employee_authority->emp_id; 
            // $specific_employee_authority->authority_name = $specific_employee_authority->authority_name;
            $specific_employee_authority->authority_status = $authority_status;
            // $specific_employee_authority->admin_id = $specific_employee_authority->admin_id; 
            // $specific_employee_authority->updated_at = $specific_employee_authority->updated_at;
            // $specific_employee_authority->created_at = $specific_employee_authority->created_at;
            $specific_employee_authority->update();
            return redirect('/View_Authoirty');

    }
}

