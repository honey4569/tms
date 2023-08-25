<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['']) || !isset($_SESSION['pass'])) {
    header("location: index.php"); // Redirect to the login page if not logged in
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
<style>
body{
 display:flex;
 flex-direction:column;
 justify-content:center;
 align-items:center;
 height:50vh;
 margin:0;
}  

input{
	border: 0px;
	text-align: center;
}

.link-grid{
 background-color:#f0f0f0;
 padding:10px 550px;
 border:1px solid #ccc;
 display:grid;
 grid-template-columns:1fr 1fr;

 }
 
 
.link-grid a{
 text-decoration:none;
 color:#333;
 }


</style>
</head>
<body bgcolor="#DA9191">



<div class="link-grid">
<a href="home1.php">HOME</a>

<a href="index.php">LOGOUT</a>
</div><br>
<p align="center"> COMPLETED TASK </p>
<table align="center"  bgcolor="white" border=10 cellspacing=2 cellpadding=10 width="200" height="50">
<tr bgcolor="#D9D9D9">
<th> EMPLOYEE ID </th>
<th> EMPLOYEE NAME </th>
<th> TASK NAME</th>
<th> STATUS </th>
<th> REMOVE</th></tr>
<?php 
include('n1.php');
$match = "completed";
$sql = "SELECT * FROM completed WHERE status='$match'";
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0)
{
while ($row = mysqli_fetch_assoc($result))
{
?>
<form method="POST" action="delete.php">
<tr>
<td> <input type="text" name="id" value="<?php echo $row['employeeid']; ?>"></td>
<td> <input type="text" name="taskid" value="<?php echo $row['taskid']; ?>"></td>
<td> <?php echo $row['taskname']; ?></td>
<td> <?php echo $row['status']; ?></td>
<td> <input type="submit" class="button" name="Delete" value="Delete"/></a></td>
</tr>
</form>
<?php }
} else { ?>
<tr>
<td colspan="5"> NO DATA FOUND </td> 
</tr>
<?php } ?>
</table>

</body>
</html>