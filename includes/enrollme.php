<?php

require_once "../config.php";

if (!isset($_SESSION['user'])){
  header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <style>
    .navbar .navbar-brand {
    font-size: 2rem;
    font-family: cursive;
    font-weight: bold;
    }

    .container {
      width: 1000px;
      height: 700px;
      border-radius: 5px;
      position: relative;
      overflow: hidden;
    }

    .container .form {
      position: absolute;
      top: 100px;
      left: 70px;
      transition: 0.5s;
    }

    .btn-box{
      width: 100%;
      margin: 20px auto;
      text-align: center;
    }

    .form button {
      background-color: blue;
      width: 120px;
      height: 35px;
      margin: 0 5px;
      border-radius: 30px;
      outline: none;
      cursor: pointer;
    }

    #form2 {
      left: 1200px;
    }

    #form3 {
      left: 1200px;
    }
  </style>
<body>
<div class="navbar_container">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">DSLS</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../class.php">Classroom</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="enrollme.php">Enroll</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" target="_blank" href="https://tims.ntsa.go.ke/login_csp.jsp">Book Test</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" target="_blank" href="https://youtu.be/_ftY9yka9rc">Learn to Drive</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        </div>  

          <?php
             require_once "enroll.php"; 
          ?>

        <div class="container">
          <form action="enrollme.php" method="POST">
            <div class="form" id="form1">
              <h3 class="text-center">
                  <strong>APPLICATION FOR DRIVING LESSONS</strong>
                </h3>
                <h4 class="text-center">
                  <strong>Step 1/3 - Personal Details (As they appear on your ID card)</strong>
                </h4>
                <hr>
                    <div class="form-row">
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault01">ID Number <strong class="text-danger">*</strong></label>
                        <input type="numeric" class="form-control" id="validationDefault01" name="Id_No" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault02">Surname <strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" id="validationDefault02" name="surname" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault02">First name <strong class="text-danger">*</strong></label>
                          <input type="text" class="form-control" id="validationDefault02" name="firstname" required>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault03">Email <strong class="text-danger">*</strong></label>
                        <input type="email" class="form-control" id="validationDefault03" name="email" required>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="validationDefault04">County Residence <strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" id="validationDefault04" name="county" required>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="validationDefault04">Street/Estate <strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" id="validationDefault04" name="address" required>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="validationDefault04">Nationality <strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" id="validationDefault04" name="nationality" required>
                      </div>
                      <div class="col-md-2.5 mb-3">
                        <label for="validationDefault05">Date of Birth <strong class="text-danger">*</strong></label>
                        <input type="date" class="form-control" id="validationDefault05" name="dob" required>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col-md-3 mb-3">
                        <label for="Select">License Type <strong class="text-danger">*</strong></label>
                          <select name="license" id="license" class="form-control">
                              <option value="Select">Select</option>
                              <option value="Class A1">Class A1(Motorcycle)</option>
                              <option value="Class B1">Class B1(Light Vehicles)</option>
                              <option value="Class C1">Class C1(Light Trucks)</option>
                              <option value="Class D">Class D(PSV)</option>
                              <option value="Auto vehicles">Automatic Vehicles for Disabled persons</option>
                          </select>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="validationDefault04">Phone <strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" id="validationDefault04" name="phone" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault04">KRA Pin <strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" id="validationDefault04" name="kra" required>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label class="control-label">Gender <strong class="text-danger">*</strong></label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="Select">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                      </div>
                    </div>
                    
                    <div class="btn-box">
                      <button type="button" id="next1">
                      Next
                      <i class="fas fa-chevron-circle-right"></i>
                      </button>
                    </div>
            </div>

            <div class="form" id="form2">
              <h3 class="text-center">
                  <strong>Payment Option</strong>
                </h3>
                <h4 class="text-center">
                  <strong>Step 2/3 - Pay using Mpesa</strong>
                </h4>
                <hr>
                <table class="table table-bordered">
                  <thead>
                  <tr>
                    <th>Class A1 (Motorcycle)</th>
                    <th>Class B1 (Light Vehicles)</th>
                    <th>Class C1 (Light Trucks)</th>
                    <th>Class D (PSV)</th>
                    <th>Automatic vehicles for disabled</th>
                  </tr>
                  </thead>
                  <tr class="text-center">
                    <td>Kshs. 5000</td>
                    <td>Kshs. 13000</td>
                    <td>Kshs. 18000</td>
                    <td>Kshs. 10000</td>
                    <td>Kshs. 11000</td>
                  </tr>
                </table>
                <hr>
                <p class="text-danger">
                  Ensure you pay the correct amoount of the lessons you would like to learn. <br>
                  During attending lessons, you must come with original ID Card for clarity. <br>
                  Kindly seek assistance from us if you are not sure!
                </p>
                    <h3>
                      <strong>Paybill: </strong>247247<br>
                      <strong>Account Number: </strong>11578954949
                    </h3>
                        <div class="col-md-3 mb-3">
                            <label for="Select">Mpesa Reference No.</label>
                            <input name="msg" id="school" class="form-control" required>
                        </div>

                    <div class="btn-box">
                      <button type="button" id="next2">
                      Next
                      </button>
                    </div>
            </div>
    
        <div class="form" id="form3">
        <h3 class="text-center">
                    <strong>Upload PDL</strong>
                  </h3>
                  <h4 class="text-center">
                    <strong>Step 3/3 - Visit NTSA Page and apply for PDL</strong>
                  </h4>
                  <hr>
                    <h4><i>Choose File <strong class="text-danger">*</strong></i></h4>
                    <input name="upload" type="file" required>
                    <br>
                    <br>
                    <p><b>If you do not have the PDL, kindly visit the NTSA page below and create TIMS Account and apply for the PDL.</b><i>Thank you!</i></p>
                   
                    <hr 3>

                    <button class="btn btn-primary" type="submit" name="submit" href="../dashboard.html">Submit form</button>
                    
          <div class="tims p-5" id="sectionTims">
            <center>
              <h2>Create a TIMS account and apply for a PDL</h2>
              <!-- <p>
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
              </p> -->
            <a href="https://tims.ntsa.go.ke/login_csp.jsp" target="_blank" class="btn btn-outline-primary">Create Tims Account</a>
            </center>
          </div>
        </div>

        </form>
                   
            </div>



<div class="footer">
  <center>
   <p>DSLS &copy; 2021</p> 
  </center>
</div>

<script type="text/javascript">
 var form1 = document.getElementById("form1");
	 var form2 = document.getElementById("form2");
	 var form3 = document.getElementById("form3");

   var next1 = document.getElementById("next1");
	 var next2 = document.getElementById("next2");

   next1.onclick = function() {
     form1.style.left = "-1200px";
     form2.style.left = "100px";
   }

   next2.onclick = function() {
    form2.style.left = "-1200px";
    form3.style.left = "100px";
   }
</script>
</body>
</html>