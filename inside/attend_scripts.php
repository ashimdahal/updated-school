<?php
//The Vikram Samvat calendar is 56 years 8 months and 14 days ahead (in count) of the solar Gregorian calendar
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
if(isset($_POST['add_absent'])){
  $conn = mysqli_connect('localhost','root','','school');
  $total_absent = $_POST['total_absent'];
$class = $_POST['class'];
$sec = $_POST['section'];
$clteacher = $_POST['class_teacher'];
$year = $year1;
$current_month = $month;
$day = $day1;
$explodedstd = explode(',',$_POST['students']);
$student = json_encode($_POST['students'],true);
$sql = "INSERT INTO absent_present(Class_Teacher,Class,Section,Year,month,day,total_absent,names_of_std)
VALUES('$clteacher','$class','$sec','$year','$month','$day','$total_absent',$student)";
$result = mysqli_query($conn,$sql);
if($result){
  echo "Todays Attendance Saved & absent student's parents are emailed.";
  //EACH EMAILS

 /*foreach ($explodedstd as $key => $value) {
    $sql2 = "SELECT * FROM `std.parent` WHERE firstname = '$value'";

    $result2 = mysqli_query($conn,$sql2);
    while($row2 = mysqli_fetch_assoc($result2)){
      $parentemail = $row2['email'];
      $message = "<html>
      <head>
      <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
      <style>
      header{user-select: none;
         width: 100%;
         height: 70px;
         margin:0px;
         position:absolute;
         top:0px;
         background: rgba(107, 180, 252, 0.6);}
         .container{
           font-family:monospace;
           position:relative;
           top:-20px;
           background:orange;
           box-shadow:0px 0px 5px 0px;
           height:100%;
         }
         h2{
           font-size:26px;
         }
         h3{
           font-size:24px;
         }
      </style>
      </head>
      <body>
      <header>

      </header>
      <div class='container'>
      <h2>Hello $parentemail </h2>
      <h3>Greetings,<br>Today $value is been found absent on the school . So,this email is for kindly
      Informing The Absence of Your Son/Daughter $value in the school .<br>
      Thank You - Balmiki Education Foundation</h3>
      </div>
      </body>
      </html>";
      ini_set("SMTP","smtp.gmail.com");
      ini_set("smtp_port","587");
      ini_set("sendmail_from","bboxchmpx@gmail.com>");
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= 'From: <www.balmiki.edu.np>' . "\r\n";
      $headers .= 'Cc: '.$parentemail.'' . "\r\n";
      $mail = mail($parentemail,"Absense Of Your $value",$message,$headers);
    }

}*/
}
}
