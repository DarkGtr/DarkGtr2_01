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
                <a href="HomePage.php"><li>Home</li></a>
            </ul>
        </div>
    </div>
</div>
<div ID="MainArea">
    <div class="Container page">
        <h1> <?php echo "Admin: " . $_SESSION['username']; ?> </h1>
        <h2>
            <a href="admin.php?level=update">Users_level</a> |
            <a href="admin.php?user=delete">Users_delete</a>
        </h2>
        <h3>
            <?php
                if(isset($_GET['user']) && !empty($_GET['user'])){
            ?>
            <table>
                <tr>
                    <th>Username</th>
                    <th>Delete User</th>
                </tr>
                <tr>
                    <?php
                    $list_query = "SELECT * FROM users";
                    $run_query = $db->query($list_query);
                    while($row = $run_query->fetch_array()){
                    $u_username = $row['username'];
                    $u_role = $row['role'];
                    ?>
                    <td><?php echo $u_username; ?></td>
                    <td><a href="delete.php?del=<?php echo $u_username;?>">Delete</a></td>
                </tr> <?php }} ?>
            </table>
        </h3>
        <h3>
            <?php
                if(isset($_GET['level']) && !empty($_GET['level'])){
            ?>
            <table>
                <tr>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Change Role To</th>
                </tr>
                <tr>
                    <?php
                        $list_query = "SELECT * FROM users";
                        $run_query = $db->query($list_query);
                        while($row = $run_query->fetch_array()) {
                            $u_username = $row['username'];
                            $u_role = $row['role'];
                    ?>
                    <td><?php echo $u_username; ?></td>
                    <td><?php echo $u_role; ?></td>
                    <td>
                        <form action="update.php?<?php echo $u_username; ?>" method="get">
                            <select name="up">
                                <option value="Pending">Pending</option>
                                <option value="Reader">Reader</option>
                                <option value="Author">Author</option>
                                <option value="Admin">Admin</option>
                            <input type="submit" value="submit"/>
                            </select>
                        </form>
                    </td>
                </tr> <?php }} ?>

            </table>
        </h3>


    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>
