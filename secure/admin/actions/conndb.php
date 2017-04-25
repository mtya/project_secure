
<?php


try{
	$conn = 'mysql: host=localhost; dbname=blog_system';
	$pdo = new PDO($conn, 'root', '123');
}
catch (PDOException $e){
	$msg = 'ERREUR PDO in '. $e->getMessage();
}
?>