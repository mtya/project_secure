<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Category</title>
</head>
<body>
<?php
/*require_once 'db.php';
global $db;
$cat_name = $_POST['cat-name'];
$cat_id = $_POST['cat-id'];
$update_cat = mysqli_query($db, "UPDATE cats SET cat_name='$cat_name' WHERE id=$cat_id");
if ($update_cat) {
    header('Location: ../cats.php');
} else {
    echo 'Error please try again !';
}
*/
require_once 'conndb.php';
global $db;
$cat_name = $_POST['cat-name'];
$cat_id = $_POST['cat-id'];
$ps =$pdo ->prepare("UPDATE cats SET cat_name= ? WHERE id=?");
$params = array($cat_name, $cat_id);
$ps -> execute($params);
if ($ps) {
    header('Location: ../cats.php');
} else {
    echo 'Error please try again !';
}




?>
</body>
</html>