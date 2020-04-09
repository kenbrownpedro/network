<?php
require_once("controller/MainController.php");
?>
<!DOCTYPE html>
<html>
<head>
<title> .:: Sign Up Page ::.</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-md-4">
    
    </div>

    <div class="col-md-4" style="margin-top:2%;"> 
        <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 style="color:red;"><span class="glyphicon glyphicon-user"></span> Sign-Up</h4>
        </div>
        <div class="modal-body">
          <?php     
                $msg = '';

                if(isset($_POST['btn_sign_up'])){
                    $username = $main->clean($_POST['username']);
                    $fname = $main->clean($_POST['fname']);
                    $lname = $main->clean($_POST['lname']);
                    $email = $main->clean($_POST['email']);
                    $phone = $main->clean($_POST['phone']);
                    $psw = $main->clean($_POST['psw']);
                    $rpsw = $main->clean($_POST['rpsw']);


                    $email_query = $main->run("SELECT `email` FROM `users` WHERE `email`='$email'");
                    $email_count = $main->rows($email_query);

                    $username_query = $main->run("SELECT  `username` FROM `users` WHERE `username`='$username'");
                    $username_count = $main->rows($username_query);



                    if(!empty($username) && !empty($fname) && !empty($lname) && !empty($phone)&& !empty($email)&& !empty($psw)&& !empty($rpsw)){
                        if($psw !== $rpsw){
                          $msg = "<div class='alert alert-warning'> The Password Mismatch </div>";
                        }else{
                          if($email_count > 0){
                            $msg = "<div class='alert alert-warning'>Email is Already In Use!</div>";

                            }else{
                              if($username_count > 0){
                                $msg = "<div class='alert alert-warning'>UserName AllReady InUse !!</div>";

                              }else{
                                $sql = $main->run("INSERT INTO `users` (`username`, `fname`, `lname`, `email`, `phone`, `password`) VALUES ('$username', '$fname', '$lname', '$email', '$phone', '$psw')");
                            if($sql == true){
                              $msg = "<div class='alert alert-danger'> Unsuccessfully Registration</div>";
                             
                            }else{
                              }
                              
                              $msg = "<div class='alert alert-success'> Successfully Registered</div>";
                            }
                          }
                        }
                    }else{
                      $msg = "<div class='alert alert-warning'> All Field(s) Required</div>";
                    }
                  
                }
                echo $msg;
          ?>
          <form role="form" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="fristname"><span class="glyphicon glyphicon-user"></span> FirstName</label>
              <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter FirstName">
            </div>
            <div class="form-group">
              <label for="lastname"><span class="glyphicon glyphicon-user"></span> LastName</label>
              <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter LastName">
            </div>
            <div class="form-group">
            <span class="glyphicon glyphicon-envelope"></span>
             <label> Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
            <span class="glyphicon glyphicon-phone"></span>
             <label> Phone </label>
              <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter your Phone">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-lock"></span> Password</label>
              <input type="password" class="form-control" id="psw" name="psw" placeholder="Enter password">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-lock"></span> Re-type Password</label>
              <input type="password" class="form-control" id="rpsw" name="rpsw" placeholder="Enter Re-type Password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" name="btn_sign_up" class="btn btn-default btn-success btn-block"> Sign Up</button>
          </form>
        </div>
        <div class="modal-footer">
        
          <p>Already have an account? <a href="login.php">Log In</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
    </div>


    <div class="col-md-4">
        
    </div>
</div>
</div>


<script src="js/jquery2.1.4.js"></script>
<script src="js/custom.js"></script>
<script src="js/login.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
</body>
</html>