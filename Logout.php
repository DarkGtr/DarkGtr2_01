<?php
    session_start();
    header('location: index.html');
    session_destroy();
    if(session_destroy()){
        echo "<script> 'You are signed out'</script>"
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
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
                <a href="HomePage.php"><li>Home</li></a>
                <a href="Login.php"><li>Login</li></a>
            </ul>
        </div>
    </div>
</div>
<div ID="MainArea">
    <div class="Container page">
    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>