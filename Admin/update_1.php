<html>
	<head>
		<title>Update product information</title>
	</head>
	<?php
	session_start(); //starts the session
	if($_SESSION['admin']){ //checks if admin is logged in
	}
	else{
		header("location:index.php"); // redirects if admin is not logged in
	}
	$admin = $_SESSION['admin']; //assigns admin value
	$id_exists = false;
	?>
	<body>
		<h2>Home Page</h2>
		<p>Hello <?php Print "$admin"?>!</p> <!--Displays admin's name-->
		<!-- <a href="logout.php">Click here to logout</a><br/><br/>
		-->
		<a href="admin.php">Return</a>
		<h2 align="center">Currently Selected</h2>

			<?php
				if(!empty($_GET['id']))
				{
					$id = $_GET['id'];
					$_SESSION['id'] = $id;
					$id_exists = true;
					mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
					mysql_select_db("first_db") or die("Cannot connect to database"); //connect to database
					$query = mysql_query("Select * from product Where id='$id'"); // SQL Query
					$count = mysql_num_rows($query);
					if($count > 0)
					{
						
						
						
					}
					else
					{
						$id_exists = false;
					}
				}
				if($id_exists)
				{
					while($row = mysql_fetch_array($query))
						{
					Print '<form action="update.php" method="POST">';
						Print '	Product Name: <input type="text" name="name" value="' . $row['name'] . '"/><br>';
						Print ' Product Price: <input type="text" name="price" value="' . $row['price'] . '"/><br>';
						Print ' Product Postage: <input type="text" name="postage" value="' . $row['postage'] . '"/><br>';
						Print ' Product Introduction: <input type="text" name="introduction" value="' . $row['introduction'] . '"/><br>';
						Print ' Product Image: <input type="text" name="image" value="' . $row['image'] . '"/><br>';
						Print '	<input type="submit" value="Update Product"/></form>';
						}
				}
				else
				{
				Print '<h2 align="center">There is no data to be updated.</h2>';
				}

			?>
	</body>
</html>


<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
		$name = mysql_real_escape_string($_POST['name']);
		//$price = mysql_real_escape_string($_POST['price']);
		//$postage = mysql_real_escape_string($_POST['postage']);
		//$introduction = mysql_real_escape_string($_POST['introduction']);
		//$image = mysql_real_escape_string($_POST['image']);
		//$id = $_SESSION['id'];

		
		mysql_query("UPDATE product SET name='$name', WHERE id='$id'") ;
		//, price='$price', postage='$postage', introduction='$introduction', image='$image'

		header("location: admin.php");
	}
?>

