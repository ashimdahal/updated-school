<link rel='shortcut icon' href='../css/logo.png'>
<title>Attendance</title>
<div class="mid" style="height: 100vh;">
<script
  src="../extensions/jq.js"></script>
  <link rel="stylesheet" href="../css/attend.css">
<?php
include_once '../head.php';
if (isset($_SESSION['uid'])) {
include 'inheader.php';
}else {
  header('Location: ../index.php');
  exit();
}
include '../footer.php';
 ?>

 <p class="texttitle" style="font-family:Cursive;">Students Attendance</p><br>
 <center><h6 style='font-family:monospace;font-size:20px;'></h6></center>
 <?php
 $conn = mysqli_connect('localhost','root','','school');
$email = $_SESSION['email'];
$sql = "SELECT * FROM `teachers.detail` WHERE email='$email' ";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
  $class = $row['assigned.class'];
  $sec = $row['assigned.section'];

  $sql2 = "SELECT * FROM `std.parent` WHERE class='$class' AND section='$sec' AND Validity='1'";
  $result2 = mysqli_query($conn,$sql2);
  echo "<br><br><br><div class='students_container' style='position:absolute;left:35%;'>";
  while($row2 = mysqli_fetch_assoc($result2)){
    echo "

  <input id='abs_checkbox".$row2['firstname']."' type='checkbox' style='display:none;' value='".$row2['firstname']."'>
  <label for='abs_checkbox".$row2['firstname']."' ></label>
  </input>
    <p style='font-family:Cursive;font-size:15px;'>".$row2['firstname'].' '.$row2['lastname']."</p><br>

    <br><br>";
  }
  echo "</div>";
  echo "<br><br>
  <button class='btn btn-primary' style='width:30%;position:relative;left:35%;top:200px;'>Submit Today's Attendance</button>";
}
  ?>


  <script>
  $('button').click(function(){
    var absent = "";
    var counter = 0;
    $('input[type="checkbox"]:checked').each(function(){
    counter++;
absent += $(this).val()+","
    })
if($('input[type="checkbox"]:checked') == 0){
  absent = "None";
}
$.post("attend_scripts.php",{
  total_absent : counter,
  students : absent,
  add_absent : "200",
  class : "<?php echo $class; ?>",
  section :"<?php echo $sec;?>",
  class_teacher : "<?php echo $email;?>"
},function(data){
$('h6').html(data)
})

  })
  </script>
</div>
