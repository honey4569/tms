<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['n']) || !isset($_SESSION['pass'])) {
    header("location: index.php"); // Redirect to the login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Home Page</title>
</head>
<body>
<div class="main-box">
<div class="top-bar">
<div class="top-left">TASK MANAGEMENT SYSTEM</div>
<div class="top-right"><a href="index.php">LOGOUT</a></div>
</div>
<div class="box-container">

  <div class="box" id="box1" onclick="window.location.href='assign.php'"><img src="th.jpeg" width="100" height="100"/>
  <span> ADD TASK </span>
  </div>
  <div class="box" id="box2" onclick="window.location.href='complete.php'"><img src="download.jpeg" width="100" height="100"/>
  <span> COMPLETED TASK </span></div>
  <div class="box" id="box3" onclick="window.location.href='pending.php'"><img src="s.jpeg" width="100" height="100"/>
  <span> PENDING TASK </span></div>
 
  </div>
 
</body>
</html>