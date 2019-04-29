
<html>
<head>
</head>
<body>

<form action="" method="post">
	<input type="text" name="uname">
	<input type="password" name="passw">
	<button type="submit" name="loginbut">Login</button>
</form>

</body>
</html>

<?php

if (isset($_POST['loginbut'])) {
	if($user->authcheck($_POST['uname'], $_POST['passw'])) {
		echo 'login success';
	}
	else {
		echo 'login failed';
	}
}

?>