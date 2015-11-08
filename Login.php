<?php
    require('config.php');

    if (isset($_POST['login'])){
        include('$db');
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sqlget = "SELECT Username, Password FROM users WHERE Username= '$username'
    AND Password = '$password'";

    if ($sqlget > 0) {
        echo "you are now logged in.";
    } else {
        echo "wrong combo";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="DarkGtr2.css">
</head>
<body>
<div ID = "MainHeader">
    <div class="Container">
        <div ID="LogoArea">
            <a href="index.html" ID="LogoLink">Logo</a>
        </div>
        <div ID="NavArea">
            <ul ID="Nav">
                <a href="Register.php"><li>Register</li></a>
                <a href="index.html"><li>Home</li></a>
            </ul>
        </div>
    </div>
</div>
<div ID="MainArea">
    <div class="Container page">
        <div ID="LoginArea">
            <form ID="Login" action="Login.php" method="POST">
                <h3>Username:</h3>
                    <input type="text" name="username">
                <h3>Password:</h3>
                    <input type="password" name="password">
                    <input type="checkbox" name="remember me">remember me<br>
                    <input ID="LoginButton" type="submit" name="Login" value="Log in">
            </form>
        </div>
    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>