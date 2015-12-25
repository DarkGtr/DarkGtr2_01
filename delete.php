<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require('config.php');

    $delete_id = $_GET['del'];
    $del_query = "DELETE from users WHERE username='$delete_id'";
    $run_query = $db->query($del_query);


    if ($run_query) {
        echo "<script>alert('User Deleted'); location.href='admin.php?user=delete';</script>";
    }
$run_query->close();
$db->close();

?>

