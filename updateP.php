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


    if ($_GET['pend']) {
        $pending = $_GET['pend'];
        $up_query = "UPDATE users SET role='Pending' WHERE username='$pending'";
        $run_user = mysqli_query($db, $up_query);
        if ($run_user) {
            echo "<script>alert('Updated!'); location.href='admin.php?level=update';</script>";
        } else  {
            echo "<script>alert('Something went wrong!'); location.href='admin.php?level=update';</script>";
        }}
?>
<?php
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
<?php
    if ($_GET['auth']) {
        $auth = $_GET['auth'];
        $up_query = "UPDATE users SET role='Pending' WHERE username='$auth'";
        $run_user = mysqli_query($db, $up_query);
        if ($run_user) {
            echo "<script>alert('Updated!'); location.href='admin.php?level=update';</script>";
        } else  {
            echo "<script>alert('Something went wrong!'); location.href='admin.php?level=update';</script>";
        }}
?>
<?php
    if ($_GET['admin']) {
        $admin = $_GET['pend'];
        $up_query = "UPDATE users SET role='Pending' WHERE username='$admin'";
        $run_user = mysqli_query($db, $up_query);
        if ($run_user) {
            echo "<script>alert('Updated!'); location.href='admin.php?level=update';</script>";
        } else  {
            echo "<script>alert('Something went wrong!'); location.href='admin.php?level=update';</script>";
        }}
?>