<?php
if(isset($_POST['login'])){

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'taskm';

$con = mysqli_connect($server,$username,$password,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['uid'];
$password = $_POST['pass'];

$sql = "SELECT * FROM login WHERE username='$username' and password='$password';
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count==1)
{
   header("location: home1.php");
}
else
{     
    echo '<script>alert("Invalid Password or Username")</script>';
}  
   
}

?>