<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require('config.php');


        if ('POST' == $_SERVER['REQUEST_METHOD'] and
            isset($_POST['user']) and
            isset($_POST['up'])) {

            $user = mysqli_real_escape_string($_POST['user']);
            $role = mysqli_real_escape_string($_POST['up']);

            $up_query = "UPDATE 'users' SET 'role'='$role' WHERE 'username'='$user'";


            if (mysqli_query($db, $up_query)) {
                echo "<script>alert('Updated!'); location.href='admin.php?level=update';</script>";
            } else {
                echo "<script>alert('Something went wrong!'); location.href='admin.php?level=update';</script>";
            }
        }
?>