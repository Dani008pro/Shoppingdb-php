<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <?php include("./bootstrap.php"); ?>
    <title>Document</title>
</head>

<body class="d-flex justify-content-center flex-column align-items-center " style="height: 100vh; background-color: #111827;">
    <?php
        $id=$_GET["id"];
        $selectQuery="SELECT * FROM users WHERE id='$id'";
        $link=mysqli_connect("localhost","root","","shoppingex_db");
        $result=mysqli_query($link,$selectQuery);
        $row=mysqli_fetch_array($result);

        $name=$row["name"];
        $lname=$row["lastname"];
        $phone=$row["phone"];
        echo "<form action='./edit_user_db.php' class='d-flex justify-content-center flex-column gap-4'>";
        echo "    <input type='hidden' name='id' value='$id' >";
        echo "    <div>";
        echo "        <label for='name'>Name:</label>";
        echo "        <br>";
        echo "        <input placeholder='Name' type='text' name='name' id='name' value='$name'>";
        echo "    </div>";
        echo "    <div>";
        echo "        <label for='ln'>Lastname:</label>";
        echo "        <br>";
        echo "        <input placeholder='Last name' type='text' name='lname' id='ln' value='$lname'>";
        echo "    </div>";
        echo "    <div>";
        echo "        <label for='tel'>Phone:</label>";
        echo "        <br>";
        echo "        <input placeholder='Phone' type='tel' name='phone' id='tel' value='$phone'>";
        echo "    </div>";
        echo "    <button class='btn btn-warning' type='submit'>Update</button>";
        echo "    <button class='btn btn-warning' type='button'><a style='text-decoration:none; color:black;'  href='./index.php'>Cancel</a></button>";
        echo "</form>";
    ?>
</body>

</html>