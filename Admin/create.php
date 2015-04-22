<?php
	session_start();
	if($_SESSION['admin']){
	}
	else{
		header("location:index.php");
	}

	
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
		$name = mysql_real_escape_string($_POST['name']);
		$price = mysql_real_escape_string($_POST['price']);
		$postage = mysql_real_escape_string($_POST['postage']);
		$introduction = mysql_real_escape_string($_POST['introduction']);
		$image = mysql_real_escape_string($_POST['image']);
		$date =

		
		mysql_query("INSERT INTO product (name, price, postage, introduction, image, date_edited) VALUES ('$name','$price','$postage','$introduction','$image','$date')"); //SQL query
		
		header("location: admin.php");
	
	
?>