<?php
	session_start();
	if($_SESSION['admin']){
	}
	else{
		header("location:index.php");
	}

	if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
	{
		$name = mysql_real_escape_string($_POST['name']);
		$price = mysql_real_escape_string($_POST['price']);
		$postage = mysql_real_escape_string($_POST['postage']);
		$introduction = mysql_real_escape_string($_POST['introduction']);
		$image = mysql_real_escape_string($_POST['image']);
		$datetime = $_POST['date'] . ' ' . $_POST['time'] . ':00';//插入时间方法
		$date_posted = mysql_real_escape_string($datetime);
		$date_edited = mysql_real_escape_string($datetime);

		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
		
		mysql_query("INSERT INTO product (name, price, postage, introduction, image, date_posted, date_edited) 
			VALUES ('$name','$price','$postage','$introduction','image','date_posted','date_edited')"); //SQL query
		header("location: admin.php");
	}
	else
	{
		header("location:admin.php"); //redirects back to hom
	}
?>