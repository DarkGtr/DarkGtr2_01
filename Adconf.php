<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require('config.php');

    $delete_id = $_GET['del'];
    $del_query = "DELETE from users WHERE username='$delete_id'";

    if(mysql_query($del_query)) {
        echo "<script>window.open('view_admin.php?deleted=user has been deleted!!!','_self')
    </script>";
    }

?>