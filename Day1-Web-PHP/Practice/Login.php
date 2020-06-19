<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .login {
            height: 180px;
            width: 230px;
            margin: 0px;
            border: 1px solid #CCCCCC;
            padding: 10px;
        }
        .login input{
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET["username"];
    $password = $_GET["password"];

    if ($username === "admin" && $password === "admin") {
        echo "<h2>Welcome <span style='color: red'> .$username.</span> to website</h2>";
    } else {
        echo "<h2><span style='color: red'>Login Error</span></h2>";
    }
}
?>
<form method="get">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="50" placeholder="User Name">
        <input type="text" name="password" size="50" placeholder="Password">
        <input type="submit" value="Sign in">
    </div>
</form>
</body>
</html>
