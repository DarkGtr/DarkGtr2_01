<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require('config.php');



/*if ('POST' == $_SERVER['REQUEST_METHOD'] and
    isset($_POST['user']) and
    isset($_POST['up'])) {

    $user = mysqli_real_escape_string($db, $_POST['user']);
    $role = mysqli_real_escape_string($db, $_POST['up']);

    $up_query = "UPDATE 'users' SET 'role'='$role' WHERE 'username'='$user'";


    if (mysqli_query($db, $up_query)) {
        echo "<script>alert('Updated!'); location.href='admin.php?level=update';</script>";
    } else {
        echo "<script>alert('Something went wrong!'); location.href='admin.php?level=update';</script>";
    }
}
    if (isset($_POST['submit'])) {
        $user = mysqli_real_escape_string($db, $_POST['user']);
        $role = mysqli_real_escape_string($db, $_POST['up']);

        $up_query = "UPDATE 'users' SET 'role'='$role' WHERE 'username'='$user'";
        $run_user = mysqli_query($db, $up_query);


        if ($run_user) {
            echo "<script>alert('Updated!'); location.href='admin.php?level=update';</script>";
        } else {
            echo "<script>alert('Something went wrong!'); location.href='admin.php?level=update';</script>";
        }
    }*/
    $pending = $_GET['pend'];
    $read = $_GET['read'];
    $auth = $_GET['auth'];
    $admin = $_GET['admin'];

    if ($pending) {
        $up_query = "UPDATE 'users' SET 'role'='Pending' WHERE 'username'='$pending'";
        $run_user = mysqli_query($db, $up_query);
        if ($run_user) {
            echo "<script>alert('Updated!'); location.href='admin.php?level=update';</script>";
        } else  {
            echo "<script>alert('Something went wrong!'); location.href='admin.php?level=update';</script>";
        }}
         if ($read) {
             $up_query = "UPDATE 'users' SET 'role'='Reader' WHERE 'username'='$read'";
             $run_user = mysqli_query($db, $up_query);
             if ($run_user) {
                 echo "<script>alert('Updated!'); location.href='admin.php?level=update';</script>";
             } else  {
                 echo "<script>alert('Something went wrong!'); location.href='admin.php?level=update';</script>";
         }}

         if ($auth) {
             $up_query = "UPDATE 'users' SET 'role'='Author' WHERE 'username'='$auth'";
             $run_user = mysqli_query($db, $up_query);
             if ($run_user) {
                 echo "<script>alert('Updated!'); location.href='admin.php?level=update';</script>";
             } else  {
                 echo "<script>alert('Something went wrong!'); location.href='admin.php?level=update';</script>";
        }}
         if($admin) {
             $up_query = "UPDATE 'users' SET 'role'='Admin' WHERE 'username'='$admin'";
             $run_user = mysqli_query($db, $up_query);
             if ($run_user) {
                 echo "<script>alert('Updated!'); location.href='admin.php?level=update';</script>";
             } else  {
                 echo "<script>alert('Something went wrong!'); location.href='admin.php?level=update';</script>";
        }}

?>