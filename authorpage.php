<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
    echo "<script>alert('Please Login'); location.href='Login.php';</script>";
}
require('config.php');
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$role = "SELECT * FROM users WHERE username ='{$_SESSION['username']}'";
$run_role = $db->query($role);
WHILE ($row = $run_role->fetch_array()) {
    $row['role'];
    if ($row['role'] == 'Admin') {

    } elseif ($row['role'] == 'Author'){

    } elseif ($row['role'] == 'Reader') {

    } else {
        die ("error");
    }
}
$author = $_GET['author'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorpage</title>
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
            <ul ID="Nav">
                <a href="Logout.php"><li>Logout</li></a>
                <a href="HomePage.php"><li>Home</li></a>
            </ul>
        </div>
    </div>
</div>
<div ID="MainArea">
    <div class="Container page">
        <h1>Author name: <?php echo $author; ?></h1><hr>
        <h2>  <strong>Author's posts:</strong><br>
        <?php
            $query = "SELECT * FROM post WHERE username='$author'";
            $run_query = $db->query($query);
            while($row = $run_query->fetch_array()){
            $post_title = $row['p_title'];
        ?>
        <a ID="posts" href="trip.php?trip=<?php echo $post_title; ?>"><?php echo $post_title  . "<br>";}?></a></h2>
    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>
