<html>
<head>
	<title>Administration</title>
</head>

	<?php
	session_start(); //starts the session
	if($_SESSION['admin']){ //checks if admin is logged in
	}
	else{
		header("location:index.php"); // redirects if admin is not logged in
	}
	$admin = $_SESSION['admin']; //assigns admin value
	?>

<body>

	<p>this is administration</p>

	<!--这里写更新产品-->
	Update more product:
	<form action="create.php" method="POST">
		Product Name: <input type="text" name="name"/><br/>
		Product Price: <input type="text" name="price"/><br/>
		Product Postage: <input type="text" name="postage"/><br/>
		Product Introduction: <input type="text" name="introduction"/><br/>
		Product Image: <input type="text" name="image"/></br>
		<!--Product Image: <input type="text" name="details"/><br/>        
		PHP file upload -->
		<input type="submit" value="update"/>
	</form>

	<table border="1px" width="100%">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Price</th>
			<th>Postage</th>
			<th>Introduction</th>
			<th>Image</th>
			<th>Update</th>
			<th>Delete</th>
			<th>Date Posted</th>
			<th>Date Edited</th>
		</tr>
	<?php
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("first_db") or die("Cannot connect to database"); //connect to database
		$query = mysql_query("Select * from product"); // SQL Query				while($row = mysql_fetch_array($query))
		while($row = mysql_fetch_array($query))
		{
			Print "<tr>";
			Print '<td align="center">'. $row['id'] . "</td>";
			Print '<td align="center">'. $row['name'] . "</td>";
			Print '<td align="center">'. $row['price'] . "</td>";
			Print '<td align="center">'. $row['postage'] . "</td>";
			Print '<td align="center">'. $row['introduction'] . "</td>";
			Print '<td align="center">'. $row['image'] . "</td>";
			//image solution is not found yet
			Print '<td align="center"><a href="update.php?id='. $row['id'] .'">Update</a> </td>';
			Print '<td align="center"><a href="delete.php?id='.$row['id'].'">Delete</a> </td>';
			Print '<td align="center">'. $row['date_posted']. "</td>";
			Print '<td align="center">'. $row['date_edited']. "</td>";
			Print "</tr>";
		}
	?>

	</table>
</body>
</html>