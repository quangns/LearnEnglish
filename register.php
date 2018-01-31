<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="register.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Register</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <span>FirstName</span>
    <span style="color:red">*</span>
    <span><input type="text" name="fname" placeholder="FirstName..."></span><br>
    <span>LastName</span>
    <span style="color:red">*</span>
    <input type="text" name="lname" placeholder="LastName..."><br>
    UserName<span style="color:red">*</span>    <input type="text" name="username" placeholder="UserName..."><br>
    Password<span style="color:red">*</span>    <input type="password" name="psw" placeholder="Password..."><br>
    Email<span style="color:red">*</span>:      <input type="email" name="email">

    <br><br>
    <input type="submit" value="register">
    <input type="submit" value="cancel">
    </form>
</body>
</html>