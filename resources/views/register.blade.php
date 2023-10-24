<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/loginRegister.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div class="register-box">
        <form action="">
            <h2>Register</h2>
            <input type="name" name="name" placeholder="Name" required>
            <input type="username" name="userName" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
            <p>Already have an account? <a href="login">Log in</a></p>
            <button class="regButton" type="submit" id="loginREG-button">Register</button>
        </form>
        
    </div>
</body>
</html>