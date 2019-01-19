<?php
$conn = mysqli_connect('localhost','root','','school');
if(isset($_POST['delete'])){
  $teacher = $_POST['uemail'];
  $sql = "DELETE FROM `teachers.detail` WHERE email ='$teacher'";
  $result = mysqli_query($conn,$sql);
  if($result){
    echo "Changes Saved";
  }
}

if(isset($_POST['some_edit'])){
  $teacher  = $_POST['uemail'];
  $class = $_POST['class'];
  $sec = $_POST['sec'];
  $sql = "UPDATE `teachers.detail` SET `assigned.class` = '$class',`assigned.section`='$sec' WHERE
  `email` = '$teacher'";
  $result = mysqli_query($conn,$sql);
  if($result){
    echo "Changes Saved";
  }
}
