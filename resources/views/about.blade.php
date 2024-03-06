@if(session()->has('email'))
@include('navbar_logout')
@else 
@include('navbar')
@endif

  