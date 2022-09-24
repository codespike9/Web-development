<?php
include 'conn.php';
echo '<pre>'; print_r($_REQUEST);
$user=$_REQUEST['facility_name'];



$my_facility_add_query="INSERT INTO `facility`(`facility_id`, `facility_name`) VALUES (NULL,'$user');";
echo $my_facility_add_query;
$result_fac_add=mysqli_query($conn,$my_facility_add_query);
echo $result_fac_add;
header('Location: loginsuccess.php');
?>