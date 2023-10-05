<?php
include "configdb.php";
$sql = "select * from crud ";
$result  = mysqli_query($conn,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .btn-add {
            display: block;
            margin: 20px auto;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }
        .table-container {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn-delete {
            background-color: #ff5c5c;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-delete:hover {
            background-color: #ff3333;
        }
        .btn-update {
            background-color: green;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Student Management</h1>
    </div>
    <div class="container">
        <a class="btn-add" href="student.php">Add Student</a>
        <div class="table-container">
            <table>
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $password = $row['password'];
                    
                            echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$password.'</td>

                        <td>
                          <button class="btn-update"><a href="update.php?id='.$id.'">Update</a></button>
                          <button class="btn-delete"> <a href="delete.php?id='.$id.'">Delete</a></button> </td>
                        
                    </tr>
                    ';
                    
                        }
                    }
                   ?>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>



