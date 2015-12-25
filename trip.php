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


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trip</title>
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
        <h2>
        <?php
            if($_GET['trip']){
             $trip = $_GET['trip'];
            $query = "SELECT * FROM post WHERE p_title='$trip'";
            $run_query = $db->query($query);
            while($row = $run_query->fetch_array()) {
                $post_username = $_POST['username'];
                $post_date = $_POST['p_date'];
                $post_title = $_POST['p_title'];
                $post_content = $_POST['trip_info'];
                $post_country = $_POST['p_country'];
                $post_hashtags = $_POST['p_tag'];

        ?>
            <h2><?php echo $post_title . "by" . $post_Author . "Date: " . $post_date; ?></h2><hr>
            <h2><?php echo $post_content; ?></h2>
            <h2>Post Country: <?php echo $post_country; ?></h2>
            <h2>Tags: <?php echo $post_hashtags; }}?></h2></h2>
    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>
</html>