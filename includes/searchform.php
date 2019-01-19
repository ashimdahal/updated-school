<?php
if (isset($_SESSION['id']) || isset($_SESSION['uid']) || isset($_SESSION['uid5'])) {
  echo '<center>
  <form style="margin-top:15px;height:38px;"action="searchstd.php" method="post">

<div style="width:50%;background:white;text-align:left;">

   <input type="text" name="text" class="searchinput" placeholder="Search " >
  <button type="submit" class="searchbtn" name="search"><i class="fas fa-search" style="height:100%"></i></button>
  </input>
<div>
  </form>
  </center>';
}
 ?>
