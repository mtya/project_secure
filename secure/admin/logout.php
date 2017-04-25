<?php
/*session_start();
unset($_SESSION['admin_logged_in']);
header('Location: login.php');
*/
session_start();
$_SESSION = array();
session_destroy();
header('Location: login.php');
?>