<?php
include("connection.php");
$note="";

$dat=mysql_query("SELECT * from psychiatrists");
if(mysql_num_rows($dat)>0){
  while($row=mysql_fetch_array($dat)){
   
    
    $note.="<option>".$row['Email']."</option>";
   
  }
}

echo "<div class='container'>
  <h2>Create your problem and select preffered expert</h2>
  <form role='form' method='post' action='create_problem.php'>
    <div class='form-group'>
      <label for='subject'>Subject:</label>
      <input type='text' class='form-control' id='sub' placeholder='Enter subject' name='sub'>
    </div>
   <div class='form-group'>
  <label for='det'>Details:</label>
  <textarea class='form-control' rows='5' id='det'  name='det'></textarea>

<div class='form-group'>
  <label for='sel1'>Select Slot:</label>
  <select class='form-control' id='sel1' name='slot'>
    <option>9:00am-10:00am</option>
    <option>10:15am-11:15am</option>
  </select>
</div>

<div class='form-group'>
  <label for='sel2'>Email of Psychiatrist:</label>
  <select class='form-control' id='sel2' name='ema'>
   $note
  </select>
</div>

</div>
    <button type='submit' class='btn btn-default' name='subm'>Submit</button>
  </form>
</div>

</body>
</html>"; ?>