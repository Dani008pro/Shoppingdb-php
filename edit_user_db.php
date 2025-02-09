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
    $name=$_GET["name"];
    $lname=$_GET["lname"];
    $phone=$_GET["phone"];
   
    $selectQuery="UPDATE `users` SET `id`='$id',`name`='$name',`lastname`='$lname',`phone`='$phone' WHERE id='$id'";
    $link=mysqli_connect("localhost" , "root" , "" , "shoppingex_db");

    $result=mysqli_query($link , $selectQuery);
    
    echo "<button class='btn btn-success'><a style='color:white; text-decoration:none;' href='./index.php'>Update Successfuly , Click to view</a></button>"


?>
</body>
</html>
