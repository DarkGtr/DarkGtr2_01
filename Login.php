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
            <form ID="Login" action="Login.php" method="post">
                <p>Username:</p>
                    <input type="text" name="username"><br>
                <p>Password:</p>
                    <input type="password" name="password">
                    <input type="checkbox" name="remember me">
                   remember me <input type="submit" name="Login" value="Log in">
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