<script
<script
  src="../extensions/jq.js"
></script>
  <link href="../extensions/bootstrap.css" rel="stylesheet">
  <link rel='shortcut icon' href='../css/logo.png'>
  <link rel="stylesheet" href="../extensions/fawe/css/fontawesome.css">
<?php
include '../head.php';
include '../includes/dbcon.php';
include 'inheader.php';
include '../footer.php';
 ?>



<title>Search Students</title>

<div class="mid" style="margin-left:250px;height:100%;background-attachment:fixed;">
<p class="texttitle">Search Results</p>
<?php

include '../includes/searchform.php';
?>
  <div class="student-container">

<?php
if (isset($_POST['search'])) {
  $search = mysqli_real_escape_string($conn,$_POST['text']);
  $searchexplode = explode('grade ',$search);
  $var = end($searchexplode);
  if (!empty($search)) {
  $sql = "SELECT * FROM `std.parent` where firstname like '%$search%' OR lastname like '%$search%'OR lastname like '%$search%' OR  username LIKE '%$search%'  OR `stdfullname` LIKE '%$search%' OR class like '%$var%' OR parentname LIKE '%$search%'";

    $result = mysqli_query($conn,$sql);
    $queryResult = mysqli_num_rows($result);
    if ($queryResult > 0) {
      while ($row= mysqli_fetch_assoc($result)) {
        echo '<div class="student-holder">


           <div id="std-details">

            <p>Name:'.$row['firstname'].'  '.$row['lastname'].'
            </p>
            <p>Class: '.$row['class'].'
            </p>
            <p>Section: '.$row['section'].'
            </p>
            <p>Class Teacher`s Email: '.$row['cteacher'].'
            </p>
            <button type="submit" name="details" class="parent_d">Show Parents details <i class="fas fa-forward" style="margin-left:6px;"></i></button>
           </div>


           <div class="div" style="display:none;">
             <p>Parents number: '.$row['phone.number'].'
            </p>
            <p>Username: '.$row['username'].'
            </p>
            <p>Parents Email: '.$row['email'].'
            </p>
            <p>Parents Name: '.$row['parentname'].'
            </p>
            <button type="submit" name="button" class="std_d"> See students detail <i class="fas fa-forward" style="margin-left:6px;"></i></button>
           </div>


        </div>';
      }
    }else {
      echo '<p class ="nosearch">No such Student found</p>';
    }



  }else {
    echo '<p class ="nosearch">Search empty</p>';
  }


}else {
  header('location: studentdetails.php');
}
 ?>

  </div>


<?php

 ?>
</div>




<script>
$('.parent_d').click(function(){
	$(this).parent().parent().find('.div').show(500);
	$(this).parent().hide(500);
})
$('.std_d').click(function(){
	$(this).parent().parent().find('#std-details').show(500);
	$(this).parent().hide(500);

})
</script>
