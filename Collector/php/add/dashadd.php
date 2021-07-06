<?php 
require("../include/db-connect.php");
require("../include/auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Add SSE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/dashboard/dashboard.css">
    <link rel="stylesheet" href="../../css/dashboard/dash-menu.css">
    <link rel="stylesheet" href="../../css/dashboard/collection.css">
</head>
<body>
  <div id="grid">
  <?php
//myacc time checker
$welcome = "0";
$current_time = time();
if($current_time < strtotime('12.00.00')){
  $welcome = "Goedemorgen, ";
  }
if($current_time > strtotime('12.00.00')){
$welcome = "Goedemiddag, ";
  }
if($current_time > strtotime('18.00.00')){
  $welcome = "Goedeavond, ";
  }
?>
<div class="nav">
        <img class="nav_img" src="../../img/RPSD_logopng.png" width="100" height="100" alt="picture" href="../../inlog.php">
        <a class="myacc" href="../dashboard/myacc.php"><?php echo $welcome . $_SESSION['username']; ?></a>
    </div>
    <div class="menu">
      <div class="menu-top">
          <div class="menuitem text"><a href ="../dashboard/dashboard.php"><i class="fa fa-home"></i><span>Home</span></a></div>
          <div class="menuitem text"><a href ="../dashboard/dashcoll.php"><i class="fa fa-columns"></i><span>Collections</span></a></div>
          <div class="menuitem text"><a href ="../dashboard/dashcom.php"><i class="fa fa-comment"></i><span>Comments</span></a></div>
          <div class="menuitem text"><a href ="dashadd.php"><i class="fa fa-plus"></i><span>Add</span></a></button></div>
      </div>
      <div class="menu-bottom">
          <div class="menuitem text"><a href ="../dashboard/dashuser.php"><i class="fa fa-user"></i><span>Users</span></a></div>
          <div class="menuitem text"><a href ="../dashboard/settings.php"><i class="fa fa-cog"></i><span>Settings</span></a></div>
          <h5>Copyright © 2020-2021 SSE ™</h5>
      </div>
    </div>
      <div class="container">
        <h1 class="page-title">ADD</h1>
        <form method="POST" action="upload.php" enctype="multipart/form-data">
          <div class="form-inline">
            <input type="file" class="form-control" name="image" required/>
            <br>
            <input type="text" class="form-control" name="description" placeholder="Description" required/>
            <br>
            <button name="upload"><span>Upload</span></button>
          </div>
        </form>	
    </div>
  </div>	
  <script src="../../js/script.js"></script>
</body>
</html>