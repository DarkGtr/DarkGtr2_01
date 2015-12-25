<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

}
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SearchPage</title>
    <link rel="stylesheet" type="text/css" href="DarkGtr2.css">
    <link rel="shortcut icon" href="#">
    <link rel="icon" type="image/png" href="http://genfavicon.com/inc/to_ico.php" sizes="32x32" />
</head>
<body>
<div ID = "MainHeader">
    <div class="Container">
        <div ID="LogoArea">
            <a href="index.html" ID="LogoLink">Logo</a>
        </div>
        <div ID="NavArea">
            <ul ID="Nav"><?php if($_SESSION['username'] == true) { ?>
                    <a href="Logout.php"><li>Logout</li></a><?php }?>
                <?php if($_SESSION['username'] == true) { ?>
                    <a href="HomePage.php"><li>Home</li></a><?php }
                else { ?> <a href="index.html"><li>Home</li></a><?php } ?>
            </ul>
        </div>
    </div>
</div>
<div ID="MainArea">
    <div class="Container page">
        <h1> <strong>Search: </strong></h1><hr>
        <h2 style="text-align: center">
            <form action="searchpage.php" method="post">
                <input type="text" name="searchkey" placeholder="Search for keywords">
                <input type="submit" value=">>"/>
                </form>
            <form action="search.php" method="post">
                <input type="text" name="searchAuthor" placeholder="Search for Authors">
                <input type="submit" value=">>"/>
            </form>
            </h2>
    </div>
    <div>
        <?php

        if(isset($_POST['searchkey'])){
            $search = "SELECT * FROM post WHERE p_tag='{$_POST['searchkey']}'";
            $result = $db->query($search);
            WHILE ($row = $result->fetch_array())
                echo $row['p_tag'];
            $result->close();
            $db->close();
        } elseif($_POST['searchAuthor']) {
            $search = "SELECT * FROM users WHERE role='{$_POST['searchAuthor']}'";
            $result = $db->query($search);
            WHILE ($row = $result->fetch_array())
                echo $row['role'];
            $result->close();
            $db->close();
        }


        ?>
    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>
</html>