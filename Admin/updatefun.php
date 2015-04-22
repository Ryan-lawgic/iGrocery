<?php
    mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
    mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
    
    session_start();
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $postage = $_POST['postage'];
    $introduction = $_POST['introduction'];


    
	$time = strftime("%d %B, %Y %X");//date
    

    mysql_query("UPDATE product SET name='$name', price='$price',postage='$postage', introduction='$introduction', date_edited='$time' WHERE id='$id'") ;

    header("location:admin.php");
?>

