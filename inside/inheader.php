<?php

if (isset($_SESSION['uid'])) {
echo '<form class="logg" action="../includes/logout.php" method="POST">
  <button type="submit" name="submit" class="btn">Log out  <i class="fas fa-sign-out-alt"></i></button>
</form>
<div id="mySidenav" class="sidenav">
  <a href="../index.php">Home</a>
  <a href="notice.php">Notices</a>
  <a href="lect.php">Video Lectures</a>
  <a href="event.php">UpcommingEvents</a>
  <a href="gallery.php">Gallery</a>
  <a href="attend.php">Attendance</a>
  <a href="studentdetails.php">Students</a>

</div>';
if (isset($_SESSION['uid5'])) {

  echo '<div class="con">
    <a href="../teachsignup.php">Register a  new teacher</a>
  </div>';
}
}  elseif(isset($_SESSION['uid5'])){
    echo'<form class="logg" action="../includes/logout.php" method="POST">
      <button type="submit" name="submit" class="btn">Log out <i class="fas fa-sign-out-alt"></i></button>
    </form>
    <div id="mySidenav" class="sidenav">
    <a href="../index.php">Home</a>
      <a href="notice.php">Notices</a>
      <a href="lect.php">Video Lectures</a>
      <a href="event.php">UpcommingEvents</a>
      <a href="gallery.php">Gallery</a>
    <a href="teachermanagment.php">Teachers Managment</a>
    <a href="attandence_observe.php">Attendance Observation</a>
      <a href="studentdetails.php">Students</a>

    </div>';
    echo '<div class="con">
      <a href="../teachsignup.php">Register a  new teacher</a>
    </div>';

  }elseif (isset($_SESSION['id'])) {
  echo '<form class="logg" action="../includes/logout.php" method="POST">
    <button type="submit" name="submit" class="btn">Log out <i class="fas fa-sign-out-alt"></i></button>
  </form>
  <div id="mySidenav" class="sidenav">
    <a href="../index.php">Home</a>
    <a href="notice.php">Notices</a>
    <a href="lect.php">Video Lectures</a>
    <a href="event.php">UpcommingEvents</a>
    <a href="gallery.php">Gallery</a>
      <a href="studentdetails.php">Students</a>

  </div>';
}

else {
  header('Location:.../index.php');
}
 ?>


<link rel="stylesheet" type="text/css" href="../css/mainpage.css">
<link rel='shortcut icon' href='../css/logo.png'/>
<link rel="stylesheet" href="../extensions/fawe/css/all.css" >
