<?php
include("connection.php");
$note="<table class='table'><tr class='danger'>"."<th>"."Name"."</th><th>"."Field of Expertise"."</th><th>"."Email"."</th><th>"."Photo"."</th></tr>";
$dat=mysql_query("SELECT * from psychiatrists");
if(mysql_num_rows($dat)>0){
  while($row=mysql_fetch_array($dat)){
   	$note.="<tr class='success'>";
    $note.="<td>".$row['FirstName']."</td><td>".$row['FieldOfExp']."</td><td>".$row['Email']."</td><td><img src='".$row['ProPic']."'' class='img-responsive' alt='Cinque Terre' width='50' height='10'></td>";
    $note.="</tr>";
  }
  echo $note."</table>";
}else{
	echo "No psychiatrists right now!";
}

?>