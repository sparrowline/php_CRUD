<?php
include "configdb.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO crud (name, email, password) VALUES ('$name', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location: display.php');
    } else {
        die(mysqli_error($conn));
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #ffffff;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 300px;
            height: 300px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .container h2 {
            margin-bottom: 20px;
            color: #007bff;
        }
        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .form-group label {
            display: none;
        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 70%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 50%;
            text-align: center;
            margin: 5px;
        }
        .form-group input[type="text"]::placeholder,
        .form-group input[type="email"]::placeholder,
        .form-group input[type="password"]::placeholder {
            text-align: center;
        }
        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Registration</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Register" name="submit">
            </div>
        </form>
    </div>
</body>
</html>
