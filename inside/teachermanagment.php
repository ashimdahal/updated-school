<link rel='shortcut icon' href='../css/logo.png'>
<?php
include_once '../head.php';
if(!isset($_SESSION['uid5'])){

  header('Location:../index.php');
}
?>
<title>Teachers Managment Page</title>
<link rel="stylesheet" href="../extensions/bootstrap.css" >
<script src="../extensions/bootstrap.js" ></script>
<script
  src="../extensions/jq.js"></script>
<?php
include 'inheader.php';
include '../fonts.php';

 ?>
<div class='mid' style="height:100vh">
  <p class="texttitle" style="font-family:Cursive;">Teachers Management</p><br>

<div class="response" style="top: 10%;position:absolute;left: 50%;font-weight: 800;"></div>

<?php

include '../includes/dbcon.php';
 $sql = "SELECT * FROM  `teachers.detail` WHERE Firstname <>'principal'";
$result = mysqli_query($conn,$sql);

echo '<table class="table table-bordered table-dark " style="padding:0px;width:40%;position:absolute;left:35%;top:15%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Class Assigned</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>';
  $count = 0;
  while($row = mysqli_fetch_assoc($result)){
    $count ++;
    echo "<tr>
    <th scope='row'>$count</th>
          <td style='height:20px;'>".$row['firstname']."</td>
          <td  style='height:20px;'>".$row['lastname']."</td>
          <td class='assign_class' style='height:20px;'>".$row['assigned.class']."
          </td>
          <td class='assign_sec' style='height:20px;'>".$row['assigned.section']."
          </td>
          <input type='hidden' value=".$row['assigned.section']." class='current_sec'>
          <input type='hidden' value=".$row['assigned.class']." class='current_clas'>
          <td class='button_data' style='height:20px;'><button class='btn btn-danger' style='font-size:10px'>Delete
          <input type='hidden' value=".$row['email']."></button>
          <br><h6 class='edit_class_btn' style='font-size:17px;text-decoration:underline;cursor:pointer;'>Edit Class</span>
          <h6 class='sav_chang' style='cursor:pointer;display:none;color:red;font-size:10px;text-decoration:underline'>Save Changes</span>
          <h6 class='cancel' style='cursor:pointer;display:none;color:#eee;font-size:10px;text-decoration:underline'>Cancel</span></span>
          <br>
    </tr>
    ";
  }
  '</tbody>
</table>';

 ?>
 <script>
 $('button').click(function(){
$.post('teacher_manage_script.php',{
uemail : $(this).children().val(),
delete : "200"
},function(data){
  $('.response').html(data)
})
 })
 $('.edit_class_btn').click(function(){
   $(this).parent().parent().find('.assign_sec').html('<select id="section_selc"><option>A</option><option>B</option><option>C</option><option>D</option><option>E</option></select>')

$(this).parent().parent().find('.assign_class').html('<select id="classes_selc"><option>Nursery</option><option>L.K.G</option><option>U.K.G</option><?php
  for($i=1;$i<=12;$i++){
   echo "<option>Grade"." $i</option>"; }  ?></select>');
$(this).parent().parent().find('.sav_chang').css('display','block');
$(this).parent().parent().find('.cancel').css('display','block');
 })

$('.cancel').click(function(){
var current_sec = $(this).parent().parent().find('.current_sec').val()
  var current_clas = $(this).parent().parent().find('.current_clas').val()
  $(this).parent().parent().find('.assign_sec').html(current_sec);
$(this).parent().parent().find('.assign_class').html(current_clas);
$(this).parent().parent().find('.sav_chang').css('display','none');
$(this).parent().parent().find('.cancel').css('display','none');
});
$('.sav_chang').click(function(){
  var new_sec = $('#section_selc').val()
  var new_class = $('#classes_selc').val()
  $.post('teacher_manage_script.php',{
  uemail : $(this).parent().parent().find('button').children().val(),
  some_edit : "200",
  class : new_class,
  sec : new_sec
  },function(data){
    $('.response').html(data)
    setTimeout(function(){
      window.location.reload()
    },3000)
  })
})
 </script>
</div>
