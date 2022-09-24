<?php
include 'conn.php';
$id = $_GET['id'];
$my_query="delete from facility where facility_id='$id';";
$result=mysqli_query($conn,$my_query);
header('Location: loginsuccess.php');
?>