<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

}
require('config.php');
?>

<?php

    if(isset($_POST['searchkey'])){
        $search = "SELECT * FROM post WHERE p_tag='{$_POST['searchkey']}'";
        $result = $db->query($search);
        WHILE ($row = $result->fetch_array())
            echo $row['p_tag'];
        $result->close();
        $db->close();
    } elseif($_POST['searchAuthor']) {
        $search = "SELECT * FROM users WHERE role='{$_POST['searchAuthor']}'";
        $result = $db->query($search);
        WHILE ($row = $result->fetch_array())
            echo $row['role'];
        $result->close();
        $db->close();
    }


?>