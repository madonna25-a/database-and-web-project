<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Pet shop</title>
</head>
<body>
<h1>Users Table</h1>
<button class="add">Add User</button>
<table class="table">
    <tr>
        <th>User ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Actions</th>
    </tr>
        <?php
        $server="localhost";$user="root";$password="2004";$database="petShop";
        $connection=new mysqli($server,$user,$password,$database);
        $sql="SELECT * FROM Users";
        $result=$connection->query($sql);
        if($result&&$result->num_rows>0){
            while($row=$result->fetch_assoc()){echo"
                <tr>
                    <td>{$row['ID']}</td>
                    <td>{$row['FirstName']}</td>
                    <td>{$row['LastName']}</td>
                    <td>{$row['Email']}</td>
                    <td>{$row['Password']}</td>
                    <td>
                        <button class='edit' id={$row['ID']}'>EDIT</button>
                        <button class='delete' id={$row['ID']}'>DELETE</button>
                    </td>
                </tr>
                ";
            }
        } 
        ?>
         </table><br>


<div>
    <h1>Pets Table</h1>
    <button class='add' href='Project/add.php?'>Add Pet</button>
<table class="table">
    <tr>
        <th>Pet ID</th>
        <th>Specifies</th>
        <th>Gender</th>
        <th>Available</th>
        <th>Price</th>
        <th>Delete?</th>
    </tr>
        <?php
        $server="localhost";$user="root";$password="2004";$database="petShop";
        $connection=new mysqli($server,$user,$password,$database);
        $sql= "SELECT * FROM Pets";
        $result= $connection->query($sql);
        if ($result&&$result->num_rows>0){
            while($row=$result->fetch_assoc()){echo"
                <tr>
                    <td>{$row['PetID']}</td>
                    <td>{$row['Specifies']}</td>
                    <td>{$row['Gender']}</td>
                    <td>{$row['Available']}</td>
                    <td>{$row['Price']}</td>
                    <td>
                        <button class='delete' href='Project/delete.php?id={$row['PetID']}'>DELETE</button>
                    </td>
                </tr>
                ";
            }
        } 
        ?></table><br>

<h1>Orders Table</h1>
<table class="table">
    <tr>
    <th>ID</th>
    <th>Pet ID</th>
    <th>Price</th>
    <th>User ID</th>
    <th>Quantity</th>
    </tr>
        <?php
        $server="localhost";$user="root";$password="2004";$database="petShop";
        $connection=new mysqli($server,$user,$password,$database);
        $sql= "SELECT * FROM Orders";
        $result=$connection->query($sql);
        if($result&& $result->num_rows>0){
            while($row=$result->fetch_assoc()){echo"
                <tr>
                    <td>{$row['OrderID']}</td>
                    <td>{$row['Quantity']}</td>
                    <td>{$row['Price']}</td>
                    <td>{$row['UserID']}</td>
                    <td>{$row['PetID']}</td>
                </tr>";}} 
        ?></table><br>
<script src="script.js"></script>
</body>
</html>
