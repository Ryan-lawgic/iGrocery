<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// some code

if($_POST){
    try{
  
        //write query
        //in this case, it seemed like we have so many fields to pass and
        //its kinda better if we'll label them and not use question marks
        //like what we used here
        $query = "update product
                    set name = :name
                    where id = :id";
  
        //prepare query for excecution
        $stmt = $con->prepare($query);
  
        //bind the parameters
        $stmt->bindParam(':name', $_POST['name']);
        //$stmt->bindParam(':lastname', $_POST['lastname']);
        //$stmt->bindParam(':username', $_POST['username']);
        //$stmt->bindParam(':password', $_POST['password']);
        //$stmt->bindParam(':id', $_POST['id']);
  
        // Execute the query
        if($stmt->execute()){
            echo "Record was updated.";
        }else{
            die('Unable to update record.');
        }
  
    }catch(PDOException $exception){ //to handle error
        echo "Error: " . $exception->getMessage();
    }
}
?>