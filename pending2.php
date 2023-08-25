<?php
if (isset($_GET["employeeid"]) && isset($_GET["taskid"])) {
    $employeeid = $_GET["employeeid"];
    $taskid = $_GET["taskid"];
    
    include("n1.php");
	
    $sql = "UPDATE completed SET status = 'completed' WHERE employeeid = '$employeeid' AND taskid = '$taskid'";

    if (mysqli_query($con, $sql) == TRUE) {
        header("location: complete.php");
    } else {
        echo "Error updating record: " . mysqli_error($con);	
    }
}
?>
