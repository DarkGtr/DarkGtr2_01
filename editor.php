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
        if ($row['role'] == 'Admin') {

        } elseif ($row['role'] == 'Author'){

        } else {
            die ("error");
        }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
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
        <h1> <?php echo "Editor: " . $_SESSION['username']; ?> </h1>
        <form method="post" action="editor.php" enctype="multipart/form-data">
            <table width="600px" align="center" border="10px">
                <tr>
                    <td align="center"><h1>Insert New Posts Here</h1></td>
                </tr>
                <tr>
                    <td>Post Title:</td>
                    <td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>Post Author:</td>
                    <td><input type="text" name="Author"></td>
                </tr>
                <tr>
                    <td>Post Country:</td>
                    <td><input type="text" name="country"></td>
                </tr>
                <tr>
                    <td>Post Hashtags:</td>
                    <td><input type="text" name="hashtags"></td>
                </tr>
                <tr>
                    <td>Post Content:</td>
                    <td><textarea name="content" cols="20" rows="20"></textarea></td>
                </tr>
                <tr>
                    <td>Post Image:</td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Publish"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>
