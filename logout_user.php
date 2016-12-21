<?php
session_start();
include("connection.php");
	$un=$_SESSION['user'];
	$uid=$_SESSION['user_id'];
	$mode=$_SESSION['mode'];
	//echo $un.$uid.$mode;
	if($mode=="patient"){
		mysql_query("UPDATE patients SET OnlineNow=0 WHERE PatientId='$uid'",$con);
		unset($_SESSION['user']);
		unset($_SESSION['user_id']);
		unset($_SESSION['mode']);
	}elseif($mode=="psychiatrist"){
		mysql_query("UPDATE psychiatrists SET OnlineNow=0 WHERE PsychiatristId='$uid'",$con);
		unset($_SESSION['user']);
		unset($_SESSION['user_id']);
		unset($_SESSION['mode']);
	}
	
	header("Location: login_user.php");
?>