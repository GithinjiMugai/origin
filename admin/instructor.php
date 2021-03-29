<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Page</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span class="las la-accusoft"></span>DSLS</h1>
        </div><br>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="home.php"><span class="las la-igloo"></span>Home</a>
                </li>
                <li>
                    <a href="clients.php"><span class="las la-users"></span>Clients</a>
                </li>
                <li>
                    <a href="instructor.php"><span class="las la-users"></span>Instructors</a>
                </li>
                <li>
                    <a href="activity.php"><span class="las la-clipboard"></span>Activities</a>
                </li>
                <li>
                    <a href="payment.php"><span class="las la-igloo"></span>Payments</a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="container">
        <div class="text">
            <h2>Instructors Page</h2>
        </div>
        
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#instructorModalCenter">Add Instructor</button>


<div class="modal fade" id="instructorModalCenter" tabindex="-1" role="dialog" aria-labelledby="instructorModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="instructorModalLongTitle"><strong>New Instructor</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" method="POST" action="">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">Firstname</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="firstname" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Lastname</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="lastname" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <div>
                            <input type="email" class="form-control input-lg" name="email" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Number</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="number" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="password" value="">
                        </div>
                    </div>
                    
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
   
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Instructor Name</th>
                    <th>Instructor Email</th>
                    <th>Instructor Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
     
    </div>
  
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>