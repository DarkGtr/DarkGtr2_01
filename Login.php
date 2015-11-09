
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

                            $username = mysqli_real_escape_string($db, $_POST['username']);
                            $password = mysqli_real_escape_string($db, $_POST['password']);
                            //$password = md5($password);
                            $sqlget = "SELECT * FROM users WHERE Username ='$username'
                            AND Password ='$password'";
                            $run_user = mysqli_query($db, $sqlget);
                            $check_user= mysqli_num_rows($run_user);
                            if($check_user>0){
                                $_SESSION['username']=$username;
                                echo "<script>window.open('HomePage.php','_self')</script>";
                            } else {
                                echo "<script>alert('Username or Password is not correct, try again')</script>";
                            }
                            //$result = $db->query($sqlget);
                           // if ($result->//num_rows >0) {
                               // while($row = $result->fetch_assoc()) {
                                   // echo "You are logged in";
                               // }
                           // } else {
                              //  echo "wrong combo";
                            //}
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