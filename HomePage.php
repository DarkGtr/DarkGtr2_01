<?php
    session_start();
        if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
            echo "<script>alert('Please Login'); location.href='Login.php';</script>";
        }
    //if (!isset($_POST['Login'])) {
     //   echo "<script>alert('Please Login'); location.href='Login.php';</script>";
  //  }
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
                <a href="Logout.php"><li>Logout</li></a>
                <a href="authors.php"><li>Authors</li></a>
            </ul>
        </div>
    </div>
</div>
<div ID="MainArea">
    <div class="Container page">
        <div ID="WelcomeCode">
        <h1>
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
         require('config.php');

             echo 'Welcome ' . $_SESSION['username'] . "!" . "<br>";
             $role = "SELECT * FROM users WHERE username ='{$_SESSION['username']}'";
             $run_role = $db->query($role);
             WHILE ($row = $run_role->fetch_array()) {
                 echo "Role: " . $row['role'] . "<br>";
             if ($row['role'] == 'Admin') {
                 echo "You can access Admin Panel from here " . "<a href=admin.php
                 >Admin Panel</a>" . "<br>" . "and add trip from here " . "<a href=editor.php
                 >Add trip</a>";
             } elseif ($row['role'] == 'Author') {
                 echo "You can add a new trip from here " . "<a href=editor.php
                 >Add Trip</a>";
             } elseif ($row['role'] == 'Reader') {
                 echo "You can just read and comment on trips";
             } elseif ($row['role'] == 'Pending') {
                 echo "Please wait to be verified by the Admin" . "<br>" .
                     "You can only read trips";
             }
                 }

            ?>
        </h1>
        </div>
    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk for any problem such as being Pending user for more than 24hours.
    </div>
</div>
</body>
