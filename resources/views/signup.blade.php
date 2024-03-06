@include("navbar")
<body>
<h1 style="text-align:center">Fill your information</h1>
<p style="text-align:center">Fill your information and you will be assigned with a login ID and password</p>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <form action = "{{route('submittion')}}" method = "POST"> 
                @csrf
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name = "firstname" class="form-control" id="firstname" placeholder="Enter your first name">
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name = "lastname" class="form-control" id="lastname" placeholder="Enter your last name">
                </div>

                <div class="form-group">
                    <label for="designation">Designation</label>
                    <select name = "designation" class="form-control" id="designation">
                        <option>Manager</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="department">Department</label>
                    <select class="form-control" name = "department" id="department">
                        <option>IT</option>
                        <option>Sales</option>
                        <option>HR</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <br>
                <div class="text-center">
                    <p>Already have an account?</p>
                </div>
                <div class="text-center">
                    <button type = "button" onclick = redirecttologin() class = "btn btn-success">Login</button>
                </div>
                <br>
          </form>
        </div>
    </div>
</div>
<script>
    function redirecttologin(){
        window.location.href = "/login";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

