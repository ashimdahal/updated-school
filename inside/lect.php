<title>Video Lectures</title>
<link href="../extensions/bootstrap.css" rel="stylesheet" >
<link href="../extensions/bootstrap.css" rel="stylesheet"/>
<link rel='shortcut icon' href='../css/logo.png'>
<?php
include_once '../head.php';
if (isset($_SESSION['uid']) || isset($_SESSION['uid5'])) {
include 'inheader.php';
}else if (isset($_SESSION['id'])) {
include 'inheader.php';
}else {
  header('Location: ../index.php');
  exit();
}
include '../footer.php';
 ?>



<div class="mid">

<p class="texttitle">Video Lectures</p>

<?php
if (isset($_SESSION['uid']) || isset($_SESSION['uid5'])) {
  include 'teachervideolesson.php';
}

include 'videolessons.php';

 ?>


</div>
