<?php
include 'conn.php';
echo '<pre>'; print_r($_REQUEST);
$firstName= $_REQUEST['first_name'];
$lastName= $_REQUEST['last_name'];
$motherName= $_REQUEST['mother_name'];
$fatherName= $_REQUEST['father_name'];
$gender= $_REQUEST['gender'];
$dob= $_REQUEST['dateofbirth'];
$category= $_REQUEST['Category'];
$religion= $_REQUEST['getReligion'];
$email= $_REQUEST['getEmail'];
$phonenumber= $_REQUEST['getPhnNum'];
$presentaddress= $_REQUEST['getpre'];
$permanentaddress= $_REQUEST['getAddress'];
$facilities=$_REQUEST['facility'];

$photo_array=$_FILES['image'];
$photone=time(). $photo_array['name'] ; 
move_uploaded_file($photo_array['tmp_name'],"upload_images\$photone");

$photo_birth_array=$_FILES['image_birthcertificate'];
$photone_birth=time(). $photo_birth_array['name'] ; 
move_uploaded_file($photo_birth_array['tmp_name'],"upload_images\$photone_birth");

$my_query="INSERT INTO `students_details`(`Student_id`, `First_Name`, `Last_Name`, `Father_Name`, `Mother_Name`, `Gender`, `Date_of_Birth`, `category_id`, `Religion`, `E-Mail`, `Phone Number`, `Present Address`, `Permanent Address`,student_photo,student_birthcertificate) VALUES (NULL,'$firstName','$lastName','$fatherName'
,'$motherName','$gender','$dob','$category','$religion','$email','$phonenumber','$presentaddress','$permanentaddress','$photone','$photone_birth');";
$result=mysqli_query($conn,$my_query);
echo $result;

$student_id=mysqli_insert_id($conn);
foreach($facilities as $f_id)
{
    $sql_insert="INSERT INTO `student_facility`(`student_facility_id`, `facility_id`, `student_id`) VALUES (NULL,'$f_id','$student_id');";
    $Result_fac=mysqli_query($conn,$sql_insert);
}
header('Location: http://localhost/silicon_internship/forms1_test.php');