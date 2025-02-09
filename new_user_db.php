<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./bootstrap.php"); ?>
    <title>Document</title>
</head>

<body class="d-flex justify-content-center  align-items-center" style="height: 100vh; background-color: #111827;">
    <?php

        
        $name = $_GET["name"];
        $lname = $_GET["lname"];
        $phone = $_GET["phone"];

        $selectQuery = "INSERT INTO users(`name`, `lastname`, `phone`) VALUES('$name','$lname','$phone')";
        $link = mysqli_connect("localhost", "root", "", "shoppingex_db");

        $result = mysqli_query($link, $selectQuery);

        echo "<a class='btn btn-success' style='color:white; text-decoration:none;' href='./index.php'>Insert , Successfuly Click to view</a>"


        ?>
</body>

</html>