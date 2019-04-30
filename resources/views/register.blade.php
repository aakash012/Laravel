<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h2>Registration form: <br></h2>
    <form action="/laravel/public/user/register" method="post">
       <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        <label for="fname">First Name</label>
        <input type="text" name="fname"><br>
        <label for="lname">Last Name</label>
        <input type="text" name="lname"><br>
        <label for="pass">Password</label>
        <input type="password" name="pass" required><br>
        <input type="submit">
    </form>
</body>
</html>