<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding new post</title>
</head>
<body>
<?php
require_once 'db.php';
global $db;
$post_title = htmlspecialchars($_POST['post-title']);
$post_cat = $_POST['post-cat'];
$post_text = htmlspecialchars($_POST['post-text']);
$insert_post = mysqli_query($db, "INSERT INTO posts (post_title,post_text,post_cat) VALUES ('$post_title','$post_text',$post_cat)");
if ($insert_post) {
    header('Location: ../posts.php');
} else {
    echo 'Error please try again';
}
?>
</body>
</html>