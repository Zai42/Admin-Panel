<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logout extends Controller
{
    public function session_end(){
    if(session()->has('email')) {
        session()->pull('email',NULL);
    }
    return redirect("logout");
}
}
