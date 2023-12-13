<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
    <title>AddContact | Touronkai</title>
</head>
<body>
    <div class="login-box">
        <form action="">
            <h2>Add New Contact</h2>
            <input type="First Name" name="First Name" placeholder="First Name" required>
            <input type="Last Name" name="Last Name" placeholder="Last Name" required>
            <input type="Phone Number" name="Phone Number" placeholder="Phone Number" required>
            <button class="regButton" type="submit">Submit</button>
        </form>
    </div>
    @include('layout.footer')
</body>
</html>