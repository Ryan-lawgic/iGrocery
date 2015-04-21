<html>
<head>
	<title>user</title>
</head>
</head>
<body>

<?php
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("first_db") or die("Cannot connect to database"); //connect to database
		$query = mysql_query("Select * from product"); // SQL Query				while($row = mysql_fetch_array($query))
		while($row = mysql_fetch_array($query))
		{
			Print "<tr>";
			Print '<td align="center">'. $row['comment'] . "</td>";
			Print '<td align="center">'. $row['username'] . "</td>";
			Print '<td align="center">'. $row['password'] . "</td>";
			Print '<td align="center">'. $row['gender'] . "</td>";
			Print '<td align="center">'. $row['year'] . "</td>";
			Print '<td align="center">'. $row['occupation'] . "</td>";
			Print '<td align="center">'. $row['AD'] . "</td>";
			Print "</tr>";
		}
	?>
</body>
</html>