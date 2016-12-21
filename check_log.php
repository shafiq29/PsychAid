<?php
	include("validate.php");
	$email="";
	$pass="";
	$who=$_POST['who'];
	if(!empty($_POST['ema'])&&!empty($_POST['pa'])){
		$email=$_POST['ema'];
		$pass=$_POST['pa'];
		$checker= new Validator;
		$checker->checkLogin($email,$pass,$who);
	}
	else{
		echo "Empty username or password!";
	}
?>