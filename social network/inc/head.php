<?php
require_once ("Controller/MainController.php");
$main->user_not_login("login.php");
?>
<!DOCTYPE html>
<html>
<head>
<title> <?php echo $pages->gettitle(); ?>  </title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Valuebook</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages</a></li>
      <li><a href="#">Notification</a></li>
      <li><a href="#">chat</a></li>
      <li><a href="?pages=friends">Friends</a></li>
      <li><a href="#">Pages</a></li>
      <li><a href="#">Groups</a></li>
      <li><a href="#">menu</a></li>
      <li><a href="pages/logout.php">Logout</a></li>
    </ul>
  </div>
</nav>