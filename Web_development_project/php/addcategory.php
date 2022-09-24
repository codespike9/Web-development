<?php
include 'conn.php';
echo '<pre>'; print_r($_REQUEST);
$user1=$_REQUEST['category_name'];


echo $my_category_add_query="INSERT INTO `category_master`(`category_id`, `category_name`) VALUES (NULL,'$user1');";
$result_cat_add=mysqli_query($conn,$my_category_add_query);
header('Location: loginsuccess.php');
?>