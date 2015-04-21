<html>
<head>
    <title></title>
</head>
<body>
update

<?php
    session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
    mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
    mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
    mysql_select_db("first_db");

    $result = mysql_query("SELECT * FROM Product where id='$id' ");
?>


<form action="updatefun.php" method="POST">
    Name:<input type="text" name="name"><br>
    Price:<input type="text" name="price"><br>
    Postage:<input type="text" name="postage"><br>
    Introduction:<br>
    <textarea name="introduction" cols="90" rows="25">
        <?php
            while($row = mysql_fetch_array($result))
                {
                echo $row['introduction'];
                }
        ?>
    </textarea><br>
    
    <input type="submit" value="update">
</form>


</body>
</html>
