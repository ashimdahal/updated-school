<?php
if (isset($_POST['submit'])) {
  $date= $_POST['date'];
  $type = $_POST['type'];
  $organizer = $_POST['eventorganizer'];
  $eventname = $_POST['eventname'];
  $noticeby = $_POST['noticeby'];
  
if (empty($date) || empty($type) || empty($organizer) || empty($eventname)) {
  header('Location:../inside/event.php?event=empty');
}else {
  include 'dbcon.php';
  $sql = "INSERT INTO comming_events(eventname,organizer,type,eventday,noticeby) VALUES(?,?,?,?,?)";
     $stmt = mysqli_stmt_init($conn);
     mysqli_stmt_prepare($stmt,$sql);
      mysqli_stmt_bind_param($stmt,"sssss",$eventname,$organizer,$type,$date,$noticeby);
      mysqli_stmt_execute($stmt);
  header('Location:../inside/event.php?event=success');
}
}
