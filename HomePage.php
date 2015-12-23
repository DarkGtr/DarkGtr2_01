<?php
    if (!isset($_POST['Login'])) {
        echo "<script>alert('Please Login'); location.href='Login.php';</script>";
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
        </div>
        <div ID="NavArea">
            <ul ID="Nav">
                <a href="Logout.php"><li>Logout</li></a>
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

         if (isset($_POST['Login'])) {

             $username = mysqli_real_escape_string($db, $_POST['username']);
             $password = mysqli_real_escape_string($db, $_POST['password']);
             $password = md5($password);
             $sqlget = "SELECT * FROM users WHERE username ='$username'
                            AND password ='$password'";
             $run_user = mysqli_query($db, $sqlget);
             $check_user = mysqli_num_rows($run_user);
             if ($check_user == 1) {
                 $_SESSION['username'] = $username;
                 echo 'Welcome ' . $_SESSION['username'] . "<br>";
             } else {
                 echo "<script>alert('Username or Password is incorrect'); location.href='Login.php';</script>";
             }
             $role = "SELECT * FROM users WHERE username ='$username'";
             $run_role = $db->query($role);
             WHILE ($row = $run_role->fetch_array()) {
                 echo "Role: " . $row['role'] . "<br>";
             if ($row['role'] == 'Admin') {
                 echo "You can access Admin configurations from here " . "<a href=admin.php
                 >Admin Conf</a>" . "<br>" . "and add trip from here " . "<a href=editor.php
                 >Add trip</a>";
             } elseif ($row['role'] == 'Author') {
                 echo "You can add a new trip from here " . "<a href=editor.php
                 >Add trip</a>";
             } elseif ($row['role'] == 'Reader') {
                 echo "You can just read and comment on trips";
             } elseif ($row['role'] == 'Pending') {
                 echo "Please wait to be verified by the Admin" . "<br>" .
                     "You can only read trips";
             }
             }
         }
            ?>
        </h1>
        </div>
    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>
