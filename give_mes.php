<?php
	include("connection.php");
	session_start();
	$me=$_SESSION['user'];
	$mode=$_SESSION['mode'];	
	$my_id=$_SESSION['user_id'];
	$ext=$_POST['ext'];
	//$ext=1;
	if($mode=="patient"){
		$qu=mysql_query("SELECT * FROM messages where Pat_Id='$my_id' && PsychiatristId='$ext'");
	}elseif($mode=="psychiatrist"){
		$qu=mysql_query("SELECT * FROM messages where Pat_Id='$ext' && PsychiatristId='$my_id'");
	}
	
	
	$te="";
	while($res_2=mysql_fetch_array($qu)){
		// $sel_id=$res['id'];
		// //****************************************************************************
		if($mode=="patient"){
			$pa2=mysql_query("SELECT ProPic FROM patients where PatientId='$my_id' ",$con);
		$rpath2=mysql_fetch_array($pa2);
		$trpath2=$rpath2['ProPic'];
		}
		elseif ($mode=="psychiatrist") {
			$pa=mysql_query("SELECT ProPic FROM psychiatrists where PsychiatristId='$ext' ",$con);
		$rpath=mysql_fetch_array($pa);
		$trpath=$rpath['ProPic'];
		}
		

		// //****************************************************************************
		// //****************************************************************************
		

		// //****************************************************************************
		if($res_2['fr']=='0'){
			$te.="<div class='bubbledRight'>  <img src='".$res_2['propic']."' height='40' width='40' align='right'>".$res_2['Message']." <br></div>";

		}
		elseif($res_2['fr']=='1' ){
			$te.="<div class='bubbledLeft'> <img src='".$res_2['propic']."' height='40' width='40' >".$res_2['Message']."<br></div>";
		}
	}

	$la = array(">:D", ":-D", ":D");
			$cry = array(":;(");
			$vex = array(":P");
			$surp = array(":o",":O");
			$sad = array(":(");
			$ang = array(">_<");
			$kiss = array(":*");
			$dev = array("3:)");
			$wink = array(";)");
			$cool = array("B)");
			$ns = array(":)");

			$las = "<img src='emo/emotion_grin.png' height=20 width=20>";
			$crys = "<img src='emo/emotion_too_sad.png' height=20 width=20>";
			$vexs = "<img src='emo/emotion_tongue.png' height=20 width=20>";
			$surps = "<img src='emo/emotion_suprised.png' height=20 width=20>";
			$sads = "<img src='emo/emotion_sad.png' height=20 width=20>";
			$angs = "<img src='emo/emotion_mad.png' height=20 width=20>";
			$kisss = "<img src='emo/emotion_kiss.png' height=20 width=20>";
			$devs = "<img src='emo/emotion_devil.png' height=20 width=20>";
			$winks = "<img src='emo/emotion_wink.png' height=20 width=20>";
			$cools = "<img src='emo/emotion_cool.png' height=20 width=20>";
			$nss = "<img src='emo/emotion_bigsmile.png' height=20 width=20>";
			
			$te = str_replace($la,$las,$te);
			$te = str_replace($cry,$crys,$te);
			$te = str_replace($vex,$vexs,$te);
			$te = str_replace($surp,$surps,$te);
			$te = str_replace($sad,$sads,$te);
			$te = str_replace($ang,$angs,$te);
			$te = str_replace($wink,$winks,$te);
			$te = str_replace($kiss,$kisss,$te);
			$te = str_replace($dev,$devs,$te);
			$te = str_replace($cool,$cools,$te);
			$te = str_replace($ns,$nss,$te);

	echo $te;
?>