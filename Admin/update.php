

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
?>


<form action="updatefun.php" method="POST">
    <input type="text" name="name">
    
    <input type="submit" value="update">
</form>


</body>
</html>


