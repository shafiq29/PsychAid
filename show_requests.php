<?php
session_start();
$psyid=$_SESSION['user_id'];
include("connection.php");
$note="<table class='table'><tr class='danger'>"."<th>"."Subject"."</th><th>"."Details"."</th><th>"."Prefered Time"."</th><th>"."Post Date"."</th><th>"."Photo"."</th><th>"."Decide"."</th></tr>";

$dat=mysql_query("SELECT * from problems where PsychiatristId='$psyid' && ConnectionState='0'");
if(mysql_num_rows($dat)>0){
  while($row=mysql_fetch_array($dat)){
   $i=$row['Pat_Id'];
   $dat2=mysql_query("SELECT ProPic from patients where PatientId='$i'");
   $resq=mysql_fetch_array($dat2);
   $imgpath=$resq['ProPic'];

    $note.="<tr class='success'>";
    $note.="<td>".$row['Subject']."</td><td>".$row['Details']."</td><td>".$row['PreferedTime']."</td><td>".$row['Creation_Date']."</td><td><img src='".$imgpath."'' class='img-responsive' alt='Cinque Terre' width='50' height='10'></td><td class='tell' id='".$i."'>	<button class='btn btn-info'>Handle</button></td>";
    $note.="</tr>";
  }
  echo $note."</table>";
}else{
  echo "<h2>No requests Right now!</h2>";
}
?>

 


<!DOCTYPE html>
<html lang="en">
  <head> 
    
    <script type="text/javascript" src="js/update.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {
        

        $('.tell').click(function(){
         
      	temp=this.id;
      	//alert(temp);
          post_data = {
            info: temp
        };
        $.post("accept_req.php", post_data, function(e) {
             $("#req_list").load("show_requests.php");
        });


        });
        
        

      });
    </script>

   
  </head>

  <body>
    
  </body>
</html>
