@if(session()->has('email'))
@include('navbar_logout')
@else 
@include('navbar')
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title>
    <style>
        .center-content {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80vh;
            margin: 0;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    @if(session()->has('email'))
    <div class="center-content">
        <div class="text-center">
            <h1>Enter Dashboard</h1>
            <p>Enter dashboard to manage your employees</p>
            <a href = "{{route('dashboard')}}" style="margin-right: 10px;" class="btn btn-success">Dashboard</a>
        </div>
    </div>
    @else 
    <div class="center-content">
        <div class="text-center">
            <h1>Enter Admin Panel</h1>
            <p>Add Admin panel to control your employees</p>
            <a href = "{{route('login')}}" style="margin-right: 10px;" class="btn btn-primary">Login</a>
            <a href = "{{route('signup')}}" class="btn btn-success">Create Account</a>
        </div>
    </div>
    @endif
</body>
</html>

