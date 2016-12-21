<?php
session_start();
$pid=$_SESSION['user_id'];
date_default_timezone_set("Asia/Dacca") ;
date_default_timezone_get();
$dt=date("l jS \of F Y h:i:s A") . "<br>";
//echo $dt;
  include("connection.php");
  if(isset($_POST['subm'])){
    if(isset($_POST['sub']) && !empty($_POST['det']) && !empty($_POST['slot']) && !empty($_POST['ema'])){
        $sub=$_POST['sub'];
        $det=$_POST['det'];
        $slo=$_POST['slot'];
        $ema=$_POST['ema'];
        $test=mysql_query("SELECT PsychiatristId from psychiatrists where email='$ema'");
        $psyid=mysql_fetch_array($test);
        $psyidReal=$psyid['PsychiatristId'];
        $sql = mysql_query("INSERT INTO problems (Subject,Details,PreferedTime,Creation_Date,Pat_Id,PsychiatristId,ConnectionState)
        VALUES ('$sub','$det','$slo','$dt','$pid','$psyidReal','0')");
        //echo $dt.$pid.$psyidReal;
        $sql2 = mysql_query("INSERT INTO connections (Fr,NotiDate,Event,Pat_Id,PsychiatristId,New,Status) VALUES('0','$dt','New Problem request','$pid','$psyidReal','1','0')");
          echo "<div class='button'>Request Sent !
 Please wait till 
response</div>
";
 header("Refresh: 4; url=\"patient_prof.php\"");

    } 
  }  
?>
<html lang="en">
  <head>
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/my_design.css" rel="stylesheet">
    <link href="css/chat_box.css" rel="stylesheet">
    <link href="css/notify.css" rel="stylesheet">
    </body>
</html>
