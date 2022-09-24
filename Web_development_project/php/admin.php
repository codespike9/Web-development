<?php
session_start();

include 'conn.php';
$get=$_REQUEST['Uname'];
$pass=$_REQUEST['Pass'];
$myquery="select user_name from admin_details where user_name='$get' and password='$pass' and status='Active';";
$result=mysqli_query($conn,$myquery);
$rows=mysqli_num_rows($result);

if($rows==1)
{
    $result_row=mysqli_fetch_array($result);
    $_SESSION['user'] = $result_row['user_name'];
    $_SESSION['logged_id'] = true;
    
    header('Location: loginsuccess.php');
    
} else {
    session_unset();
    header('Location: ../login.php');
}
?>