<!DOCTYPE html>
<?php
session_start();
?>
<?php
include 'php/conn.php';
$student_id = '';
     if(isset($_GET['id']))
       {$student_id = $_GET['id'];

    // Get student details for the id requested
     $student_fetch_query = "select * from students_details where Student_id =$student_id ";

     // Run the query
     $result_student= mysqli_query($conn,$student_fetch_query);
     $student_array = mysqli_fetch_array($result_student);

    // Get student details for the id requested
    $student_facility_fetch_query = "select * from student_facility where student_id =$student_id ";

    // Run the query
    $result_student_facility= mysqli_query($conn,$student_facility_fetch_query);
    

       }
?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="expires" content="0" />
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">-->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link href='css.css'>
    <link href='footer.php'>
    <link rel="stylesheet" href="refSit.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Poppins"
    />
    <link rel="stylesheet" href="css.css">
    <link rel="icon" href="https://silicon.ac.in/wp-content/themes/sit/favicon.ico" type="image/x-icon">
    <title>Registration</title>
    <style>
      body {
        font-family: "Poppins", sans-serif;
      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <style>
      .material-symbols-outlined {
        font-variation-settings: "FILL" 50, "wght" 200, "GRAD" 0, "opsz" 48;
      }
    </style>
    <style>
      .bgimage{
      background-image:url('nsp.jpg');
      background-size: 100% 100%;

    }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script>
      $(document).ready(function(){
    $("#first_name").keyup(function(){
        var entered_text=$(this).val();
    if(entered_text.length>15)
    {
        alert("Try giving within 15 characters!")
    }
})
    })</script>
    <script>
*$(document).ready(function(){
    $("#click").click(function(){
        $("#success").toggle(1000);
        $('#success').hide(10000);
    })
})
    </script>
    <script>
        $(document).ready( function () {
          $('#submit').click(function(){
            alert("Enrolled Successfull!");
          }); 
          } );
        </script>
    <script type="text/javascript" src="js/refSit.js"></script>
    <script type="text/javascript" src="javascript/forms_project_js.js"></script>
  </head>
  <?php 


$sql = 'select * from category_master';
//echo $sql ; exit;
$facilitysql= 'select * from facility';
$result = mysqli_query($conn,$sql);
$facilityresult = mysqli_query($conn,$facilitysql);

?>
  <body>

    <div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Natures Club-Registration</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="project1.php"
                ><span class="input-group-text" id="home"
                  ><span class="material-symbols-outlined">home</span></span
                ></a
              >
            </li>
            <li class="nav-link">
            <div class="material-symbols-outlined">
                    <?php  if(isset($_SESSION['user']))
                    
                    {?>
                    <a type="button" href="php/adminlogout.php" class="btn btn-outline-light me-2">Logout</a>
                    
                    <?php }
                    else {
                        ?>
                        <a type="button"  class="btn btn-warning" href="login.php" class="btn btn-outline-light me-2" >Login</a>
                        <?php }?>
                    
                    
                  </div>
                    </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success my-4 my-sm-0" type="submit">
              Search
            </button>
          </form>
        
      </nav>
    </div>
    <form class='bgimage' id='click' enctype="multipart/form-data" method="post" action="<?php
        if(isset($_GET["id"])){
          echo "php\update.php" ;
          }
        else
        {
          echo "php\addstudents.php";
        }?>">
    <?php
           if(is_numeric($student_id)){
            echo '<input type=hidden name=student_id value='.$student_id.'>';
           }
           ?>
        <br>
      <div class="container">
      <div class="input-group mb-3" action='upload.php' enctype="multipart/form-data">
          <label for="religion" class="col-sm-3 col-form-label"
            ><h5>Student Photo</h5></label
          >
          <div class="input-group-prepend align-middle">
            <span class="input-group-text" id="student-first-name"
              ><span class="material-symbols-outlined" >person</span></span
            ></div>
            <input type="file" name="image"class="form-control" value="<?php 
                if (is_numeric($student_id)) echo $student_array['student_photo'];
                ?>">
        </div>
        <div class="input-group mb-3">
          <label for="student-first-name" class="col-sm-3 col-form-label"
            ><h5>First Name</h5></label
          >
          <div class="input-group-prepend">
            <span class="input-group-text" id="student-first-name"
              ><span class="material-symbols-outlined">person</span></span
            >
          </div>
          <input
            type="text"
            name="first_name"
            id="first_name"
            class="form-control"
            placeholder="First Name"
            aria-label="First Name"
            aria-describedby="basic-addon1"
            required
            value="<?php 
                if (is_numeric($student_id)) echo $student_array['First_Name'];
                ?>"
          />
        </div>
        <div class="input-group mb-3">
          <label for="student-last-name" class="col-sm-3 col-form-label"
            ><h5>Last Name</h5></label
          >
          <div class="input-group-prepend">
            <span class="input-group-text" id="student-last-name"
              ><span class="material-symbols-outlined">person</span></span
            >
          </div>
          <input
            type="text"
            class="form-control"
            name="last_name"
            id="last_name"
            placeholder="Last Name"
            aria-label="Last Name"
            aria-describedby="basic-addon1"
            required
            value="<?php 
                if (is_numeric($student_id)) echo $student_array['Last_Name'];
                ?>"
          />
        </div>
        <div class="input-group mb-3">
          <label for="father-name" class="col-sm-3 col-form-label"
            ><h5>Father's Name</h4></label
          >
          <div class="input-group-prepend">
            <span class="input-group-text" id="father-name"
              ><span class="material-symbols-outlined">person</span></span
            >
          </div>
          <input
            type="text"
            class="form-control"
            id="father_name"
            name="father_name"
            placeholder="Father's Name"
            aria-label="Father's Name"
            aria-describedby="basic-addon1"
            value="<?php 
                if (is_numeric($student_id)) echo $student_array['Father_Name'];
                ?>"
          />
        </div>
        <div class="input-group mb-3">
          <label for="mother-name" class="col-sm-3 col-form-label"
            ><h5>Mother's Name</h5></label
          >
          <div class="input-group-prepend">
            <span class="input-group-text" id="mother-name"
              ><span class="material-symbols-outlined">person</span></span
            >
          </div>
          <input
            type="text"
            class="form-control"
            id="mother_name"
            name="mother_name"
            placeholder="Mother's Name"
            aria-label="Mother's Name"
            aria-describedby="basic-addon1"
            value="<?php 
                if (is_numeric($student_id)) echo $student_array['Mother_Name'];
                ?>"
          />
        </div>
        <div class="input-group mb-3">
          <label for="gender" class="col-sm-3 col-form-label"><h5>Gender</h5></label>
          <?php
          $selected_female='';
          $selected_male='';
          $selected_other='';
          $male_focus='';
          $female_focus='';
          $other_focus='';
                  if (is_numeric($student_id)) {
                      if ($student_array['Gender'] == 'male') {
                        $selected_male='checked'; 
                        $male_focus=' active focus';
                      } else { $selected_male=''; $male_focus='';};

                      if ($student_array['Gender'] == 'female'){
                        $selected_female='checked'; 
                        $female_focus=' active focus';
                      } else { $selected_female=''; $female_focus='';};

                      if ($student_array['Gender'] == 'others') {
                        $selected_other='checked'; 
                        $other_focus=' active focus';
                      } else { $selected_other=''; $other_focus='';};

                    }  
                ?>
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-outline-primary<?php echo $male_focus; ?>">
              <input type="radio" name="gender" <?php echo  $selected_male; ?> id="male"  value="male" /> Male
            </label>
            <label class="btn btn-outline-primary<?php echo $female_focus; ?>">
              <input type="radio" name="gender" <?php echo  $selected_female; ?> id="female"  value="female" /> Female
            </label>
            <label class="btn btn-outline-primary<?php echo $other_focus; ?>">
              <input type="radio" name="gender" <?php echo  $selected_other; ?> id="other"  value="others" /> Others
            </label>
          </div>
        </div>
        <div class="input-group mb-3">
          <label for="dob" class="col-sm-3 col-form-label"><h5>Date of Birth</h5></label>
          <input
            type="date"
            class="btn btn-outline-primary"
            name="dateofbirth"
            id="getDOB"
            minlength="6"
            maxlength="6"
            required
            value="<?php 
                if (is_numeric($student_id)) echo $student_array['Date_of_Birth'];
                ?>"
          />
        </div>
        <div class="input-group mb-3">
          <label for="dob" class="col-sm-3 col-form-label"><h5>Category</h5></label>
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <?php
                   $cat_selected='';
                   $cat_focus='';
                  $cat_sql = mysqli_query($conn,"select * from category_master");
                           while($fetched_data = mysqli_fetch_array($cat_sql)) { 
                            if (is_numeric($student_id)) {
                              if ($fetched_data['category_id']==$student_array['category_id']) {
                                $cat_selected='checked';
                                $cat_focus=' active focus';
                              } else {
                                $cat_selected='';
                                $cat_focus='';
                              }
                            }
                            ?>
                            <label class="btn btn-outline-primary<?php echo $cat_focus; ?>" >
                                <input type="radio" name="Category" 
                                id="category_id" <?php echo $cat_selected; ?> 
                                value="<?php echo $fetched_data['category_id'] ?>"> 
                                <?php echo $fetched_data['category_name'] ?>
                            </label> 

                          <?php        
                        }
                    ?>
          </div>
        </div>
        <div class="input-group mb-3">
          <label for="religion" class="col-sm-3 col-form-label"><h5>Religion</h5></label>
          <div class="input-group-prepend">
            <span class="input-group-text" id="religion"
              ><span class="material-symbols-outlined">person</span></span
            >
          </div>
          <input
            type="text"
            class="form-control"
            id="getReligion"
            name="getReligion"
            placeholder="Religion"
            aria-label="Religion"
            aria-describedby="basic-addon1"
            value="<?php 
                if (is_numeric($student_id)) echo $student_array['Religion'];
                ?>"
          />
        </div>
        <div class="input-group mb-3">
          <label for="email" class="col-sm-3 col-form-label"><h5>E-Mail</h5></label>
          <div class="input-group-prepend">
            <span class="input-group-text" id="email"
              ><span class="material-symbols-outlined">mail</span></span
            >
          </div>
          <input
            type="email"
            class="form-control"
            id="getEmail"
            name="getEmail"
            placeholder="E-Mail"
            aria-label="E-Mail"
            aria-describedby="basic-addon1"
            value="<?php 
                if (is_numeric($student_id)) echo $student_array['E-Mail'];
                ?>"
          />
        </div>
        <div class="input-group mb-3">
          <label for="phnNum" class="col-sm-3 col-form-label"
            ><h5>Phone Number</h5></label
          >
          <div class="input-group-prepend">
            <span class="input-group-text" id="phnNum"
              ><span class="material-symbols-outlined">call</span></span
            >
          </div>
          <input
            type="tel"
            class="form-control"
            id="getPhnNum"
            name="getPhnNum"
            placeholder="Phone Number"
            aria-label="Phone Nymber"
            aria-describedby="basic-addon1"
            required
            value="<?php 
                if (is_numeric($student_id)) echo $student_array['Phone Number'];
                ?>"
          />
        </div>
        <div class="input-group">
          <label for="religion" class="col-sm-3 col-form-label"><h5>Present Address</h5></label>
          <div class="input-group-prepend">
            <span class="input-group-text"
              ><span class="material-symbols-outlined">home</span></span
            >
          </div>
          <input
            class="form-control"
            id="getPhnNum"
            name="getpre"
            placeholder="Present Address"
            aria-label="Address"
            value="<?php 
                if (is_numeric($student_id)) echo $student_array['Present Address'];
                ?>"
          ></input>
        </div>
        <br>
        <div class="input-group">
          <label for="religion" class="col-sm-3 col-form-label"><h5>Permanent Address</h5></label>
          <div class="input-group-prepend">
            <span class="input-group-text"
              ><span class="material-symbols-outlined">home</span></span
            >
          </div>
          <input
            class="form-control"
            id="getAddress"
            name="getAddress"
            placeholder="Permanent Address"
            aria-label="Address"
            value="<?php 
                if (is_numeric($student_id)) echo $student_array['Permanent Address'];
                ?>"
          ></input>
        </div>
        <br />
        <div class="input-group mb-3" action='upload.php' enctype="multipart/form-data">
          <label for="religion" class="col-sm-3 col-form-label"
            ><h5>Birth Certificate</h5></label
          >
          <input type="file" name='image_birthcertificate' value="<?php 
                if (is_numeric($student_id)) echo $student_array['student_birthcertificate'];
                ?>"/>
        </div>
        <br>
        <!--facilities -->
      <div class="input-group mb-3">
       <label name="facilities" for="facilities" id="facilities" class="col-sm-2 col-form-label">Facilities</label>
       <div class="input-group-prepend">
       </div>
        <div class="form-control">
         <?php
         $facility_checked='';
            while($fetched_data = mysqli_fetch_array($facilityresult))
            { 
              if (is_numeric($student_id)) {
                mysqli_data_seek($result_student_facility,0);
                while($student_facility_array = mysqli_fetch_array($result_student_facility)) {
                  if ($fetched_data['facility_id'] == $student_facility_array['facility_id']) {
                    $facility_checked = 'checked';
                    break;
                  }
                  else{
                    $facility_checked='';
                  }
                }
              } else 
                $facility_checked = '';
              ?>
            <input type="checkbox" name="facility[]" id="facilities" <?php echo $facility_checked; ?> value="<?php echo $fetched_data['facility_id'] ?>">
            <?php echo $fetched_data['facility_name'] ?>
            <div style="margin-right: 10px"></div>
            <?php        
            }
         ?>
        </div>
      </div>
      &nbsp;
      &nbsp;
      <button
          class="btn btn-primary"
          type="submit"
          id="submit"
          onclick="changebutton()"
        >
        
          Submit
      </button>
      <button type="reset" id="reset" class="btn btn-danger">
        Reset
    </button>
      &nbsp;
      <br>
      <br />
    </form>
  </body>
  <?php
  include 'footer.php'
  ?>
</html>