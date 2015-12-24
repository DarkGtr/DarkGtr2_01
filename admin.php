<?php
    session_start();
    $username = $_SESSION['username'];
    $role = "SELECT * FROM users WHERE username ='$username'";
    $run_role = $db->query($role);
    WHILE ($row = $run_role->fetch_array())
    $row['role'];
    if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
        echo "<script>alert('Please Login'); location.href='Login.php';</script>";
    } elseif ($row['role'] != 'Admin') {
        die("error");
    } else {
        $_SESSION['username'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
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
            </ul>
        </div>
    </div>
</div>
<div ID="MainArea">
    <div class="Container page">
        <h1> <?php echo "Admin: " . $_SESSION['username']; ?> </h1>
        <h1> Admin verify  </h1>
    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>
