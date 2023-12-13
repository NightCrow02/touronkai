<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
    <title>AddContact | Touronkai</title>
</head>
<body>
    <div class="login-box">
        <form action="">
            <h2>Add New Group</h2>
            <input type="Group Name" name="Group Name" placeholder="Group Name" required>
            <input type="Group Description" name="Group Description" placeholder="Group Description" required>
            <button class="regButton" type="submit">Submit</button>
        </form>
    </div>
    @include('layout.footer')
</body>
</html>