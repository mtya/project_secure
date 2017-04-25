<?php
require_once 'actions/db.php';
global $db;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<div class="admin">
    <h2>Web Application Admin center</h2>
    <div class="top-menu">
        <ul>
            <li><a href="index.php">Home-Page</a></li>
             <li><a href="posts.php">Posts</a></li>
             <li><a href="comments.php">Comments</a></li>
             <li><a href="cats.php">Categories</a></li>
             <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="setting">
        <form action="actions/add-new-cat.php" method="post">
            <input type="text" name="cat-name" required placeholder="Category name">
            <input type="submit" value="Add New Category">
        </form>
    </div>
    <table>
        <tr>
            <td>List of Categories</td>
            <td>Edit Category</td>
            <td>Delete Category</td>
        </tr>
        <?php
        $get_gats = mysqli_query($db, "SELECT * FROM cats");
        while ($row = mysqli_fetch_assoc($get_gats)) {
            ?>
           <tr>
               <td><?php echo $row['cat_name'] ?></td>
               <td><a href="edit-cat.php?cat-id=<?php echo $row['id'] ?>">Edit</a></td>
               <td><a href="actions/cat-delete.php?cat-id=<?php echo $row['id'] ?>" onclick="return confirm('Do you want to delete this category')">Delete</a></td>
           </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>