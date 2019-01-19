<title>Students of School</title>
<script
  src="../extensions/jq.js"
></script>
<link href="../extensions/bootstrap.css" rel="stylesheet">
<link rel='shortcut icon' href='../css/logo.png'>
<link rel="stylesheet" href="../extensions/fawe/css/fontawesome.css">

<?php
include '../head.php';
include '../includes/dbcon.php';
if (isset($_SESSION['uid']) || isset($_SESSION['uid5'])) {
include 'inheader.php';

}
else if (isset($_SESSION['id'])) {
include 'inheader.php';

}else {
  header('Location: ../index.php');
  exit();
}

include '../footer.php';
 ?>
<div class="mid" style="margin-left:250px;height:100%;background-attachment:fixed;">
<p class="texttitle">Students</p>
<?php
include '../includes/searchform.php';
 ?>
<div class="student-container" >


<?php
$conn = mysqli_connect("localhost", "root", "", "school");
$sql = "SELECT * FROM `std.parent`Limit 4";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$sql);
mysqli_stmt_execute($stmt);
 $result = mysqli_stmt_get_result($stmt);
while ($row= mysqli_fetch_assoc($result)) {

	echo '	 <div class="student-holder">


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

 ?>








 </div>


<div class="button-comtains">


   <button type="button"class="showmorestds" name="button">Load More</button>
</div>
</div>

<script>
$('.parent_d').click(function(){
	$(this).parent().parent().find('.div').show(750);
	$(this).parent().hide(750);
});
$('.std_d').click(function(){
	$(this).parent().parent().find('#std-details').show(750);
	$(this).parent().hide(750);

});

    var stdcount = 4;
    $(".showmorestds").click(function() {
      stdcount +=2;
      $(".student-container").load("load-stds.php",{
        stdNewCount:stdcount
      });

    });

</script>
