<?php
//  
require_once "../config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
<body>
<!-- <div class="navbar_container">
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">DSLS</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" aria-current="page" href="enrollme.php">Enroll</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div> -->

          <?php
             require_once "enroll.php"; 
          ?>

<div class="enroll-form">
        <div class="container">
             <br>
                <h4><i>User Details</i></h4>
                <form action="enrollme.php" method="POST">
                    <div class="form-row">
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault01">ID Number</label>
                        <input type="id" class="form-control" id="validationDefault01" name="Id_No" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault02">Surname</label>
                        <input type="text" class="form-control" id="validationDefault02" name="surname" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault02">First name</label>
                          <input type="text" class="form-control" id="validationDefault02" name="firstname" required>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault03">Email</label>
                        <input type="email" class="form-control" id="validationDefault03" name="email" required>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="validationDefault04">County Residence</label>
                        <input type="text" class="form-control" id="validationDefault04" name="county" required>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="validationDefault04">Address</label>
                        <input type="text" class="form-control" id="validationDefault04" name="address" required>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="validationDefault04">Nationality</label>
                        <input type="text" class="form-control" id="validationDefault04" name="nationality" required>
                      </div>
                      <div class="col-md-2.5 mb-3">
                        <label for="validationDefault05">Date of Birth</label>
                        <input type="date" class="form-control" id="validationDefault05" name="dob" required>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col-md-3 mb-3">
                        <label for="Select">License Type</label>
                          <select name="license" id="license" class="form-control">
                              <option value="none">None</option>
                              <option value="class A1">Class A1(Motorcycle)</option>
                              <option value="class A2">Class A2(Motorcycle)</option>
                              <option value="class A3">Class A3(Commercial)</option>
                              <option value="class B1">Class B1(Light Vehicles)</option>
                              <option value="class C1">Class C1(Light Trucks)</option>
                              <option value="class D">Class D(PSV)</option>
                              <option value="Auto vehicles">Automatic Vehicles(Disabled persons)</option>
                          </select>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="validationDefault04">Phone</label>
                        <input type="text" class="form-control" id="validationDefault04" name="phone" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault04">KRA Pin</label>
                        <input type="text" class="form-control" id="validationDefault04" name="kra" required>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="Select">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="none">None</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                      </div>
                    </div>
                    <br>

                <h4><i>Institution Details</i></h4>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="Select">City</label>
                            <select name="city" id="town" class="form-control" required>
                                <option value="none">--Please select your City</option>
                                <?php
                                  $sql = "SELECT id, city";
                                ?><option value="none">--Please select your City</option><?php?>

                            </select>
                        </div>

                        <div class="col-md-3.5 mb-3">
                            <label for="Select">Branch</label>
                            <select name="branch" id="branch" class="form-control" required>
                                <option value="none">--Please select your nearest branch</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="Select">Driving school</label>
                            <select name="school" id="school" class="form-control" required>
                                <option value="none">--Please select a school</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <h4><i>Upload PDL</i></h4>
                    <input name="upload" type="file" required>
                    <br>
                    <br>
                    <p>If you do not have the PDL, kindly scroll down the page and you will find guidelines on how to open a TIMS Account on the NTSA page and apply for the PDL.<i>Thank you!</i></p>
                   
                    <hr 3>

                    <button class="btn btn-outline-primary" type="submit" name="submit" href="dashboard.html">Submit form</button>
                    
                </form>
            </div>
    </div>

    <div class="tims p-5" id="sectionTims">
  <center>
    <h2>How to create a TIMS account</h2>
    <p>
      Ever wondered how the TIMS account works! TIMS account gives you access to services like vehicle registration, car inspection, application of duplicate logbook, application of driving license, guidelines for training drivers, transfer of car ownership, online car search, reflective number plate application, and registration of physical or functional changes to your car.<br>
      To register for a TIMS account, you will need your national identification serial number, your KRA PIN, and your phone number. <br>
      For you to apply for the Provisional Driving License, you have to create an account on TIMS. <br>
      Here are the steps of creating a TIMS account to apply for PDL: <br>
      Step 1: Click on the link below of <i>creating Tims Account</i> <br>
      Step 2: On the NTSA navbar, click on <i>register to create account</i> <br>
      Step 3: Enter your National ID serial number and Click verify <i>Register as an individual!</i> <br>
      Step 4: Enter your Mother's Maiden Name(Original surname) <br>
      Step 5: Enter your KRA Pin <br>
      Step 6: Verify your details and proceed to the last step of registration <br>
      Step 7: After Registration, login. <br>
      Step 8: Click on Driving License and click on Application for PDL <br>
      Step 9: Select your school and fill all the infomation required correctly <br>
      Step 10: Make your payment using the steps given in the NTSA system <br>
      Step 11: Finally, take a screenshot of the PDL(YOU WILL UPLOAD WHEN ENROLLING FOR LESSONS)
    </p>
  <a href="https://tims.ntsa.go.ke/login_csp.jsp" target="_blank" class="btn btn-outline-primary">Create Tims Account</a>
  </center>
</div>
</body>
</html>