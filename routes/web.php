<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminSignUp;
use App\Http\Controllers\add_employee_controller;
use App\Http\Controllers\ViewEmployeesController;
use App\Http\Controllers\Delete;
use App\Http\Controllers\Update;
use App\Http\Controllers\AuthorityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("home");
Route::get('/about', function () {
    return view('about');
})->name("about");
Route::get('/signup', function () {
    return view('signup');
})->name("signup")->middleware('session_check_opposite');
Route::get('/login', function () {
    return view('login');
})->name("login")->middleware('session_check_opposite');

Route::Post("/signup",[AdminSignUp::class, "submitForm"])->name("submittion");
Route::Post("/login")->middleware('guard')->name("verification");
Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard")->middleware("session_check"); 

Route::get('/Signupfailed', function () {
    return view('alreadycreated');   
})->name("signupfailed")->middleware('session_check_opposite');; 

Route::get('/logout', function () {
    return view('logout');
})->name('logout')->middleware("session_end"); 

Route::fallback(function () {
    return view('pagenotfound');
});

Route::get('/Add', function () {
    return view('add_employee');   
})->name("add_employee")->middleware("session_check"); 

Route::get('/Add_Authority', function () {
    return view('authority_add');   
})->name("add_authority")->middleware("session_check"); 

Route::match(['get', 'post'], '/Add_Authority', [AuthorityController::class, 'give_id'])->name('add_authority')->middleware('session_check');
Route::match(['get', 'post'], '/View_Authoirty', [AuthorityController::class, 'viewauthority'])->name('view_authority')->middleware('session_check');


// Route::get('/View', function () {
//     return view('view_employee');   
// })->name("view_employee"); 

Route::Post("/Add",[add_employee_controller::class, "add_employee"])->name("add_employee")->middleware("session_check"); 
Route::get("/View",[ViewEmployeesController::class, "ViewEmployee"])->name("view_employee")->middleware("session_check"); 
Route::get("/Delete",[Delete::class, "ShowEmployeeInDelete"])->name("delete")->middleware("session_check"); 
Route::get("/Update",[Update::class, "ShowEmployeeInView"])->name("update")->middleware("session_check"); 
Route::get("/Delete/{id}",[Delete::class, "DeleteEmployee"])->middleware("session_check"); 
Route::get("/Update/Edit/{id}",[Update::class, "EmployeeEdit"])->name("updateController")->middleware("session_check"); 
Route::put("/Update/Edit/{id}",[Update::class, "EmployeeUpdate"])->name("finalupdate")->middleware("session_check");
Route::Post("/Add_Authority",[AuthorityController::class, "add_authority_in_db"])->name("update_authority_page")->middleware("session_check"); 
Route::put("/View_Authority/{id}",[AuthorityController::class, "updateauthority"])->name("updateauthority")->middleware("session_check");

// Route::Post("/Add_Authority",[AuthorityController::class, "give_id"])->name("add_authority")->middleware("session_check");
// Route::get('/Delete', function () {  
//     return view('delete_emp');   
// })->name("delete_emp");  

