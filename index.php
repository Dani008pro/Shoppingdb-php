<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <?php include("./bootstrap.php");?>
    <title>Document</title>
</head>
<body class="container vh-100 d-flex justify-content-center flex-column align-items-center" style=" background-color: #111827;">
    <table  class=" w-100 table table-striped table-hover table-bordered" >
        <thead>
            <tr style=" text-align: center; " class="">
                <th>ID</th>
                <th>Name</th>
                <th>LastName</th>
                <th>Phone</th>
                <th colspan="2">Modify</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $selectQuery='SELECT * FROM shoppingex_db.users';
                $link=mysqli_connect("localhost" , "root" , "" , "shoppingex_db");
                if(mysqli_connect_errno()){
                    exit("error".mysqli_connect_error());
                }
                $result=mysqli_query($link , $selectQuery);

                while($row=mysqli_fetch_array($result)){
                    $id=$row["id"];
                    $name=$row["name"];
                    $lastname=$row["lastname"];
                    $phone=$row["phone"];
                    echo"<tr>";
                    echo"<td>$id</td>";
                    echo"<td>$name</td>";
                    echo"<td>$lastname</td>";
                    echo"<td>$phone</td>";
                    echo"<td class='edit_tr' style='text-align: center;'><a href='./edit_user.php?id=$id' class='text-success  edit'>Edit</a></td>";
                    echo"<td class='delete_tr' style='text-align: center;'><a href='./delete_user.php?id=$id' class='text-danger delete'>Delete</a></td>";
                    echo"</tr>";
    

                }
            ?>
        </tbody>
    </table>

   <a class="btn btn-success" style="  color:black; text-decoration:none;" href="./new_user.php">New User</a>


    
</body>
</html>