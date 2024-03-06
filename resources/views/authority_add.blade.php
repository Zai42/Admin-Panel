@if(session()->has('email'))
@include('navbar_logout')
@else 
@include('navbar')
@endif

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Add Authority</title>
  </head>
  <body>
<h3 style="text-align:center">Add Employees Authority</h3>
<p style="text-align:center">Add authority of employees which are under your authority.</p>
{{-- form --}}
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form action = "{{route('add_authority')}}" method = "POST"> 
                    @csrf
                    <div class="form-group">
                        <label for="emp_id">Employee ID</label>
                        <select name = "emp_id" class="form-control" id="emp_id">
                          @foreach($adminemployee as $employee)
                          <option value="{{ $employee->emp_id }}">{{$employee->emp_id."-->".$employee->fullname}}</option>
                          @endforeach
                        </select>                    
                      </div>
  
                      
                    <div class="form-group">
                      <label for="admin_id">Admin ID</label>
                      <input type="text" name="admin_id" class="form-control" id="admin_id" placeholder="{{$employee->admin_id}}" disabled>
                  </div>  
                  
                  <div class="form-group">
                    <label for="authorityname">Authority Name</label>
                    <select name = "authority_name" class="form-control" id="authority_name">
                      @foreach($authority as $auth)
                      <option value="{{ $auth->Authority_Title }}">{{$auth->Authority_id."-->".$auth->Authority_Title}}</option>
                      @endforeach
                    </select>                    
                  </div>
     
                    <div class="form-group">
                      <label for="authority_status">Authority Status</label>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="authority_status" id="access" value="Access" checked>
                          <label class="form-check-label" for="access">
                              Access
                          </label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="authority_status" id="denied" value="Denied">
                          <label class="form-check-label" for="denied">
                              Denied
                          </label>
                      </div>
                  </div>
                  <div class="text-center">
                    <button type = "submit" class="btn btn-success">Add Authority</button>
                </div>
                    <div class="text-center">
                      <button type="button" style="margin-top:30px;" onclick = "redirecttodashboard()" class="btn btn-primary">Go Back.</button>
                  </div>
              </form>
            </div>
        </div>
    </div>

    <script>
      function redirecttodashboard(){
        window.location.href = "/dashboard";
      }
    </script>
  </body>
</html>