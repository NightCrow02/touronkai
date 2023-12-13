<!DOCTYPE html>

<html lang="en">
<head>

   @include('layout.head')
   <title>Login | Touronkai</title>
</head>
<body>
    <div class="login-box">
        <form action="">
            <h2>Login</h2>
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <p>Didn't have an account? <a href="register">Sign Up</a></p>
            <input type="button" value="Log In">
        </form>
    </div>
    @include('layout.footer')
</body>
</html>