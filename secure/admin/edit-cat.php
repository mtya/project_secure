<?php
require_once 'actions/db.php';
require_once  'actions/conndb.php'; //new code
global $db;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit categories</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<div class="admin">
    <h2>Web Application Admin Center</h2>
    <div class="top-menu">
        <ul>
            <li><a href="index.php">Home Page</a></li>
            <li><a href="posts.php">Posts</a></li>
            <li><a href="comments.php">Comments</a></li>
            <li><a href="cats.php">Categories</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <?php
    $cat_id = $_GET['cat-id'];
    $get_cat_name = mysqli_query($db, "SELECT * FROM cats WHERE id=$cat_id");
    $cat_name = mysqli_fetch_assoc($get_cat_name);
    
	//require_once  'actions/connbd.php';
	/*$cat_id = $_GET['cat-id'];
	$ps =$pdo ->prepare("SELECT * FROM cats WHERE id= =?");
	$params =array($cat_id);
	$ps -> execute($params);
	$cat_name = $ps ->fetch();
	*/
	
	?>
    <div class="cat-setting">
        <form action="actions/edit-cat.php" method="post">
            <input type="hidden" name="cat-id" value="<?php echo $cat_id ?>">
            <input type="text" name="cat-name" value="<?php echo $cat_name['cat_name'] ?>" placeholder="New Category">
            <input type="submit" value="Save Changes">
        </form>
    </div>
</div>
</body>
</html>