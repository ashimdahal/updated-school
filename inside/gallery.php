<title>Memorable Pictures</title>
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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>
<div class="mid">

   <p class="texttitle">Memorable Moments</p>
   <?php
if (isset($_SESSION['uid']) || isset($_SESSION['uid5'])) {
  include 'galleryform.php';
}

include 'gallerypics.php';
    ?>






   </div>
</div>
