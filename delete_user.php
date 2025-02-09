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
        
        echo"<div class='alert alert-warning' role='alert'>Warning: You sure?</div>";
        echo"<div class='d-flex justify-content-center gap-4 align-items-center'><a class='btn btn-danger' style='color:white; text-decoration:none;' href='./delete_user_db.php?id=$id'>Yes</a><a class='btn btn-success' style='color:white; text-decoration:none;' href='./index.php'>No, back</a></div>";
    

    ?>
</body>

</html>