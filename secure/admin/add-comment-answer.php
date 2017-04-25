<?php
require_once 'actions/db.php';
global $db;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reply to comment</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<div class="admin">
    <h2>Application Admin Center</h2>
    <div class="top-menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="posts.php">Posts</a></li>
            <li><a href="comments.php">Comments</a></li>
            <li><a href="cats.php">Categories</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="comment-item">
        <?php
        $comment_id = $_GET['comment-id'];
        $get_comment = mysqli_query($db, "SELECT * FROM comments WHERE id=$comment_id");
        $comment = mysqli_fetch_assoc($get_comment);
        ?>
        <div class="comment-username"><?php echo $comment['user_name'] ?></div>
        <div class="comment-post-name">
            <?php
            $comment_post_id = $comment['post_id'];
            $get_posts = mysqli_query($db, "SELECT * FROM posts WHERE id=$comment_post_id");
            $post = mysqli_fetch_assoc($get_posts);
            echo $post['post_title'];
            ?>
        </div>
        <div class="comment"><?php echo $comment['comment'] ?></div>
        <div class="comment-setting">
            <form action="actions/add-comment-answer.php" method="post">
                <input type="hidden" name="comment-id" value="<?php echo $comment_id ?>">
                <textarea name="comment-answer" placeholder="Reply to this comment" cols="30" rows="10"></textarea><br>
                <input type="submit" value="Send">
                <a href="comments.php">
                    <button>Back</button>
                </a>
            </form>
        </div>
    </div>
</div>
</body>
</html>