<?php
	session_start();
	$me=$_SESSION['user_id'];
	$mode=$_SESSION['mode'];
	include("connection.php");
	date_default_timezone_set("Asia/Dacca") ;
    date_default_timezone_get();
    $dt=date("l jS \of F Y h:i:s A");
	$ext=$_POST['who'];
	$text=$_POST['message'];
	//$ext=1;
	// $q=mysql_query("SELECT * FROM psychiatrists where PsychiatristId='$ext' ",$con);
	// $res=mysql_fetch_array($q);
	// $tod= $res['FirstName'];
$trpath="empty";
	if($mode=="patient"){
			$pa2=mysql_query("SELECT ProPic FROM patients where PatientId='$me' ",$con);
		$rpath2=mysql_fetch_array($pa2);
		$trpath=$rpath2['ProPic'];
		}
		elseif ($mode=="psychiatrist") {
			$pa=mysql_query("SELECT ProPic FROM psychiatrists where PsychiatristId='$me' ",$con);
		$rpath=mysql_fetch_array($pa);
		$trpath=$rpath['ProPic'];
		}
	$text = preg_replace('/\s+/', ' ', $text);
	
	if($text==" "){
		$text = preg_replace('/\s+/', '', $text);

	}
	
	
	if($text!=null ){
		if($mode=="patient"){
			$qu=mysql_query("INSERT INTO messages (MsgDate, Message, Pat_Id, PsychiatristId,fr,tom,propic) VALUES ('$dt', '$text', '$me','$ext','0','1','$trpath') ");
		}elseif($mode=="psychiatrist"){
			$qu=mysql_query("INSERT INTO messages (MsgDate, Message, Pat_Id, PsychiatristId,fr,tom,propic) VALUES ('$dt', '$text', '$ext','$me','1','0','$trpath') ");
		}
			
			
		
	}
	
	echo "success!";
	
?>