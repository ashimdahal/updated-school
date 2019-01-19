<?php
if (isset($_SESSION['uid'])) {
echo'<form class="logg" action="includes/logout.php" method="POST">
  <button type="submit" name="submit" class="btn">Log out <i class="fas fa-sign-out-alt"></i></button>
</form>
<div id="mySidenav" class="sidenav">
<a href="index.php">Home</a>
  <a href="inside/notice.php">Notices</a>
  <a href="inside/lect.php">Video Lectures</a>
  <a href="inside/event.php">UpcommingEvents</a>
  <a href="inside/gallery.php">Gallery</a>
  <a href="inside/attend.php">Attendance</a>
    <a href="inside/studentdetails.php">Students</a>


</div>';

}elseif(isset($_SESSION['uid5'])){
  echo'<form class="logg" action="includes/logout.php" method="POST">
    <button type="submit" name="submit" class="btn">Log out <i class="fas fa-sign-out-alt"></i></button>
  </form>
  <div id="mySidenav" class="sidenav">
  <a href="index.php">Home</a>
    <a href="inside/notice.php">Notices</a>
    <a href="inside/lect.php">Video Lectures</a>
    <a href="inside/event.php">UpcommingEvents</a>
    <a href="inside/gallery.php">Gallery</a>
  <a href="inside/teachermanagment.php">Teachers Managment</a>
  <a href="inside/attandence_observe.php">Attendance Observation</a>
  <a href="inside/studentdetails.php">Students</a>
  </div>';
  echo '<div class="con">
    <a href="teachsignup.php">Register a  new teacher</a>
  </div>';

}else {
  header('Location: ../index.php');
  exit();
}
 ?>
