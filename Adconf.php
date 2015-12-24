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

?>
<?php
    $update_id = $_GET['update'];
    $up_query = "UPDATE 'role' FROM 'users' WHERE 'username'='$update_id'";
    $run_query2 = $db->query($up_query);

    if ($run_query2) {
        echo "<script>alert('Updated!'); location.href='admin.php?level=role';</script>";
    }


?>
