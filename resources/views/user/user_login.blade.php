{{-- @extends('main')
@section('contents') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINY TRESSERS--Your login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL('css/style2.css')}}">
</head>
<body>

<style>
    body{
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url({{URL('imagess/baby2.jpg')}});
}
</style>





    <div class="center-login">
        <h1>Login</h1>
        <form method="POST" action="login" >
            @csrf
            <div class="txt_field">
                <input type="text" required name="uname">
                <span></span>
                <label>UserName</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password" required name="pass">
                <i class="fa fa-eye-slash" aria-hidden="true" id="eye"></i>
                <span></span>
                <label >Password</label>
            </div>
            <div class="psss"><a href="forget-password.php">Forgot Password?</a></div>
            <input type="submit" value="Login" name="submit">
            <div class="signup_link">
                Not have an account?<a href="signup.blade.php">Register</a>
            </div>
        </form>
        <script src="{{URL('js/script.js')}}"></script>
    </div>
</body>
</html>
{{-- @endsection --}}
