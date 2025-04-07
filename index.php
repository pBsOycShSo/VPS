<!DOCTYPE html>
<html>

    <head>
        <title>Login</title>
        <link rel="Stylesheet" href="assets/login.css"/>
	<link rel="Stylesheet" href="assets/bootstrap.min.css"/>
    </head>

<body>
    <button id="msgBtn" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>


    <div class="d-flex justify-content-center align-items-center">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog rounded-4">
                <div class="modal-content" id="msgBody"></div>
            </div>
        </div>
    </div>


    <div class="wrapper">
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" id="email" placeholder="Username" required/>
        </div>
        <div class="input-box">
            <input type="password" id="password" placeholder="Password" required/>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">forgot password?</a>
        </div>
        <button class="btn" onclick="work();">Login</button>
        <div class="register-link">
            <p>Don't have an account? <a href="#">Register</a></p>
        </div>
    </div>
    <script src="assets/app.js"></script>
    <script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>