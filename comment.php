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
    $comment = $_POST['comment'];
    $submit = $_POST['submit'];
    $post_title = $_SESSION['comment'];
    $username = $_SESSION['username'];


    $trip_query = "SELECT * FROM post WHERE p_title='$post_title'";
    $run_query = $db->query($trip_query);
    while($row = $run_query->fetch_array()) {
        $p_id = $row['post_id'];

            $query = "INSERT INTO comments (post_id, username, comment)
                                VALUES ('$p_id', '$username'), '$comment'";
            if (mysqli_query($db, $query)) {
                echo "<script>alert('You have just commented!');location.href='trip.php?trip=$post_title</script>";
            } elseif ($comment = '') {
                echo "<script>alert('Enter a comment');</script>";
            }

        }
    ?>