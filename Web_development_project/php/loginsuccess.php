<!DOCTYPE html> 
<html> 
<?php 
   session_start();
    ?>
<head><title>Admin Controls</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" >
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://silicon.ac.in/wp-content/themes/sit/assets/css/custom.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://silicon.ac.in/wp-content/themes/sit/assets/css/owl.carousel.min.css">
    <!--    <link rel="stylesheet" href="js/owl.theme.default.min.css">-->
    <link rel="icon" href="../n10.png" type="image/x-icon">
    <link rel="stylesheet" href="wave.css"/>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://silicon.ac.in/wp-content/themes/sit/assets/js/owl.carousel.min.js"></script>
    <script src="https://silicon.ac.in/wp-content/themes/sit/assets/js/custom.js"></script>
    <!--script>
        <?php
        if (isset($_SESSION['user'])) { ?>
        alert("Login Successful!")
        <?php } ?>
    </script--->
    <style>
        body {
            background: #172031;
        }
    </style>
    <style>
        .login-box {
        position: absolute;
        font-family: "Outfit", sans-serif;
        top: 45%;
        left: 50%;
        width: 600px;
        padding: 40px;
        transform: translate(-50%, -30%);
        background: rgba(0.2, 0.6, 0.7, 0.5);
        box-sizing: border-box;
        border-radius: 10px;
      }
        .content {
            max-width: 500px;
            padding: 25px;
            margin: 50px auto 0;
            border: black;
        }

        body {
            background: #172031;
        }

        .div {
            width: 550px;
            margin: auto;
            margin: 10 0 0 450px;
            overflow: hidden;
            padding: 70px;
            background: #172031;
        }

        h2 {
            text-align: center;
            padding: 10px;
            color: rgb(248, 4, 4);
            text-decoration: underline;
        }

        label {
            color: rgb(255, 252, 252);
            padding-left: 10px;

        }

        .inputText {
            width: 300px;
            height: 30px;
            border: none;
            border-radius: 2px;
            padding-left: 8px;

        }

        #add {
            width: 300px;
            height: 35px;
            border: none;
            border-radius: 10px;
            padding-left: 7px;
            color: rgb(248, 248, 251);
            font-size: 16px;
        }
    </style>
    <style>
    .wave {
        background: rgb(255 255 255 / 25%);
    border-radius: 1000% 1000% 0 0;
    position: fixed;
    width: 200%;
    height: 12em;
    animation: wave 10s -3s linear infinite;
    transform: translate3d(0, 0, 0);
    opacity: 0.8;
    bottom:0;
    left: 0;
    z-index: -1;
    }
    
    
    .wave:nth-of-type(2) {
    bottom: -1.25em;
    animation: wave 18s linear reverse infinite;
    opacity: 0.8;
    }
    .wave:nth-of-type(3) {
        bottom: -2.5em;
        animation: wave 20s -1s reverse infinite;
        opacity: 0.9;
    }
    @keyframes wave {
    2% {
        transform: translateX(1); }
    25% {
    
    transform: translateX(-25%); }

    50% {
        transform: translateX(-50%);
     }
    75% {
        transform: translateX(-25%);
     }
    100% {
         transform: translateX(1);
         } 
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
</head>
<body class="bgimage">
<div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
      </div>
    <header>
        <!-- -------------------------------- Navabr ------------------------ -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" style="color:white;">Admin Controls
                </a>
                <div class="collapse navbar-collapse" id="navbarToggle">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item">
                            <a class="nav-link text-bg-dark active" href="http://localhost/silicon_internship/forms1_test.php"><span class="input-group-text" id="register"><span class="material-symbols-outlined">Enroll Form</span></span></a>
                        </li>
                        <?php
                        if (isset($_SESSION['user'])) { ?>
                         <li class="nav-item">
                            <a class="nav-link text-bg-dark" href="<?php if (isset($_SESSION['user'])) { echo "http://localhost/silicon_internship/php/edit.php"; } ?>"><span class="input-group-text" id="database"><span class="material-symbols-outlined">Database</span></span></a>
                        </li>
                         <?php } ?>
                        
                    </ul>
                </div>
                
                
                <?php 
              //  print_r ($_SESSION['user']);
      if (isset($_SESSION['user'])) { print_r ($_SESSION['user']);?>
        
        <li class="nav-item">
            <a class="nav-link" href="adminlogout.php"><b style="color:blue">&ensp;LOGOUT</b></a>
        </li>
      <?php } else { ?>
        <li class="nav-item">
                <a class="nav-link" href="../login.php"><b style="color:blue">&ensp;ADMIN-LOGIN</b></a>
            </li>       
            <?php } ?>
            </div>
        </nav>
                    </nav>
    </header>
    <main>
    <div class="inline login-box">
    <div class="" >
    <?php 
if (isset($_SESSION['user'])) { ?>
    <div ><center>Logged In</center></div>
    <form enctype="multipart/form-data" action="addfacility.php">
    <label style="color: #03e9f4;">Enter facilities you want to add:-</label>
                <input type="text" name="facility_name"  class="form-control" placeholder="Add facilities">
                <br>
                <button class="btn btn-primary" type="submit" 
                    onclick="changebutton()">ADD</button>
</form>
                    <?php
//session_start();
//include 'header.php';
include 'conn.php';

/*if (isset($_SESSION['user'])) {
    header('Location: adminlogin.php');
}*/
// Get the list of Data from the table
$sql_student = "select * from facility";
$sql_category = "select * from category_master";
//Execute the query
$result = mysqli_query($conn,$sql_student);
$resultcat=mysqli_query($conn,$sql_category);
?>
<br><br>
<div class="container wrapper" >
 <table id="myTable" >
    <thead >
        <th style="color: #03e9f4;">facility_id &emsp;</th>
        <th style="color: #03e9f4;">facility name &emsp;</th>
        <th style="color: #03e9f4;">Action</th>
        <!--th>Delete</th-->
    </thead>
    <tbody >
<?php
while($fetched_data=mysqli_fetch_row($result)) {
    echo '<tr>';
    echo '<td style="color:#1e90ff;">'.$fetched_data[0].'</td>';
    echo '<td style="color:#1e90ff;">'.$fetched_data[1].'</td>';
    echo '<td ><a href=editfacility.php?action=delete&id='.$fetched_data[0].'>delete</a></td>';
    echo '</tr>';
} 
?>
</tbody>

 </table>
 <form enctype="multipart/form-data" action="addcategory.php">
</div>
                <br><br>
                <label style="color:#03e9f4;">Enter category you want to add:-</label>
                <input type="text" name="category_name" class="form-control" placeholder="Add category">
                <br>
                <button class="btn btn-primary" type="submit" name="log" id="logButton" value="Login"
                    onclick="">ADD</button>
                
    
    </div>
    </form>
<div class="container wrapper" >
 <table id="myTable" >
    <thead >
        <th style="color:#03e9f4;">category_id &emsp;</th>
        <th style="color:#03e9f4;">category name &emsp;</th>
        <th style="color:#03e9f4;">Action</th>
        <!--th>Delete</th-->
    </thead>
    <tbody>
<div class="conatiner wrapper ">
<?php

while($fetched_data=mysqli_fetch_row($resultcat)) {
    echo '<tr>';
    echo '<td style="color:#1e90ff;">'.$fetched_data[0].'</td>';
    echo '<td style="color:#1e90ff;">'.$fetched_data[1].'</td>';
    echo '<td><a href=editcategory.php?action=delete&id='.$fetched_data[0].'>delete</a></td>';
    echo '<br>';
    echo '</tr>';
} 

?>
</div>

<br>
</tbody>

<?php } 
else {?>

    <h1 class="container fluid" style="color: #03e9f4;">
        Oops!! 
        Logged Out.</h1>
<?php
}
?>
</div>
</div>
</div>
</main>


</body>
<script>
        $(document).ready( function () {
          $('#myTable').DataTable(); 
          } );
        </script>
