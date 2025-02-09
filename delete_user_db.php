<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./bootstrap.php");?>
    <title>Document</title>
</head>
<body class="d-flex justify-content-center  align-items-center" style="height: 100vh; background-color: #111827;">
<?php
    
    $id=$_GET["id"];
  
   
    $selectQuery="DELETE FROM `users` WHERE id='$id'";
    $link=mysqli_connect("localhost" , "root" , "" , "shoppingex_db");

    $result=mysqli_query($link , $selectQuery);
    
    echo "<a class='btn btn-success' style='color:white; text-decoration:none;' href='./index.php'>Delete , Successfuly Click to view</a>"
 

?>
</body>
</html>
