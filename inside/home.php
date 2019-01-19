<?php
if (isset($_SESSION['uid5']) ) {
  echo '<div class="mid" style="height:100%">
    <h1>Home</h1>
    <div class="gallery-container" style="

       margin-left: 260;
       width: 75%;
    ">   <a href="inside/event.php">
     <div class="Holder">

     <img width="320px" height="240px"src="css/events.png" class="rounded" alt="">

       <div class="texts">
         School Events
       </div>


    </div>
    </a>
  <a href="inside/lect.php">
    <div class="Holder">

     <img width="320px" height="240px"class="rounded"src="css/videolect.png" alt="">

       <div class="texts">
         Video Lessons
       </div>


    </div>
  </a>
  <a href="inside/notice.php">
    <div class="Holder">

     <img width="320px" height="240px"class="rounded"src="css/notice.png" alt="">

       <div class="texts">
        Important Notices
       </div>


    </div >
    </a>
  <a href="inside/gallery.php">
    <div class="Holder">

     <img width="320px" height="240px"src="css/gallery.jpg" class="rounded"alt="">
       <div class="texts">
         Picture Gallery

       </div>
    </div>
     </a>
  <a href="inside/attandence_observe.php">
    <div class="Holder">

      <img width="320px" height="240px"src="css/absent.jpg" class="rounded"alt="">
      <div class="texts">
        Student Attendance

      </div>
      </div>
  </a>

   <a href="inside/teachermanagment.php">
    <div class="Holder">

      <img width="320px" height="240px"src="css/teachers.jpg" class="rounded"alt="">
      <div class="texts">
        Teachers Management

      </div>
  </a>

      </div>
    </div>
    </div>';
}elseif (isset($_SESSION['id'])) {
  echo '<div class="mid" style="height:100%">
    <h1>Home</h1>
    <div class="gallery-container" style="

       margin-left: 260;
       width: 75%;
    ">   <a href="inside/event.php">
     <div class="Holder">

     <img width="320px" height="240px"src="css/events.png" class="rounded" alt="">

       <div class="texts">
         School Events
       </div>


    </div>
    </a>
  <a href="inside/lect.php">
    <div class="Holder">

     <img width="320px" height="240px"class="rounded"src="css/videolect.png" alt="">

       <div class="texts">
         Video Lessons
       </div>


    </div>
  </a>
  <a href="inside/notice.php">
    <div class="Holder">

     <img width="320px" height="240px"class="rounded"src="css/notice.png" alt="">

       <div class="texts">
        Important Notices
       </div>


    </div >
    </a>
  <a href="inside/gallery.php">
    <div class="Holder">

     <img width="320px" height="240px"src="css/gallery.jpg" class="rounded"alt="">
       <div class="texts">
         Picture Gallery

       </div>
    </div>
     </a>
  
      </div>
    </div>
    </div>';
}elseif (isset($_SESSION['uid'])) {
  echo '<div class="mid" style="height:100%">
    <h1>Home</h1>
    <div class="gallery-container" style="

       margin-left: 260;
       width: 75%;
    ">   <a href="inside/event.php">
     <div class="Holder">

     <img width="320px" height="240px"src="css/events.png" class="rounded" alt="">

       <div class="texts">
         School Events
       </div>


    </div>
    </a>
  <a href="inside/lect.php">
    <div class="Holder">

     <img width="320px" height="240px"class="rounded"src="css/videolect.png" alt="">

       <div class="texts">
         Video Lessons
       </div>


    </div>
  </a>
  <a href="inside/notice.php">
    <div class="Holder">

     <img width="320px" height="240px"class="rounded"src="css/notice.png" alt="">

       <div class="texts">
        Important Notices
       </div>


    </div >
    </a>
  <a href="inside/gallery.php">
    <div class="Holder">

     <img width="320px" height="240px"src="css/gallery.jpg" class="rounded"alt="">
       <div class="texts">
         Picture Gallery

       </div>
    </div>
     </a>
  <a href="inside/attend.php">
    <div class="Holder">

      <img width="320px" height="240px"src="css/absent.jpg" class="rounded"alt="">
      <div class="texts">
        Student Attendance

      </div>
  </a>

      </div>
    </div>
    </div>';
}
 ?>



<link href="extensions/bootstrap.css" rel="stylesheet" >
