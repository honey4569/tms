<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['n']) || !isset($_SESSION['pass'])) {
    header("location: index.php"); // Redirect to the login page if not logged in
    exit();
}
?>
<?php
include("n1.php");
if(isset($_POST['assign'])){

$taskname = $_POST['tname'];
$status = "Pending";
if(!empty($_POST['emp'])){
$empid=$_POST['emp'];}
 
$sql = "INSERT INTO completed (employeeid,taskname,status) values ('$empid','$taskname','$status')";
mysqli_query($con,$sql);
header("location:pending.php");
}
$sql1="SELECT employeeid FROM login";

$result = mysqli_query($con,$sql1);
if (mysqli_num_rows($result)>0)
{

?>


<html>
<head>
<style>
body 
{
  font-family:sans-serif; 
  background:linear-gradient(to bottom,#8B4F47,#643939);
  color:black;
}


h1{
    text-align: center;
}


form{
    width:25rem;
    margin: auto;
    color:black;
}

input,select{
    width: 50%;
    margin: 5px 0;
    padding: 8px 18px;
    box-sizing:border box ;
  }

.button {
    background-color:#AC6060;
    color:black;
    padding:10px 20px;
    margin: 7px 0;
    width: 70%;
    font-size: 18px;
  }

.button:hover {
    opacity: 0.6;
    cursor: pointer;
  } 
  
.container{
    text-align: center;
    padding: 20px 40px;
	margin-top: 20px;
}

form{
    width:35rem;
	margin:200px 500px;
    color:black;
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color:#DA9191;
    border-radius: 0px;
    border: 1px solid rgba(255, 255, 255, 0.125);
}



</style>
</head>
<body bgcolor="ffe5b4">
<form name="form" method="POST"><center>
<div class="container">
<center><h1> ASSIGN </h1></center>
TASK NAME: <input type="text" name="tname" placeholder="Enter Task Name"/><br>


EMPLOYEE ID:<select name="emp">
<option>Select</option>
<?php
while ($row = mysqli_fetch_assoc($result))
{?>
<option value="<?php echo $row['employeeid']; ?>"><?php echo $row['employeeid']; ?></option>
<?php }} ?>

</select>

<br>


<input type="submit" class="button" name="assign" value="ASSIGN"/>
</div>
</center>
</form>
</body>
</html>