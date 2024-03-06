@if(session()->has('email'))
@include('navbar_logout')
@else 
@include('navbar')
@endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Authority ID</th>
        <th scope="col">Employee ID</th>
        <th scope="col">Authority Name</th>
        <th scope="col">Your ID</th>
        <th scope="col">Authority Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @php $serial_number = 1; @endphp
    <tbody>
      @foreach($employee_authority as $employee)
      <form method = "POST" action = "{{route('updateauthority',['id'=>$employee->row_id])}}">
        @csrf
        @method('PUT')
      <tr>
        <th scope="row">{{$serial_number}}</th>
        <td>{{$employee->authority_id}}</td>
        <td>{{$employee->emp_id}}</td>
        <td>{{$employee->authority_name}}</td>
        <td>{{$employee->admin_id}}</td>
        <td>  
          <select class="form-control" id="authority_status" name="authorit_status">
          <option value="Access" {{ $employee->authority_status == 'Access' ? 'selected' : '' }}>Access</option>
          <option value="Denied" {{ $employee->authority_status == 'Denied' ? 'selected' : '' }}>Denied</option>
      </select>
        </td>
          <td><button type = "submit" class = "btn btn-success">Update</button></td>
      </tr>
    </form>
    @php $serial_number++; @endphp 

    @endforeach
  </tbody>
  </table>
