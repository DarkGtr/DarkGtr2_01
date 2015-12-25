<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require('config.php');

    if(isset($_POST['submit'])) {

        $update_id = $_GET['up'];
        $updateR = $_GET['submit'];

        $up_query = "UPDATE users SET role='$update_id' WHERE username='$updateR'";
        $run_query = $db->query($up_query);
        echo $update_id . $updateR;

        if (mysqli_query($db, $run_query)) {
            echo "<script>alert('Updated!'); location.href='admin.php?level=update';</script>";
        } else {
            echo "<script>alert('Something went wrong!'); location.href='admin.php?level=update';</script>";
        }
    }


?>