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
    <title>Authors</title>
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
        <h1> <strong>Authors: </strong></h1><hr>
        <h2>
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        require('config.php');

        $list_query = "SELECT * FROM users WHERE role='Author'";
        $run_query = $db->query($list_query);
        while($row = $run_query->fetch_array()){
        $u_username = $row['username'];
        ?>
        <a href="authorpage.php?Author=<?php echo $u_username . "<br>"; ?>
       "><?php echo$u_username;}?></a></h2>
    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>
</html>