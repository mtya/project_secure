<?php
class Auth{
	static function isLogged(){
		if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['username']) && isset($_SESSION['Auth']['password'])){
			extract($_SESSION['Auth']);
			require_once 'db.php';
			$password =sha1(addslashes($_POST['password']));
			$check_admin = mysqli_query($db, "SELECT * FROM admin WHERE admin_username='$username' AND admin_password='$password'");
	
			if (mysqli_num_rows($check_admin)> 0){
				return true;
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}
}



?>