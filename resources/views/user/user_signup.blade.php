<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINY TRESSERS--Signup Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL('css/style2.css')}}">
</head>
<body>
    <style>
        body{
        background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url({{URL('imagess/baby2.jpg')}});
    }
    </style>




    <div class="center">
        <h1>Registration</h1>
        <form method="POST" action="signup">
            @csrf
            <div class="txt_field">
                <input type="text" required name="fname">
                <span></span>
                <label>Full Name</label>
            </div>
            <div class="txt_field">
                <input type="text" required name="uname">
                <span></span>
                <label>UserName</label>
            </div>
            <div class="txt_field">
                <input type="tel" minlength="10" maxlength="10" required name="pnum">
                <span></span>
                <label>Phone Number</label>
            </div>
            <div class="txt_field">
                <input type="email" required name="email">
                <span></span>
                <label>Email ID</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password" minlength="4" maxlength="16" required name="pass">
                <i class="fa fa-eye-slash" aria-hidden="true" id="eye"></i>
                <span></span>
                <label for="password">Password</label>
            </div>
            <div class="txt_field">
                <input type="password" id="cnfrm-password" minlength="4" maxlength="16" required name="conpass">
                <i class="fa fa-eye-slash" aria-hidden="true" id="eye-con"></i>
                <span></span>
                <label for="cnfrm-password">Confirm Password</label>
            </div>
            <div>
            <p id="message"></p>
            </div>
            <input type="submit" onclick="checkPassword()" value="Register" name="submit">
            <div class="signup_link">
                Already have an account?<a href="login.blade.php">Login</a>
            </div>
        </form>
        <script src="{{URL('js/script.js')}}"></script>
    </div>
</body>
</html>
