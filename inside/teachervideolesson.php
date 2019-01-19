<?php
if (isset($_SESSION['uid']) || isset($_SESSION['uid5'])) {
  echo '<form action="../includes/video.php" method="POST" enctype="multipart/form-data">
    <div class="uploadvid">
      <input type="hidden" name="filename" value="lesson">
      <input type="hidden" name="user" value="'.$_SESSION['first'].'"><br>
      <label for="rcmd_clas">Which class is the video recommended?</label>
      <select name="class" id="rcmd_clas">
      <option>Nursery</option>
      <option>L.K.G</option>
      <option>U.K.G</option>
      ';
      for($i=1;$i<=12;$i++){
        echo "<option>Grade"." $i </option>";
      }
      echo'</select>

      <input type="text" name="title" placeholder="Topic of video??"><br>
      <input type="text" name="desc" placeholder="short Description"><br>
      <label for="file">

          <span class="glyphicon glyphicon-folder-open" style="margin-bottom:5px;cursor:pointer;font-size:30px;"aria-hidden="true"> Select Video</span>
          <input type="file" name="file" id="file" style="display:none">
        </label><br>
      <button type="submit" name="submit">Upload <i class="fas fa-cloud-upload-alt"></i></button>
    </div>
  </form>';
}
 ?>
