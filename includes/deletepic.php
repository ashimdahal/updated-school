<?php

if (isset($_POST['delete'])) {
  include 'dbcon.php';
$cid = mysqli_real_escape_string($conn,$_POST['imgid']);

$sql = "DELETE FROM images WHERE imageid = '$cid'";
 mysqli_query($conn,$sql);


$imgname = mysqli_real_escape_string($conn,$_POST['imgname']);

$path= "../uploads/image/". $imgname ;
unlink($path);
header('Location: ../inside/gallery.php?delete=success');
}
 ?>
