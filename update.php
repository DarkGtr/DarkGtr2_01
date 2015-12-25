<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require('config.php');

    if(isset($_POST['submit'])) {

        $update_id = $_GET['update'];
        $updateR = $_POST['submit'];

        $up_query = "UPDATE users SET role='$updateR' WHERE username='$update_id'";
        $run_query2 = $db->query($up_query);
        echo $update_id . $updateR;

        if ($run_query2) {
            echo "<script>alert('Updated!'); location.href='admin.php?level=role';</script>";
        }
    }


?>