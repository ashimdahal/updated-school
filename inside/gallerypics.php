<div class="gallery-container" style="margin-left:255px;">
  <script
    src="../extensions/jq.js"
  ></script>
  <?php
  include '../includes/dbcon.php';
  $sql =  "SELECT * FROM images ORDER BY orderid";
  $stmt = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt,$sql);
  mysqli_stmt_execute($stmt);
   $result = mysqli_stmt_get_result($stmt);

   while ($row = mysqli_fetch_assoc($result)) {
     echo '
       <div style="border:1px solid black">
     <a href="#" >
     <div style= class="imageholder" >
     <img width="320px"
     height="260px" src="../uploads/image/'.$row["imagename"].'"></img>
     </div>
       <h2>Event: '.$row["imageevent"].'</h2>
       <h3>Description: '.$row["imagedesc"].'</h3>
       <h4>Uploaded by: '.$row["uploader"].'</h4>
       </a>
      ';
       if (isset($_SESSION['uid']) || isset($_SESSION['uid5'])) {
        echo '   <form method="POST" action="../includes/deletepic.php" style="
         float:right;
       ">
        <input type="hidden" value="'.$row["imageid"].'" name="imgid"></input>
        <input type="hidden" value="'.$row["imagename"].'" name = "imgname"></input>
       <button type="submit" name="delete" id="deletepic">Delete</button>
       </form>
</div>';
       }


   }


   ?>
   <script>
  function prev_img(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      

      reader.onload =  function(e){
      $('.prev_img').attr('src',e.target.result);
      }
  }

reader.readAsDataURL(input.files[0])
  }
   $('input[type="file"]').change(function(){
     prev_img(this)
   })
   </script>
