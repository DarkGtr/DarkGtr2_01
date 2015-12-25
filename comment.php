<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
    echo "<script>alert('Please Login'); location.href='Login.php';</script>";
}
require('config.php');
?>

<?php
    $comment = $_POST['comment'];
    $submit = $_POST['submit'];
    $post_title = $_GET['trip'];
    echo $comment;
    $trip_query = "SELECT * FROM post WHERE p_title='$post_title'";
    $run_query = $db->query($query);
    while($row = $run_query->fetch_array()) {
        $p_id = $row['post_id'];


        if(isset($submit)) {
            $query = "INSERT INTO comments (post_id, username, comment)
                                VALUES ('$p_id', '{$_SESSION['username']}'), '$comment'";
            if (mysqli_query($db, $query)) {
                echo "<script>alert('You have just commented!');location.href='trip.php?trip='$post_title'</script>";
            } elseif ($comment = '') {
                echo "<script>alert('Enter a comment');</script>";
            }

        }}
    ?>