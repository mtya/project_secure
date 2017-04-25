<?php

session_start();
/*require('auth.php');
if(Auth::isLogged()){
	// header('Location: ../index.php');
	
}
else{
	header("Location: ../index.php");
}*/

require_once 'db.php';
global $db;
if(isset($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
	extract($_POST);
	$username = addslashes($_POST['username']);
	$password =sha1(addslashes($_POST['password']));
	$check_admin = mysqli_query($db, "SELECT * FROM admin WHERE admin_username='$username' AND admin_password='$password'");
	
	/*if (mysqli_num_rows($check_admin)> 0){
		
		$_SESSION['Auth'] = array(
			'username' => $username,
			'password' => $password
		
		);
		//header('Location: ../index.php');
	}
	else{
		echo "Mauvaise identifiants";
	}*/
	
	
		
	if (mysqli_num_rows($check_admin) > 0) {
    session_start();
    $_SESSION['admin_logged_in'] = 1;
    header('Location: ../index.php');
	} else {
		echo 'Wrong username or password.';
	}

	
	
}


 


/*

require_once("conndb.php"); 
	$username =$_POST['username'];
	$password =$_POST['password'];
	$ps =$pdo ->prepare("SELECT * FROM admin WHERE admin_username= ? AND admin_password = ?");
	$params = array($username, $password);
	$ps -> execute($params);
	if($user=$ps->fetch()){
		session_start();
		 $_SESSION['admin_logged_in'] = 1;
    header('Location: ../index.php');
} else {
	
    echo 'Wrong username or password.';
	//header('Location: ../login.php');
}
*/
?>