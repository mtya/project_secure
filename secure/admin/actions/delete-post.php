<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Post</title>
</head>
<body>
<?php
require_once 'db.php';
global $db;
$post_id = $_GET['post-id'];
$delete_post = mysqli_query($db, "DELETE FROM posts WHERE id=$post_id");
if ($delete_post) {
    header('Location: ../posts.php');
} else {
    echo 'Error please try againt !';
}

?>
</body>
</html>