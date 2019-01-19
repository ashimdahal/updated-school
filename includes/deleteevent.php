<?php 

if (isset($_POST['delete'])) {
	  include 'dbcon.php';
$nid = mysqli_real_escape_string($conn,$_POST['eventid']);
$sql = "DELETE FROM comming_events WHERE eventid = $nid";
$result = mysqli_query($conn,$sql);
header('Location:../inside/event.php');
}