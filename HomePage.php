<?php
    session_start();
    if(!isset($_SESSION['username'])){

    }else{
        die();
    }

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
            <p>Hello,
                <?php
                    if(isset($_SESSION['username'])) {
                        echo $_SESSION['username'];
                    }
                ?>
            </p>
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
        If user and password is correct this page will display his/her username and access_level
    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>