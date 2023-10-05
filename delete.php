<?php
include "configdb.php";
$id = $_GET['id'];
$sql = "delete from crud where id= $id";
$result=mysqli_query($conn,$sql);
if($result){
    header ('location: display.php');
}
else{
    die (mysqli_error($conn));
}


?>