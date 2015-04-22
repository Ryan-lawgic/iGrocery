<?php
	session_start();
	if($_SESSION['admin'])
	{
		header("location:admin.php");
	}
?>

<html>
<head>
	<title>Administration</title>
</head>
<body>

<h2>Administration:</h2>
<form method="post" action="checkadmin.php">
	<p>Account:
	<input type="text" id="account" value="" name="account" onfocus="Change(this.id,'grey');" onblur="Change(this.id,'white');">
	</p>
	<p>Password:
	<input type="password" id="password" value=""name="password" onfocus="Change(this.id,'grey');" onblur="Change(this.id,'white');">
	</p>
	<input type="submit" id="submit" value="login">
	</div>
</form>

</body>
</html>
