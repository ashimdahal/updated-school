<style >

</style>
<?php
$stdNewCount = $_POST['stdNewCount'];
$conn = mysqli_connect("localhost", "root", "", "school");
$sql = "SELECT * FROM `std.parent` Limit $stdNewCount";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$sql);
mysqli_stmt_execute($stmt);
 $result = mysqli_stmt_get_result($stmt);
while ($row= mysqli_fetch_assoc($result)) {

	echo '
<div class="student-holder">

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

</div>
	';


}

 ?>
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
 </script>
