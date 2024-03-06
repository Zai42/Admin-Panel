@if(session()->has('email'))
@include('navbar_logout')
@else 
@include('navbar')
@endif
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Authori</title>
</head>
<body>
<h1 style = "text-align:center">Update Admin Authority</h1>
<p style = "text-align:center">Give or deny the access of employees in your supervision. </p>
<form method="POST" action="{{ route('update_authority_in_db', ['id' => ':id']) }}" id="updateForm">
  @csrf 
    @method('PUT')
    <div class="container"  
        <div class="row center">
          <div class="col-md-3">
            <label for="chooseEmployee">Choose Employee:</label>
            @foreach($employee_authority as $emp_in_authority)
            <select class="form-control" id="chooseEmployee" name = "Employee_ID">
              <option value="{{$emp_in_authority->emp_id}}">{{$emp_in_authority->emp_id}}</option>
              @endforeach
            </select>
          </div>
        </div>
    
        <div class="row bottom-options">
          <div class="col-md-4">
            <br/>
            @foreach($authority_detail as $auth)
            <label for="Authorty Title">Authority List</label>
            <select class="form-control" id="authority1" name = "authority_title">
                <option value="{{$auth->Authority_Title}}" selected>{{$auth->Authority_Title}}</option>
            </select>
            @endforeach
            <br/>
            <label for="authority1">Status</label>
            <select class="form-control" id="authority1" name = "authority_status">
            <option value="Access">Access</option>
            <option value="Denied">Denied</option>
            </select>
          </div>
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Update</button>

</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
