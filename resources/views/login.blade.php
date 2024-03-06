@include("navbar")
<body>
<h1 style="text-align:center">Login</h1>
<p style="text-align:center">Please fill in your information to continue.</p>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <form action = "{{route('verification')}}" method = "POST">
                @csrf
                <div class="form-group">
                    <label for="id">Email</label>
                    <input type="text" name = "email" class="form-control" id="firstname" placeholder="Enter your Registered Email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name = "password" class="form-control" id="password" placeholder="Enter password">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <br>
                <div class="text-center">
                    <p>Doesnot have an account?</p>
                </div>
                <div class="text-center">
                    <button type = "button" onclick = redirecttosignup() class = "btn btn-success">Create Account</button>
                </div>
                <br>
          </form>
        </div>
    </div>
</div>
<script>
    function redirecttosignup(){
        window.location.href = "/signup";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

