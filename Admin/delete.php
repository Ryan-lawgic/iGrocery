<?php
	session_start(); //starts the session
	if($_SESSION['admin']){ //checks if admin is logged in
	}
	else{
		header("location:admin.php"); // redirects if admin is not logged in
	}

	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
		$id = $_GET['id'];
		mysql_query("DELETE FROM product WHERE id='$id'");
		header("location: admin.php");
	}
?>