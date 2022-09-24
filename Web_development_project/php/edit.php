
<!doctype html>
<?php 
session_start();
?>
<html lang="en">
<html>
<head>
  <title> </title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins">
          <link rel="stylesheet" href="wave.css"/>
          
          <style>
            body {
              margin: auto;
    font-family: 'Poppins', BlinkMacSystemFont,
    sans-serif;
    overflow: auto;
    background: linear-gradient(
    315deg,
    rgba(101, 0, 94, 1) 3%,
    rgba(60, 132, 206, 1) 38%,
    rgba(48, 238, 226, 1) 68%,
    rgba(255, 25, 25, 1) 98%
    );
    animation: gradient 15s ease infinite;
    background-size: 400% 400%;
    background-attachment: fixed;
            }
          </style>
           <style>
            .material-symbols-outlined {
              font-variation-settings:
              'FILL' 100,
              'wght' 400,
              'GRAD' 0,
              'opsz' 48
            }
            </style>
            <style>
    .bgimage{
      background-image:url('n4.jpg');
      background-size: cover;
    }
    .center{
        margin: auto;
        width: 20%;
        padding: 5px;
    }
  </style>
        <style>
          .wrapper {
            
            display: flex;
            align-items: center;
            justify-content: center;
          }
          </style>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" >
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        
    </head>
    <body >
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
      </div>
  <div style="inset:0 ; position:fixed;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" style="color:white">DATABASE</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item ative">
            <!--a class="nav-link" href="loginsuccess.php"
              ><span class="input-group-text" id="Back"
                ><span class="material-symbols-outline" >BACK</span></span
              ></a
        -->
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <br>
  <br>
  <br>
<?php

include 'conn.php';
//add header
//get the list of data from the table

$sql_student= 'select *,(select category_name from category_master where category_id=x.category_id) category_name from students_details x,(SELECT b.student_id, group_concat(facility_name) FROM `facility` a, student_facility b where a.facility_id=b.facility_id group by b.student_id) d 
where d.student_id=x.student_id;';
$result = mysqli_query($conn,$sql_student);
?>
<?php
if (isset($_SESSION['user'])){
  ?>

<table id="table">
<thead>
  <tr>
<th>First Name</th>
<th>Last Name</th>
<th>Father's Name</th>
<th>Mother's Name</th>
<th>Gender</th>
<th>DOB</th>
<th>Category</th>
<th>Religion</th>
<th>Phone Number</th>
<th>Present Address</th>
<th>Facility</th>
<th>Action1</th>
<th>Action2</th>
</tr>
</thead>
<tbody>
<?php
//execute the query
while($fetched_data=mysqli_fetch_row($result))
{
    echo '<tr>';
    echo '<td>'.$fetched_data[1].'</td>';
    echo '<td>'.$fetched_data[2].'</td>';
    echo '<td>'.$fetched_data[3].'</td>';
    echo '<td>'.$fetched_data[4].'</td>';
    echo '<td>'.$fetched_data[5].'</td>';
    echo '<td>'.$fetched_data[6].'</td>';
    echo '<td>'.$fetched_data[17].'</td>';
    echo '<td>'.$fetched_data[8].'</td>';
    echo '<td>'.$fetched_data[10].'</td>';
    echo '<td>'.$fetched_data[11].'</td>';
    echo '<td>'.$fetched_data[16].'</td>';
    echo '<td ><a style=color:blue; href=../forms1_test.php?id='.$fetched_data[0].'>Edit</a></td>';
    echo '<td><a style=color:blue; href=delete.php?id='.$fetched_data[0].'>Delete</a></td>';
    echo '</tr>';
}

?>
</tbody>
</table>
</body>
<script>
        $(document).ready( function () {
          $('#table').DataTable(); 
          } );
        </script>
<?php
} ?>

