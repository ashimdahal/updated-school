<title>Important Notices</title>
<link href="../extensions/bootstrap.css" rel="stylesheet">
<link rel='shortcut icon' href='../css/logo.png'>
<?php
date_default_timezone_set('Asia/Kathmandu');


include '../head.php';

 ?>
<div class="mid">
<p class="texttitle">Notices</p>
<?php
if (isset($_SESSION['uid']) || isset($_SESSION['uid5'])) {
include 'inheader.php';
include 'teachernotice.php';
}
else if (isset($_SESSION['id'])) {
include 'inheader.php';
  include 'stdnotice.php';
}else {
  header('Location: ../index.php');
  exit();
}

include '../footer.php';
 ?>
