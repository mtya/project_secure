<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Addmin Center</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<div class="admin">
    <h2>Web Application Admin Center</h2>
    <div class="top-menu">
        <ul>
            <li><a href="index.php">Home-Page</a></li>
            <li><a href="posts.php">Posts</a></li>
            <li><a href="comments.php">Comments</a></li>
            <li><a href="cats.php">Categories</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>
</body>
</html>