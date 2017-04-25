<?php
require_once 'actions/db.php';
global $db;
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add new post</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<div class="admin">
    <h2>Web Application Admin Center</h2>
    <div class="top-menu">
        <ul>
            <li><a href="index.php">Home page</a></li>
                       <li><a href="posts.php">Posts</a></li>
                       <li><a href="comments.php">Comments</a></li>
                       <li><a href="cats.php">Categories</a></li>
                       <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="post">
        <form action="actions/add-new-post.php" method="post">
            <input type="text" name="post-title" placeholder="Add title of the post"><br>
            <select name="post-cat">
                <option value="">Sellect a category</option>
                <?php
                $get_cats = mysqli_query($db, "SELECT * FROM cats");
                while ($row = mysqli_fetch_assoc($get_cats)) {
                    ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['cat_name'] ?></option>
                    <?php
                }
                ?>
            </select>
            <br>
            <textarea name="post-text" cols="30" rows="10" placeholder="Post details"></textarea><br>
            <input type="submit" value="Add post">
        </form>
    </div>
</div>
</body>
</html>