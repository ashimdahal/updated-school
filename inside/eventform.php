<?php
if (isset($_SESSION['uid']) || isset($_SESSION['uid5'])) {
  echo '  <form class="eventform"action="../includes/ramailo.php" method="POST">
      <input type="hidden" name="noticeby" value="'.$_SESSION['first'].'"> <br>
    <input type="text" name="eventname" placeholder="Event Name"> <br>
      <input type="text" name="eventorganizer" placeholder="Organizer of event?"><br>
      <select name="type">
        <option>Select the type</option>
        <option>Competition</option>
        <option>Cultural</option>
        <option>Something different</option>

      </select> <br>
  <input type="date" name="date" placeholder="Select the date"/> <br>
  <button type="submit" name="submit" class="addevent">Add Event</button>
    </form>';
}
