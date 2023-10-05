<?php
$host="localhost";
// $port=3306;
$user="root";
$password="";
$database="php";

$conn=new mysqli($host,$user,$password,$database);

if(!$conn){
    die(mysqli_error($conn));
}

    // echo "connection build succesfully";

?>