<?php
    mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
    mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
    
    session_start();
    $name = $_POST['name'];
    $id = $_SESSION['id'];

    mysql_query("UPDATE product SET name='$name' WHERE id='$id'") ;
?>

