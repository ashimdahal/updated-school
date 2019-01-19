<?php
include_once 'dbcon.php';
if (isset($_POST['submit'])) {
	$vid = mysqli_real_escape_string($conn,$_POST['videoid']);


$sql ="Delete FROM videolect WHERE videoid = '$vid'";
$result = mysqli_query($conn,$sql);


	$vidname = mysqli_real_escape_string($conn,$_POST['videoname']);
	print($vidname);
	$path = "../uploads/video/" . $vidname;
echo $path;
unlink($path);
 header('Location:../inside/lect.php');
}
