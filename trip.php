<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
}
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trip</title>
    <link rel="stylesheet" type="text/css" href="DarkGtr2.css">
    <link rel="shortcut icon" href="#">
    <link rel="icon" type="image/png" href="http://genfavicon.com/inc/to_ico.php" sizes="32x32" />
</head>
<body>
<div ID = "MainHeader">
    <div class="Container">
        <div ID="LogoArea">
            <a href="index.html" ID="LogoLink">Logo</a>
        </div>
        <div ID="NavArea">
            <ul ID="Nav">
                <?php if($_SESSION['username'] == true) { ?>
                    <a href="Logout.php"><li>Logout</li></a><?php }?>
                <?php if($_SESSION['username'] == true) { ?>
                <a href="HomePage.php"><li>Home</li></a><?php }
                else { ?> <a href="index.html"><li>Home</li></a><?php } ?>
                <a href="trips.php"><li>Trips</li></a>
            </ul>
        </div>
    </div>
</div>

<div ID="MainArea">
    <div class="Container page">
        <h2>
        <?php
            if($_GET['trip']){
             $trip = $_GET['trip'];
            $query = "SELECT * FROM post WHERE p_title='$trip'";
            $run_query = $db->query($query);
            while($row = $run_query->fetch_array()) {
                $post_Author = $row['username'];
                $post_date = $row['p_date'];
                $post_title = $row['p_title'];
                $post_content = $row['trip_info'];
                $post_country = $row['p_country'];
                $post_hashtags = $row['p_tag'];

        ?>
            <h2><?php echo "<strong>|$post_title|</strong>" . " " . " by " . "<em>$post_Author</em>" . " ".  "Date: " . $post_date; ?></h2><hr>
            <h2><?php echo $post_content; ?></h2>
            <h2>Country: <?php echo $post_country; ?></h2>
            <h2>Tags: <?php echo $post_hashtags; }}?></h2></h2>
        <?php if ($_SESSION['username'] == true) { $_SESSION['comment'] = $_GET['trip']; ?>
        <div ID="Display">

        </div>
        <div ID="Comment">
            <form action="comment.php" method="post">
                <table>

                    <tr>
                        <td>Name: <?php echo $_SESSION['username'];?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Comment: </td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea name="comment"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="submit"/></td>
                    </tr>
                </table>
            </form>
        </div> <?php } else {echo "Please login to add a comment";} ?>
    </div>
</div>
<div ID="footer">
    <div class="Container">
        Contact: 1400003@rgu.ac.uk
    </div>
</div>
</body>
</html>