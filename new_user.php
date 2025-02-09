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
        echo "<form action='./new_user_db.php' class='d-flex justify-content-center flex-column gap-4'>";
        echo "    <input type='hidden' name='id' value='' >";
        echo "    <div>";
        echo "        <label for='name'>Name:</label>";
        echo "        <br>";
        echo "        <input placeholder='Name' type='text' name='name' id='name' value=''>";
        echo "    </div>";
        echo "    <div>";
        echo "        <label for='ln'>Lastname:</label>";
        echo "        <br>";
        echo "        <input placeholder='Last name' type='text' name='lname' id='ln' value=''>";
        echo "    </div>";
        echo "    <div>";
        echo "        <label for='tel'>Phone:</label>";
        echo "        <br>";
        echo "        <input placeholder='Phone' type='tel' name='phone' id='tel' value=''>";
        echo "    </div>";
        echo "    <button class='btn btn-warning' type='submit'>Save</button>";
        echo "    <a class='btn btn-warning' style='text-decoration:none; color:black;'  href='./index.php'>Cancel</a>";
        echo "</form>";
    ?>
</body>

</html>