<?php
	session_start();
	if($_SESSION['admin']){
	}
	else{
		header("location:index.php");
	}

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
		$name = mysql_real_escape_string($_POST['name']);
		$price = mysql_real_escape_string($_POST['price']);
		$postage = mysql_real_escape_string($_POST['postage']);
		$introduction = mysql_real_escape_string($_POST['introduction']);
		$image = mysql_real_escape_string($_POST['image']);
		$id = $_SESSION['id'];
		//$time = now();
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database

		mysql_query("UPDATE product SET name='$name', price='$price', postage='$postage', introduction='$introduction', image='$image', WHERE id='$id'") ;

		header("location: admin.php");
	}
?>