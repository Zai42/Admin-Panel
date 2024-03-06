@include("navbar")
<div class="container">
    <div class="row justify-content-center align-items-center" style="height:100vh;">
        <div class="col-md-6 text-center">
            <h1>You have been Logged Out!</h1>
            <div class="text-center" style = "  
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;">
            <button class="btn btn-success" onclick = redirecttologin()>Log in again</button>
                <p style="margin: 20px 20px;">OR</p>
            <button class="btn btn-primary" onclick = redirecttosignup()>Create new account</button>
            </div>
            <script>
                function redirecttologin(){
                    window.location.href = "/login";
                }
                function redirecttosignup(){
                    window.location.href = "/signup";
                }
            </script>
        </div>
    </div>
</div>