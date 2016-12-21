<?php
include("connection.php");
$wildcard=$_POST['inf'];
$note="<table class='table'><tr class='danger'>"."<th>"."Name"."</th><th>"."Field of Expertise"."</th><th>"."Email"."</th><th>"."Photo"."</th></tr>";
if(!empty($_POST['inf'])){
$dat=mysql_query("SELECT * from psychiatrists where FieldOfExp LIKE '%$wildcard%';");
}else{
	$dat=mysql_query("SELECT * FROM psychiatrists WHERE 1 = 0");
}
if(mysql_num_rows($dat)>0){
  while($row=mysql_fetch_array($dat)){
   	$note.="<tr class='success'>";
    $note.="<td>".$row['FirstName']."</td><td>".$row['FieldOfExp']."</td><td>".$row['Email']."</td><td><img src='".$row['ProPic']."'' class='img-responsive' alt='Cinque Terre' width='50' height='10'></td>";
    $note.="</tr>";
  }
  echo $note."</table>";
}else{
	echo "<h2> No such disease in the list righ now!</h2>"; 
}

?>