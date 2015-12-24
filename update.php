<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require('config.php');

    $update_id = $_GET['update'];
    $update_role = $_GET['updateRole'];
    $up_query = "UPDATE role SET '$update_id' WHERE username='$update_role'";
    $run_query2 = $db->query($up_query);

    if ($run_query2) {
        echo "<script>alert('Updated!'); location.href='admin.php?level=role';</script>";
    }
?>