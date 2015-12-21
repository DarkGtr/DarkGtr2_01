
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="DarkGtr2.css">
</head>
<body>
<div ID = "MainHeader">
    <div class="Container">
        <div ID="LogoArea">
            <a href="index.html" ID="LogoLink">Logo</a>
        </div>
        <div ID="NavArea">
            <ul ID="Nav">
                <a href="index.html"><li>Home</li></a>
                <a href="Logout.php"><li>Logout</li></a>
            </ul>
        </div>
    </div>
</div>
<div ID="MainArea">
    <div class="Container page">
        <h1>
        <?php
         require('config.php');

         if (isset($_POST['Login'])) {
            include('$db');

            $username = mysqli_real_escape_string($db, $_POST['username']);
            $password = mysqli_real_escape_string($db, $_POST['password']);
            $password = md5($password);
            $sqlget = "SELECT * FROM users WHERE username ='$username'
                            AND password ='$password'";
            $run_user = mysqli_query($db, $sqlget);
            $check_user = mysqli_num_rows($run_user);
            if ($check_user == 1) {
                $_SESSION['username'] = $username;
                echo 'Welcome ' . $_SESSION['username'] . "<br>";
            } else {
                //header('Refresh:5; url=Login.php');
                echo "<script>alert('Please Login'); location.href='Login.php';</script>";
            }
            $role = "SELECT * FROM users WHERE username ='$username'";
            $run_role = $db->query($role);
            WHILE ($row = $run_role->fetch_array()) {
                echo "You are " . $row['role'] . "<br>";}
            if ($row == 'Admin') {
                echo "You can access Admin conf from here ";
            } elseif ($row == 'Author') {
                echo "You can add a new trip from here";
            } elseif ($row == 'Reader') {
                echo "You can just read and comment on trips";
            } elseif ($row == 'Pending') {
                echo "Please wait to be verified by the Admin" . "<br>" .
                    "You are still a pending user you can only read trips but
                 not comment";
            }

        }
        ?>
        </h1>
    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>
