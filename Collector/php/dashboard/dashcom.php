<?php 
require("../include/db-connect.php");
require("../include/auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Collections SSE</title>
    <link rel="stylesheet" href="../../css/dashboard/dashboard.css">
    <link rel="stylesheet" href="../../css/dashboard/dash-menu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">       
</head>
<body>
  <div id="grid">
  <?php include('../include/nav-dash.php'); ?>
        <div class="container">
        <h1 class="page-title">Comments</h1>
            <div id="display">
            
            </div>
            <div id="selectendel">
            
            </div>
        </div>
  </div>
</body>
</html>