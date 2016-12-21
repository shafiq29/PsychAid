<?php
  $pos="";
  $name="test";
if(!empty($_POST['pos']) ){
  $pos=$pos.$_POST['pos'];
  //$name=$name.$_POST['name'];
}
include('connection.php');
session_start();
$mode=$_SESSION['mode'];
if($mode=="patient"){
$q=mysql_query("SELECT FirstName from psychiatrists where PsychiatristId='$pos'");
}elseif ($mode=="psychiatrist") {
$q=mysql_query("SELECT FirstName from patients where PatientId='$pos'");
}
$say=mysql_fetch_array($q);
$name=$say['FirstName'];
echo '<div id="box"  class="'.$pos.'">
    <div id="box_top" class="rem'.$pos.'">
     '. $name.'
        <div class="cro"  id="'.$pos.'">
        </div>
    </div> 
    <div id="box_mid" >
      <div id="box_mid_in" class="box_mid">
      </div>
      <input type ="text" placeholder="Enter message " id="ent"/>
    </div>
  </div>';
?>