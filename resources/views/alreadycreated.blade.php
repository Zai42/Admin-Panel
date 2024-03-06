@include("navbar")
<div class="container">
    <div class="row justify-content-center align-items-center" style="height:100vh;">
        <div class="col-md-6 text-center">
            <h1>You already has an account!</h1>
            <div class="text-center" style = "  
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;">
                <button class="btn btn-success" onclick = redirecttologin()>Log in</button>
            </div>
            <script>
                function redirecttologin(){
                    window.location.href = "/login";
                }
            </script>
        </div>
    </div>
</div>