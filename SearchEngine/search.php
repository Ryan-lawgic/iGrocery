<!doctype html>
<html>
<head>
<title>Simple PHP Search Engine - phphunger.com</title>
</head>
<body>
<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    mysql_select_db("first_db") or die(mysql_error());
    $query = $_GET['query']; 
    $min_length = 3;
  if(strlen($query) >= $min_length)
  { 
        $query = htmlspecialchars($query); 
        $query = mysql_real_escape_string($query);  
  echo "<table border='0' width='300' align='center' cellpadding='1' cellspacing='1'>";
  echo "<tr><h3>You have searched for $query...Please find the details of $query...</h3></tr>";
  echo "<tr align='center' bgcolor='#03acfa' > <td height='35px' width='150px'><b>Name</b></td> <td><b>introduction</b></td> <td><b>price</b></td></tr>";     
        $result = mysql_query("SELECT * FROM product WHERE (`name` LIKE '%".$query."%') OR (`introduction` LIKE '%".$query."%') OR (`price` LIKE '%".$query."%')") or die(mysql_error()); 
        if(mysql_num_rows($result) > 0)
  {
            while($results = mysql_fetch_array($result))
   { 
                echo "<tr align='center' bgcolor='#93dafb'><td height='25px'>".$results['name']."</td> <td>".$results['introduction']."</td><td>".$results['price']."</td></tr>" ;
            }
           
        }
        else{ 
            echo "<tr align='center' bgcolor='#fdee03'><td colspan='2' height='25px'>Sorry..No results for $query</td><tr>"; 
   echo "</table>";  
        }   
    }
    else{ 
        echo "Your search keyword contains letters only ".$min_length;
    }
?>
</body>
</html>