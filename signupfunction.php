<?php
	session_start();
	$username = $_SESSION['username'];
	}
	else{
		header("location:user.php");
	}
mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$gender = mysql_real_escape_string($_POST['gender']);
$year = mysql_real_escape_string($_POST['year']);
$occupation = mysql_real_escape_string($_POST['occupation']);
$AD = mysql_real_escape_string($_POST['AD']);
mysql_query("INSERT INTO user (username, password, gender, year, AD ) VALUES ('$username','$password', '$gender', '$year', '$AD') where username='$username'"); //SQL query
		
		header("location: index.php");