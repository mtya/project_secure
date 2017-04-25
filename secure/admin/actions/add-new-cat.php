<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding new categorie</title>
</head>
<body>

<?php
/*
require_once 'db.php';
global $db;
$cat_name = $_POST['cat-name'];
$add_cat = mysqli_query($db, "INSERT INTO cats (cat_name) VALUES ('$cat_name')");
if ($add_cat) {
    header('Location: ../cats.php');
} else {
    echo 'Error please try againt';
}
*/
	require_once 'conndb.php';
	global $db;
	$cat_name =htmlspecialchars($_POST['cat-name']);
	$ps =$pdo ->prepare("INSERT INTO cats (cat_name) VALUES (?)");
	$params = array($cat_name);
	$ps -> execute($params);
	if ($ps) {
		header('Location: ../cats.php');
	} else {
		echo 'Error please try againt';
	}

?>
</body>
</html>