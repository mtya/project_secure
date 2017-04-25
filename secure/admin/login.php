<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Loging Page</title>
	
    <link rel="stylesheet" href="styles.css" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script type="text/javascript" src="actions/jquery/jquery-1.9.1.js"></script>
</head>
<body>
<div class="login">
    <form action="actions/do-login.php" id="login_message" method="post">
        <input type="text" name="username"  required placeholder="User name"><br>
        <input type="password" name="password"  required placeholder="Password"><br>
        <input type="submit" name="login"  value="Admin Login">
		<br><br>
		<!--<span class="displaymessage">Message goes here</span>-->
    </form>
</div>
</body>
</html>