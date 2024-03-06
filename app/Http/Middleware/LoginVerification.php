<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Users;


class LoginVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $admin_email = $request->input('email');
        $admin_password = $request->input('password');
        $user = Users::where('email',$admin_email)->first();
        if($user){
            $firstname = $user["firstname"];
            $id = $user["id"];
            if($admin_password == $user["password"]){
                $request->session()->put([
                    "email"=>$admin_email,
                    "firstname"=>$firstname,
                    "id"=>$id
                    ]);
                if(session()->has('email')){
                    return redirect()->route('dashboard');
                    }
                else{
                    return redirect()->route('logout');
                }
                if(Session::has('success')){
                      Session::get('success');
                }
            }
            else{
                return response("Invalid password!", 401);
            }
        }
        else{
            return response("User not found!", 404);
        }
    }
}