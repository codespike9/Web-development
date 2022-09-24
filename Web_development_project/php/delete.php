<?php 
     include 'conn.php';
     $student_id =$_REQUEST['id'];
     $my_query="delete from students_details where `Student_id`='$student_id';";
     $result=mysqli_query($conn,$my_query);
     header('Location: edit.php');
?>