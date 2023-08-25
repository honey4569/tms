<?php
session_start();
if(isset($_POST['login'])){
$servername='localhost';
$username='root';
$password='';
$dbname='taskm';

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
  {
    die("Connection Failed:" .connect_error);
  }

$username=$_POST['uid'];
$password=$_POST['pass'];

$sql = "SELECT * FROM login WHERE username='$username' and password='$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
   if($count==1)
   {  
      $_SESSION['n']=$username;
	  $_SESSION['pass']=$password;
      header("location:home1.php");
   }
   
   else
   {
  echo'<script>alert("Invalid Password or Username")</script>';
  include('index.php');
   }
}
?>