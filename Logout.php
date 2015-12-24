<?php
require('config.php');
    session_start();
    header('location: index.html');
    session_destroy();
?>