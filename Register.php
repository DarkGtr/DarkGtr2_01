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
            <form ID="Register" action="Register.php" method="post">
                <h3>Username:</h3>
                <input type="text" name="username">
                <h3>Email:</h3>
                <input type="text" name="email">
                <h3>Password:</h3>
                <input type="password" name="password">
                <input ID="LoginButton" type="submit" name="Register" value="Register">
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