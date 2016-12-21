<?php
include("connection.php");
	if(isset($_POST['reg'])){
		if(isset($_POST['fe']) && !empty($_POST['fe'])){
			if(!empty($_POST['fn']) && !empty($_POST['ln']) && !empty($_POST['em']) 
				&& !empty($_POST['pa'])  
			){
				$fname=$_POST['fn'];
				$lname=$_POST['ln'];
				$email=$_POST['em'];
				$pass=md5($_POST['pa']);
				$foe=$_POST['fe'];
			
				$test=mysql_query("SELECT email from psychiatrists where email='$email'");
				if(mysql_num_rows($test)>0){
					echo "This email has already been registered! Try a new one... ";
				}else{
					$sql = mysql_query("INSERT INTO psychiatrists(LastName,FirstName,ProPic,FieldOfExp,Email,Password)
					VALUES ('$lname','$fname','img_icon/blank_pic.jpg','$foe','$email','$pass')");
					echo "Registered! Please wait, redirecting to login page...";
				}
			}
		}else{
			if (!empty($_POST['fn']) && !empty($_POST['ln']) && !empty($_POST['em']) 
			&& !empty($_POST['pa'])  && !empty($_POST['ag']) && !empty($_POST['gn']) 
			&& !empty($_POST['oc']) 
			) {
				$fname=$_POST['fn'];
				$lname=$_POST['ln'];
				$email=$_POST['em'];
				$pass=md5($_POST['pa']);
				$age=$_POST['ag'];
				$gen=$_POST['gn'];
				$occu=$_POST['oc'];
				$test=mysql_query("SELECT email from patients where email='$email'");
				if(mysql_num_rows($test)>0){
					echo "This email has already been registered! Try a new one... ";
				}else{
					$sql = mysql_query("INSERT INTO patients(LastName,FirstName,Gender, Age,ProPic,Occupation,Email,Password)
					VALUES ('$lname','$fname','$gen','$age','img_icon/blank_pic.jpg','$occu','$email','$pass')");
					echo "Registered! Please wait, redirecting to login page...";
				}
			}else{
			echo "One or more fields empty!";
			}
		}
		
	}
	header("Refresh: 4; url=\"login_user.php\"");
?>