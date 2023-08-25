<?php
$employeeid = $_POST['id'];
$taskid = $_POST['taskid'];
include('n1.php');
$sql = "DELETE FROM completed WHERE employeeid = '$employeeid' AND taskid = '$taskid'";
if (mysqli_query($con,$sql) == TRUE) {
        header("location: complete.php");
    } else {
        echo "Error deleting record: " . mysqli_connect_error();
		

    }


?>