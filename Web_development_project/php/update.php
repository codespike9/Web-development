<?php
include 'conn.php';
echo '<pre>'; print_r($_REQUEST);
$student_id=$_REQUEST['student_id'];
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
move_uploaded_file($photo_array['tmp_name'],"upload_images/$photone");

$photo_birth_array=$_FILES['image_birthcertificate'];
$photone_birth=time(). $photo_birth_array['name'] ; 
move_uploaded_file($photo_birth_array['tmp_name'],"upload_images\$photone_birth");

/*$my_query="UPDATE `students_details` SET `First_Name`='$firstName',`Last_Name`='$lastName',`Father_Name`='$fatherName',`Mother_Name`='$motherName',`Gender`='$gender',`Date_of_Birth`='$dob',`category_id`='$category',`Religion`='$religion',`E-Mail`='$email',`Phone Number`='$phonenumber',`Present Address`='$presentaddress',`Permanent Address`='$permanentaddress',`student_photo`='$photone',`student_birthcertificate`='$photone_birth' WHERE 'Student_id'=$student_id";
$result_up=mysqli_query($conn,$my_query);*/

echo $my_query="UPDATE `students_details` SET `First_Name`='$firstName',`Last_Name`='$lastName',`Father_Name`='$fatherName',`Mother_Name`='$motherName',`Gender`='$gender',`Date_of_Birth`='$dob',`category_id`='$category',`Religion`='$religion',`E-Mail`='$email',`Phone Number`='$phonenumber',`Present Address`='$presentaddress',`Permanent Address`='$permanentaddress',`student_photo`='$photone',`student_birthcertificate`='$photone_birth' WHERE `Student_id`='$student_id'";
$result=mysqli_query($conn,$my_query);



$del_query="DELETE FROM `student_facility` WHERE student_id='$student_id';";
$result=mysqli_query($conn,$del_query);


foreach($facilities as $fac_id)
{
    $sql_insert="INSERT INTO `student_facility` (`student_facility_id`, `student_id`, `facility_id`) VALUES (NULL, '$student_id', '$fac_id');";
    $Result_fac=mysqli_query($conn,$sql_insert);
}
header('Location: edit.php');