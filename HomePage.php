<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
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
                <a href="index.html"><li>Home</li></a>
                <a href="Logout.php"><li>Logout</li></a>
            </ul>
        </div>
    </div>
</div>
<div ID="MainArea">
    <div class="Container page">
        <h1>
        <?php
        require('config.php');

        if (isset($_POST['Login'])){
            include('$db');

            $username = mysqli_real_escape_string($db, $_POST['username']);
            $password = mysqli_real_escape_string($db, $_POST['password']);
            $password = md5($password);
            $sqlget = "SELECT * FROM users WHERE Username ='$username'
                            AND Password ='$password'";
            $run_user = mysqli_query($db, $sqlget);
            $check_user= mysqli_num_rows($run_user);
            if($check_user==1){
                $_SESSION['username']=$username;
                echo 'Welcome ' . $_SESSION['username'];
            } else {
                header('Refresh:5; url=Login.php');
                echo 'Please Log In First';
            }
        }
        ?>
        </h1>
        <p>
            <?php

            ?>
        </p>
    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>