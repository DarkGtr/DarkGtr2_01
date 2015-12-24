<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require('config.php');

    $searchP = "SELECT * FROM users WHERE role = 'Pending'";
    $searchR = "SELECT * FROM users WHERE role = 'Reader'";
    $searchA = "SELECT * FROM users WHERE role = 'Author'";

?>