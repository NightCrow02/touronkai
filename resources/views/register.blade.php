<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
    <title>Register | Touronkai</title>
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
            <button class="regButton" type="submit">Register</button>
        </form>
    </div>
    @include('layout.footer')
</body>
</html>