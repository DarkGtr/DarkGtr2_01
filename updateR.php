<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require('config.php');


    if ($_GET['read']) {
        $read = $_GET['read'];
        $up_query = "UPDATE users SET role='Pending' WHERE username='$read'";
        $run_user = mysqli_query($db, $up_query);
        if ($run_user) {
            echo "<script>alert('Updated!'); location.href='admin.php?level=update';</script>";
        } else  {
            echo "<script>alert('Something went wrong!'); location.href='admin.php?level=update';</script>";
        }}
?>
