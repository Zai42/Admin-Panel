@if(session()->has('email'))
@include('navbar_logout')
@else 
@include('navbar')
@endif
<div class="container">
    <div class="row justify-content-center align-items-center" style="height:100vh;">
        <div class="col-md-6 text-center">
            <h1>Error: 404</h1>
            <p>Sorry! This page Not Found.</p>
        </div>
    </div>
</div>