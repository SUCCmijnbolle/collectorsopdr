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
        <!--<img class="nav_img" src="../add/uploads/2021-04-08 10-41-18.gif" width="100" height="100" alt="picture" href="../../inlog.php">-->
        <a class="myacc" href="myacc.php"><?php echo $welcome . $_SESSION['username']; ?></a>
    </div>
    <div class="menu">
      <div class="menu-top">
          <div class="menuitem text"><a href ="dashboard.php"><i class="fa fa-home"></i><span>Home</span></a></div>
          <div class="menuitem text"><a href ="dashcoll.php"><i class="fa fa-columns"></i><span>Collections</span></a></div>
          <div class="menuitem text"><a href ="dashcom.php"><i class="fa fa-comment"></i><span>Comments</span></a></div>
          <div class="menuitem text"><a href ="../add/dashadd.php"><i class="fa fa-plus"></i><span>Add</span></a></button></div>
      </div>
      <div class="menu-bottom">
          <div class="menuitem text"><a href ="dashuser.php"><i class="fa fa-user"></i><span>Users</span></a></div>
          <div class="menuitem text"><a href ="settings.php"><i class="fa fa-cog"></i><span>Settings</span></a></div>
          <h5>Copyright © 2020-2021 SSE ™</h5>
      </div>
    </div>