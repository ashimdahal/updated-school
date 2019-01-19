<title>Upcomming events</title>
<link rel='shortcut icon' href='../css/logo.png'>
<?php
include '../fonts.php';
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






  <p class="texttitle">Upcoming Events</p> <br>

<?php
if (isset($_SESSION['uid'] ) || isset($_SESSION['uid5'])) {
  include 'eventform.php';
}
include '../includes/dbcon.php';
if (isset($_SESSION['uid'] ) || isset($_SESSION['uid5'])) {
 echo '  <div class="gallery-container" style="
  margin-left: 255;

  ">';
    $sql ="SELECT * FROM comming_events";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
      echo '
      <div class="eventholder" style="position:relative;">
      <div class="eventname">
        <h2>'.$row['eventname'].'</h2>
      </div>
      <h3>Type: '.$row['type'].'</h3>
      <h4>Organized by: '.$row['organizer'].'</h4>
      <h5>Event day on : '.$row['eventday'].'</h5>
      <h6>Notice issued by: '.$row['noticeby'].'</h6>
<form class = "delete_form" action="../includes/deleteevent.php" method="POST">
          <input type="hidden" name ="eventid" value="'.$row['eventid'].'"<br>
          <button name ="delete" type = "submit">Delete</button><br>
          </form>
</div>


    ';
    }

}elseif (isset($_SESSION['id'])) {
   echo '  <div class="gallery-container" style="
  margin-left: 255;

  ">';
    $sql ="SELECT * FROM comming_events";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
      echo '
      <div class="eventholder" style="position:relative;">
      <div class="eventname">
        <h2>'.$row['eventname'].'</h2>
      </div>
      <h3>Type: '.$row['type'].'</h3>
      <h4>Organized by: '.$row['organizer'].'</h4>
      <h5>Event day on : '.$row['eventday'].'</h5>
      <h6>Notice issued by: '.$row['noticeby'].'</h6>

</div>


    ';
}




}
?>
  </div>

</div>
</div>
