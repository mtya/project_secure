
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
    <title>Application posts</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<div class="admin">
    <h2>Web Applicatin center</h2>
    <div class="top-menu">
        <ul>
            <li><a href="index.php">Home Page</a></li>
            <li><a href="posts.php">Posts</a></li>
            <li><a href="comments.php">Comments</a></li>
            <li><a href="cats.php">Categories</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div style="padding-top: 10px">
        <a href="add-new-post.php">Add new post</a>
    </div>
    <table>
        <tr>
            <td>List of posts</td>
            <td>Edit post</td> 
            <td>Delete post</td>
        </tr>
        <?php
        $get_posts = mysqli_query($db, "SELECT * FROM posts");
        while ($row = mysqli_fetch_assoc($get_posts)) {
            ?> 
            <tr>
                <td><?php echo $row['post_title'] ?></td>
                <td><a href="edit-post.php?post-id=<?php echo $row['id'] ?>">Edit
                <td><a href="actions/delete-post.php?post-id=<?php echo $row['id'] ?>" onclick="return confirm('Do you want to delete the post')">Delete</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>