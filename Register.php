<?php
    require('config.php');

    if (isset($_POST['Register'])) {
        include('$db');

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        $sqlinsert = "INSERT INTO users (username, email, password) VALUES
        ('$username', '$email', '$password')";

        if (!mysqli_query($db, $sqlinsert)) {
            die('Error inserting new record');
        }

        $newrecord = "You're successfully registered";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
                <a href="Login.php"><li>Login</li></a>
                <a href="index.html"><li>Home</li></a>
            </ul>
        </div>
    </div>
</div>
<div ID="MainArea">
    <div class="Container page">
        <div ID="RegisterArea">
            <form ID="Register" action="Register.php" method="POST">
                <h3>Username:</h3>
                <input type="text" name="username">
                <h3>Email:</h3>
                <input type="text" name="email">
                <h3>Password:</h3>
                <input type="password" name="password"><br>
                <input ID="LoginButton" type="submit" name="Register" value="Register">
                <?php
                echo $newrecord;
                ?>
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