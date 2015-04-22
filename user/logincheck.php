<?php
	session_start();
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);

	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("SELECT * from user WHERE username='$username'"); //Query the user table if there are matching rows equal to $username
	$exists = mysql_num_rows($query); //Checks if username exists
	$table_user = "";
	$table_password = "";
	if($exists > 0) //IF there are no returning rows or no existing username
	{
		while($row = mysql_fetch_assoc($query)) //display all rows from query
		{
			$table_user = $row['username']; // the first username row is passed on to $table_user, and so on until the query is finished
			$table_password = $row['password']; // the first password row is passed on to $table_user, and so on until the query is finished
		}
		if(($username == $table_user) && ($password == $table_password)) // checks if there are any matching fields
		{
				if($password == $table_password)
				{
					$_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
					header("location: ../index.php"); // redirects the user to the authenticated home page
				}
				
		}
		else
		{
			Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
		}

	}
	else
	{
		Print '<script>alert("Incorrect Username!");</script>'; //Prompts the user
		Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
	}
?>