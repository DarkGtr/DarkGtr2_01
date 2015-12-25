<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
    echo "<script>alert('Please Login'); location.href='Login.php';</script>";
}
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require('config.php');

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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorpage</title>
    <link rel="stylesheet" type="text/css" href="DarkGtr2.css">
    <link rel="shortcut icon" href="#">
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
        <?php
            $author = $_GET['author'];
            $query = "SELECT * FROM post WHERE username='$author'";
            $run_query = $db->query($query);
            while($row = $run_query->fetch_array()){
            $u_username = $row['username'];
            $post_title = $row['p_title'];
            $post_title2 = $row['p_title'];

        ?>
        <h2>Author name: <?php echo $author; ?><br>
        Author's posts:<br>
        <a href="trip.php?trip=<?php echo $post_title; ?>"><?php echo $post_title2;}?></a></h2>
    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>
