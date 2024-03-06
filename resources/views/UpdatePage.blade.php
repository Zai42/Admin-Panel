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
<h3 style="text-align:center">Update Employees Data</h3>
<p style="text-align:center">Update your employee data to handle them</p>
{{-- form --}}
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form action = "{{route('finalupdate',['id'=>$employee->emp_id])}}" method = "POST"> 
                    @csrf 
                    @method('PUT')
                    <div class="form-group">
                        <label for="fullname">Fullname</label>
                        <input type="text" name = "fullname" class="form-control" id="fullnameW" placeholder="{{$employee->fullname}}">
                    </div>
  
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <select name = "designation" class="form-control" id="designation">
                            <option>Incharge</option>
                            <option>Planner</option>
                            <option>Designer</option>
                          </select>
                    </div>
    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="{{$employee->password}}">
                    </div>
    
                    <div class="text-center">
                        <button type = "submit" class="btn btn-success">Register Employee</button>
                    </div>
                    <br>
                    <div class="text-center">
                      <button type="button" onclick = "redirecttodashboard()" class="btn btn-primary">Go Back.</button>
                  </div>
              </form>
            </div>
        </div>
    </div>
    <script>
      function redirecttodashboard(){
        window.location.href = "/Update";
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>