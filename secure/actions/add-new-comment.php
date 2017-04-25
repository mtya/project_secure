<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding comment</title>
</head>
<body>
<?php
/*
	function xss_test($data){
	
	$data = trim($data);
	$data = stripcslashes($data);
	return $data;/*
}
 $username = xss_test( $_POST['username']);
 $email = xss_test($_POST['email']);
 $comment = xss_test($_POST['comment']);
 $post_id = xss_test($_POST['post-id']);
 $insert_comment = mysqli_query($db, "INSERT INTO comments (user_name,user_email,comment,post_id) VALUES ('$username','$email','$comment',$post_id)");
if ($insert_comment) {
    echo 'Your comment added after Admin confirmation it will be visible.' . '<br>';
    echo '<a href="../post.php?post-id=' . $post_id . '">Back</a>';
} else {
    echo 'Error please try again';
}
*/
?>

<?php

require_once '../admin/actions/db.php';
global $db;
$username =htmlspecialchars($_POST['username']);
$email = $_POST['email'];
if(isset($_POST['comment'])){
	$comment = htmlspecialchars($_POST['comment']);
	echo $comment.'<br/>';
}
$post_id = $_POST['post-id'];
$insert_comment = mysqli_query($db, "INSERT INTO comments (user_name,user_email,comment,post_id) VALUES ('$username','$email','$comment',$post_id)");
if ($insert_comment) {
    echo 'Your comment added after Admin confirmation it will be visible.' . '<br>';
    echo '<a href="../post.php?post-id=' . $post_id . '">Back</a>';
} else {
    echo 'Error please try again';
}
?>
</body>
</html>