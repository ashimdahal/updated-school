<link rel='shortcut icon' href='../css/logo.png'/> <title>Attendance observation</title>
<link rel="stylesheet" href="../extensions/fawe/fontawesome.css" >
<div class="mid" style="height: 100vh;">
<script
  src="../extensions/jq.js"
  ></script>
  <link rel="stylesheet" href="../extensions/bootstrap.css" >
<script src="../extensions/bootstrap.js"></script>
<style>


/* Important part */
.modal-dialog{
    overflow-y: initial !important
}
.modal-body{
    height: 100%;
    overflow-y: auto;
}
</style>
<?php
include_once '../head.php';
if(!isset($_SESSION['uid5'])){
  header('../index.php');
}
?>
<?php
include '../fonts.php';
include 'inheader.php';
 ?>
<center><h2 style='float:left;font-family:Cursive;margin-left:25%;'>Search For Observation Of Attendance Of Classes</h2></center>
<br><br><select id="classes" style="width: 20%;font-size:20px;height: 40px;margin-left:25%;">
<option value=''>Select Class</option>
  <option>Nursery</option>
  <option>L.K.G</option>
  <option>U.K.G</option>
<?php
for($i=1;$i<=12;$i++){
  echo "<option>Grade"." $i</option>";
}
?>
</select>
<br><br><select id="sections" style="float:left;width: 20%;font-size:20px;height: 40px;margin-left:25%;">
<option value=''>Select Sections</option>
  <option>A</option>
  <option>B</option>
  <option>C</option>
  <option>D</option>
  <option>E</option>

</select>
<br><br><br>
<div id="container" style="position:absolute;right:5%;font-family:Roboto;">

</div>
<script>
$('#classes' && '#sections').on('change',function(){
if($('#classes').val()!=''&&$('#sections').val()!=''){
$.post('attandence_observescript.php',{
  class : $('#classes').val(),
  sec : $('#sections').val(),
  observe_attend : "200"
},function(data){
$('#container').html(data);
})
}
})
</script>
</div>