<?php
session_start();
$pid=$_SESSION['user_id'];
include("connection.php");
$note="<table class='table'><tr class='danger'>"."<th>"."Subject"."</th><th>"."Details"."</th><th>"."Prefered Time"."</th><th>"."Post Date"."</th><th>"."Name"."</th><th>"."Email"."</th><th>"."Expert Photo</th><th>"."Status</th><th>"."Consult</th></tr>";

$dat=mysql_query("SELECT * from problems where Pat_Id='$pid' && ConnectionState='1'");
if(mysql_num_rows($dat)>0){
  while($row=mysql_fetch_array($dat)){

   $i=$row['PsychiatristId'];
   $dat2=mysql_query("SELECT ProPic,FirstName,Email,OnlineNow from psychiatrists where PsychiatristId='$i'");
   $resq=mysql_fetch_array($dat2);
   $imgpath=$resq['ProPic'];
   $onl=$resq['OnlineNow'];
   $str="";
   if($onl=="1"){
   	$str="Online";
   }else{
   	 	$str="Offline";
   }

    $note.="<tr class='success'>";
    $note.="<td>".$row['Subject']."</td><td>".$row['Details']."</td><td>".$row['PreferedTime']."</td><td>".$row['Creation_Date']."</td><td>".$resq['FirstName']."</td><td>".$resq['Email']."</td><td><img src='".$imgpath."'' class='img-responsive' alt='Cinque Terre' width='50' height='10'></td><td>".$str."</td><td class='open_chat' id='".$i."'>	<button class='btn btn-info'>Start</button></td>";
    $note.="</tr>";
  }
  echo $note."</table>";
}
else{
  echo "<h2>No connection Right now!</h2>";
}
?>

 
<!DOCTYPE html>
<html lang="en">
  <head> 
    
    <script type="text/javascript" src="js/update.js"></script>
     <script type="text/javascript" src="js/send_mes.js"></script>
     <script type="text/javascript" src="js/loader.js"></script>
    <script type="text/javascript">


          	var old=40;
			var current=0;
			
		function open_chat(pos,name){
			//alert(pos);
			current=pos;
			posi={'pos': pos, 'name':name};
		
			$.post('create_box.php', posi , function(data) {
				$('body').append($(data));
				//$('.'+pos).css('left',  old+'%');
				//alert(data);
			});
	
			
		}
      $( document ).ready(function() {
        
  

         $('.open_chat').click(function(){
         
          //alert(this.id);
          $(".rem" + current).parent("div#box").remove();
          open_chat(this.id,'test')
          
          });
        
        
         $(document).on("click", ".cro", function() {
        // alert(this.id);
         $(".rem" + this.id).parent("div#box").remove();
        });

         $(document).on("click", "#box_top", function() {
            $("#box_mid").slideToggle();
            if (e == 0) {
                e = 1;
                  // $(".holder").css("background-image", "url(img_icon/comments_delete.png)")
                
            } else {
                e = 0;
             //$(".holder").css("background-image", "url(img_icon/comments_add.png)")
            }
          })

      });
    </script>
     <link href="css/chat_box.css" rel="stylesheet">
   
  </head>

  <body>
    
  </body>
</html>


