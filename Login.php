
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
                    <?php
                        require('config.php');

                        if (isset($_POST['Login'])){
                            include('$db');
                            $username = mysqli_escape_string($_POST['username']);
                            $password = mysqli_escape_string($_POST['password']);
                            //$password = md5($password);
                            $sqlget = mysqli_query ("SELECT * FROM users WHERE Username= '$username'
                                AND Password = '$password'");
                            if (mysqli_num_rows($sqlget) > 0) {
                                echo "you are now logged in.";
                            } else {
                                echo "wrong combo";
                            }
                        }
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