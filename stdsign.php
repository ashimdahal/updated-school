<?php
include "head.php";
include "includes/dbcon.php";
 ?>
 <title>Students/Parents Registration</title>
<form class="signup-form" action="includes/stdsign.php" method="POST">
  <input type="text" name="fname" placeholder="First Name of Student">
  <input type="text" name="sname" placeholder="Last Name of Student">
  <input type="text" name="phn" placeholder="Parents Phone Number">
  <input type="text" name="uid" placeholder="username"><br>
  <label for='grade' style='font-family:cursive;'>Which Grade Are You In?</label><br>
  <select id='grade' name='class'><?php
  echo "<option style='font-family:Cursive;'>Nursery</option>";
  echo "<option style='font-family:Cursive;'>L.K.G</option>";
  echo "<option style='font-family:Cursive;'>U.K.G</option>";
for($i=1;$i<=12;$i++){
echo '<option style="font-family:Cursive;">Grade '. $i.'</option>';
}
   ?></select>
   <br><br><br><label for='section' style='font-family:cursive;'>Which Section are you in?</label><br>
     <select id='section' name='sec'>
       <option>A</option>
       <option>B</option>
       <option>C</option>
       <option>D</option>
       <option>E</option>
     </select>
  <br><br>

  <input type="text" name="email" placeholder="Parents Email Adress">
    <input type="text" name="parent" placeholder="Parents full name">
   <br><br><br><label for='teacher' style='font-family:cursive;'>Who is your class teacher?</label><br>
  <select id='teacher' name='cl_teacher'>
    <?php
$sql = "SELECT * FROM `teachers.detail`";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
  echo "<option value='".$row['email']."'>".$row['firstname'].' '.$row['lastname'].' Sir</option>';
}

    ?>
  </select>
  <br>
  <input type="password" name="pwd" placeholder="Password">
  <input type="password" name="scode" placeholder="School Interaction Code For Student Validity">
  <button type="submit" name="submit" class=".btn">Register</button>
</form>
 <?php
echo "<br><br>";
include 'footer.php';
  ?>
