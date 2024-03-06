<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin Panel</title>
  </head>
  <body>
    @if(session()->has('email'))
    @include('navbar_logout');
    @else 
    @include('navbar');
    @endif
      <h1 style="text-align:center">Welcone, {{session('firstname')}}</h1>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div class="row">
    <div class="card" style="width: 18rem; margin-right:120px;">
      <img class="card-img-top" src="add_employee.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Add Employees</h5>
        <p class="card-text">Add Employees which are under your supervision so that you can manage them later.</p>
        <a href="{{route('add_employee')}}" class="btn btn-primary">Add</a>
      </div>
    </div>

    <div class="card" style="width: 18rem; margin-right:120px;">
      <img class="card-img-top" src="view_employee.png" alt="Card image cap">
      <div class="card-body" >
        <h5 class="card-title">View Employees Information</h5>
        <p class="card-text">View employee information which are under your supervision.</p>
        <a href="{{route('view_employee')}}" class="btn btn-success">View</a>
      </div> 
    </div>

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="add_delete.png" alt="Card image cap">
      <div class="card-body" >
        <h5 class="card-title">Delete Employees Data</h5>
        <p class="card-text">Delete employee information which are under your supervision.</p>
        <a href="{{route("delete")}}" class="btn btn-danger">Delete</a>
      </div> 
    </div>

    
    <div class="card" style="width: 18rem;  margin-right:120px;">
      <img class="card-img-top" src="update_employee.png" alt="Card image cap">
      <div class="card-body" >
        <h5 class="card-title">Update Employees Data</h5>
        <p class="card-text">Update employee information which are under your supervision.</p>
        <a href="{{route("update")}}" class="btn btn-secondary">Update</a>
      </div> 
    </div>

    <div class="card" style="width: 18rem; margin-right:120px;">
      <img class="card-img-top" src="emp_authority.png" alt="Card image cap">
      <div class="card-body" >
        <h5 class="card-title">Add Employees Authority</h5>
        <p class="card-text">Add the authority of employee who are under your supervision.</p>
        <a href="{{route("add_authority")}}" class="btn btn-primary">Add Employee Authority</a>     
      </div>   
    </div>

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="emp_authority_update.png" alt="Card image cap">
      <div class="card-body" >
        <h5 class="card-title">View Employees Authority</h5>
        <p class="card-text">Update the authority of employee who are under your supervision.</p>
        <a href="{{route('view_authority')}}" class="btn btn-success">View Employee Authority</a>     
      </div>   
    </div>

  </div>  
  </body>
</html>