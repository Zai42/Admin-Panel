<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AdminSignUp;

use App\Models\Users;
use App\Models\Login_info;

use Illuminate\Http\Request;

class AdminSignUp extends Controller
{
    public function submitForm(Request $request)
    {
        // Retrieve form data
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $designation = $request->input('designation');
        $department = $request->input('department');
        $email = $request->input('email');
        $password = $request->input('password');
        $password = Hash::make('password');
        // Checking the email of the user
        $users = new Users;
        $user = Users::where('email',$email)->first();
        if($user){
            return redirect()->route('signupfailed');
        }
        else{
        // Inserting data in table
        $users ->firstname = $request["firstname"];
        $users ->lastname = $request["lastname"];
        $users ->designation = $request["designation"];
        $users ->department = $request["department"];
        $users ->email = $request["email"];
        $users ->password = $request["password"];
        $users->save();  
        return redirect("login");
        }
    }
}
