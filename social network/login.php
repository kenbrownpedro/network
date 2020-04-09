<?php
require_once("controller/MainController.php");
$main->user_login("index.php");
?>
<!DOCTYPE html>
<html>
<head>
<title> .:: User Login ::.</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-md-4">
    
    </div>

    <div class="col-md-4" style="margin-top:3%;"> 
        <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-center">
        <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Log In</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div id="msg"></div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="username" placeholder="Enter email">
            </div>
            
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <button type="button" id="btn_user_login" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">

          <p>Not a member? <a href="sign-up.php">Sign Up</a></p>
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