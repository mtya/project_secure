<?php
require_once 'admin/actions/db.php';

global $db;
$post_id = $_GET['post-id'];
$get_post = mysqli_query($db, "SELECT * FROM posts WHERE id=$post_id");  //.intval($_post['post_']));
$post = mysqli_fetch_assoc($get_post);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $post['post_title'] ?></title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<div id="container">
    <h1><a href="index.php"><?php echo constant('MY_BLOG_NAME') ?></a></h1>
    <div class="content">

        <div class="post">
            <div class="post-title"><?php echo $post['post_title'] ?></div>
            <div class="post-cat">Category : <?php
                $post_cat = $post['post_cat'];
                $get_cat_name = mysqli_query($db, "SELECT * FROM cats WHERE id=$post_cat"); //.intval($_post['post_cat']));
                $get_name = mysqli_fetch_assoc($get_cat_name);
                echo $get_name['cat_name'];
                ?></div>
            <div class="post-text"><?php echo $post['post_text'] ?></div>
        </div>

    </div>
    <div class="sidebar">
        <h3>Categories</h3>
        <ul>
            <?php
            $get_cats = mysqli_query($db, "SELECT * FROM cats");
            while ($row = mysqli_fetch_assoc($get_cats)) {
                ?>
                <li><?php echo $row['cat_name'] ?></li>
                <?php
            }
            ?>
        </ul>
        <h3>Recent Posts</h3>
        <ul>
            <?php
            $get_three_posts = mysqli_query($db, "SELECT * FROM posts ORDER BY id DESC LIMIT 3");
            while ($row = mysqli_fetch_assoc($get_three_posts)) {
                ?>
                <li><a href="post.php?post-id=<?php echo $row['id'] ?>"><?php echo $row['post_title'] ?></a></li>
                <?php
            }
            ?>
        </ul>
    </div>
    <div class="comments">
        <div class="show-comments">
            <?php
            $get_comments = mysqli_query($db, "SELECT * FROM comments WHERE post_id=$post_id AND is_confirm=1");
            while ($row = mysqli_fetch_assoc($get_comments)) {
                ?>
                <div class="comment-item">
                    <div class="comment-username"><?php echo $row['user_name'] ?></div>
                    <div class="comment"><?php echo $row['comment'] ?></div>
                    <?php
                    if ($row['answer'] != null) {
                        ?>
                            <div class="comment-answer"><span style="font-weight: bold">Admin Respond: </span><?php echo $row['answer'] ?></div>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
            if (mysqli_num_rows($get_comments) == 0) {
                ?>
                <div style="text-align: center;font-family: tahoma;margin-top: 10px">Still No comment for this post</div>
                <?php
            }
            ?>
        </div>
        <div class="add-comment">
            <form action="actions/add-new-comment.php" method="post">
                <input type="text" name="username" required placeholder="Name">
                <input type="email" name="email" required placeholder="Email"><br>
                <textarea name="comment" required cols="30" rows="10" placeholder="Your comment"></textarea><br>
                <input type="hidden" name="post-id" value="<?php echo $post_id ?>">
                <input type="submit" value="Add comment">
            </form>
        </div>
    </div>
</body>
</html>