<?php
date_default_timezone_set('Asia/Kathmandu');

    $date = date('Y-m-d');
    $ts1 = strtotime($date);
    $year1 = date('Y', $ts1) + 56;
    $month1 = date('m', $ts1) + 8;
    $day1 = date('d', $ts1) + 14;

    if($month1 >12) {
      $year1 = $year1+1;
      //$remMonth = $month1-12;
      $month1 = $month1-12;
    }

    if($day1 >30) {
       $month1 = $month1+1;
      //$remMonth = $month1-12;
       $day1 = $day1-30;
    }

    //$day1 = date('d', $ts1);

    $year1."-".$month1."-".$day1;
  if($month1==1){

  $month = "Baisakh";
}
if($month1==2){

  $month = "Jestha";
}
if($month1==3){

  $month = "Asar";
}
if($month1==4){

  $month = "Sarwan";
}
if($month1==5){

  $month = "Bhadra";
}
if($month1==6){

  $month = "Aswin";
}
if($month1==7){

  $month = "Kartik";

}

if($month1==8){

  $month = "Mangsir";
}

if($month1==9){

  $month = "Poush";
}
if($month1==10){

  $month = "Magh";
}
if($month1==11){
$month = "Falgun";
}
if($month1==12){

  $month = "Chaitra";
}
if(isset($_POST['observe_attend'])){
  $conn = mysqli_connect('localhost','root','','school');
  $class = $_POST['class'];
  $sec = $_POST['sec'];
  $sql = "SELECT * FROM absent_present WHERE Class='$class' AND Section='$sec'";
  $result = mysqli_query($conn,$sql);
    $total_absent_tillnow = 0;
  while($row = mysqli_fetch_assoc($result)){
    $total_absent_tillnow += $row['total_absent'];
  }
$total_absent_first6month = 0;
$total_absent_last6month = 0;
$firstmonth = array('Baisakh','Jestha','Asar','Sarwan','Bhadra','Aswin');
foreach ($firstmonth as $key => $value) {
$sql2 = "SELECT * FROM absent_present WHERE Class='$class' AND Section='$sec' and month='$value'";
  $result2 = mysqli_query($conn,$sql2);
  $check2 = mysqli_num_rows($result2);

  while($row2 = mysqli_fetch_assoc($result2)){
    $total_absent_first6month += $row2['total_absent'];


}

}
$lastmonth = array('Kartik','Mangsir','Poush','Magh','Falgun','Chaitra');
foreach ($lastmonth as $key => $value) {
$sql3 = "SELECT * FROM absent_present WHERE Class='$class' AND Section='$sec' and month='$value'";
  $result3 = mysqli_query($conn,$sql3);
  $check3 = mysqli_num_rows($result3);
  while($row3 = mysqli_fetch_assoc($result3)){
    $total_absent_last6month += $row3['total_absent'];
  }


}
$allmonths = array('Baisakh','Jestha','Asar','Sarwan','Bhadra','Aswin','Kartik',
'Mangsir','Poush','Magh','Falgun','Chaitra');

echo '<div class="card text-center">
  <div class="card-header">
    Total Attendance Records
  </div>
  <div class="card-body">
    <p class="card-title">Realtime Count Of Absent Students<br> '.$total_absent_tillnow.'</p>
    <h5 class="card-text">Absent Students of First 6 months <br>
    '.$total_absent_first6month.'</h5><br>
    <h5 class="card-text">Absent Students of Last 6 months <br>
    '.$total_absent_last6month.'</h5>
    <button class="btn btn-primary">Detailed Observation
    ';


  echo'  </button>';
  if($total_absent_tillnow ==0){

  }else{
    echo '
    <div class="modal fade bd-example-modal-lg" id="big_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalCenterTitle">Your Detailed Observation
      (Total Absent Records)</h5>
      <button type="button" class="close"  aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
    <table class="table table-bordered">
<thead>
  <tr>
    <th scope="col">Days/Months</th>
';for($i=1;$i<=30;$i++){
echo'<th scope="col">'.$i.'th Day</th>
';
}
echo'</tr>
</thead>
<tbody>';

foreach ($allmonths as $key => $value) {
echo '<tr>';
echo'<td>'.$value.'</td>';
for($i=1;$i<=30;$i++){
$sql4 = "SELECT * FROM absent_present WHERE Class='$class' AND Section='$sec' and month='$value' AND Day='$i'";
  $result4 = mysqli_query($conn,$sql4);
$check4 = mysqli_num_rows($result4);

  if($check4 == 0){
      $absent = "No Data Available";
      $studentsname = "No data";
  }else{
while($row4 = mysqli_fetch_assoc($result4)){


  $absent = $row4['total_absent'];
  $studentsname = $row4['names_of_std'];
  }

}
echo "<td class='absent_Check' style='cursor:pointer'>$absent Absent";

echo '<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Students Names</h5>
        <button type="button" class="close"   aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>';
foreach (explode(',',$studentsname) as $key => $val) {
  echo ($key+1).'.'.' '.$val.'<br>';
  // code...
}
        '</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div></td>';
}
echo '</tr>';
}





echo'</tbody>
</table>
    </div>
  </div>
</div>
</div>
  </div>
  <div class="card-footer text-muted">
    Of '.$class.'<br>Section'.$sec.'
  </div>
</div>';

if($total_absent_tillnow == 0){

}else{
  echo "<script>
$('button').click(function(){
  $('#big_modal').modal('show');

});
$('.absent_Check').click(function(){
  $(this).children().modal('show');
})
$('.close').click(function(){
  if($(this).parent().parent().parent().parent().attr('id') == 'big_modal'){
    $('#big_modal').modal('hide');
    $('.modal-backdrop').removeAttr('class');
  }else{
$(this).parent().parent().parent().parent().css('display','none');
  }
})
  </script>";
}

}
}
