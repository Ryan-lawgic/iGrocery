<?php
	session_start();
	$username = $_SESSION['username'];
	}
	else{
		header("location:user.php");
	}
mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
$comment = mysql_real_escape_string($_POST['comment']);
mysql_query("INSERT INTO user (comment) VALUES ('$comment') where username='$username'"); //SQL query
		
		header("location: index.php");