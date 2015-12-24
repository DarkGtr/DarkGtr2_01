<?php
    session_start();
    if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
        echo "<script>alert('Please Login'); location.href='Login.php';</script>";
    }
?>
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require('config.php');

    $role = "SELECT * FROM users WHERE username ='{$_SESSION['username']}'";
    $run_role = $db->query($role);
    WHILE ($row = $run_role->fetch_array()) {
        $row['role'];
    if ($row['role'] != 'Admin') {
        die ("error");
    }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="DarkGtr2.css">
    <link rel="shortcut icon" href="#">
</head>
<body>
<div ID = "MainHeader">
    <div class="Container">
        <div ID="LogoArea">
            <a href="index.html" ID="LogoLink">Logo</a>
        </div>
        <div ID="NavArea">
            <ul ID="Nav">
                <a href="Logout.php"><li>Logout</li></a>
            </ul>
        </div>
    </div>
</div>
<div ID="MainArea">
    <div class="Container page">
        <h1> <?php echo "Admin: " . $_SESSION['username']; ?> </h1>
        <p>
            <a href="admin.php?user=delete">Users_level </a> ||
            <a href="">Users_delete</a>
        </p>
        <p>
            <?php
                if(isset($_GET['user']) && !empty($_GET['user'])){
            ?>
            <table>
                <tr><td width="150px">Users</td><td>Options</td></tr>
            <?php
                $list_query = mysqli_query("SELECT username, email FROM users");
                while($run_list = mysqli_fetch_array($list_query)){
                    $u_username = $run_list['username'];

            ?>
            <tr><td><?php echo $u_username; ?></td><td>
                    <?php
                    if($u_username == 'delete') {
                        echo "<a href=''>Delete</a>";
                    }
                    }}
                    ?>
                </td></tr>

            </table>
        </p>


    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>
