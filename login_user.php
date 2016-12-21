<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link type="text/css" rel="stylesheet" href="css/login_signup_design.css"/>
		<link href="css/bootstrap.css" rel="stylesheet"/>
   		<script type="text/javascript" src="js/update.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#typing').focus();
			});
		</script>
		<style type="text/css">
   			body { background: #CC99FF;
   				background-image: url("img/res/back3.jpg");
   				background-repeat: repeat-x repeat-y;
  			}
		</style>
	</head>
	<body >
		<div class="login_form">
			<img class="logo_pic" src="img/ico/brain.png" height"40" width="40"><h3> PsychAid</h3>
			<form action="check_log.php" method="post">
				<table>
					<tr>
						<td> <input type="text" size="51"  name="ema" id="typing" placeholder="Email"/>
						</td>
					</tr>
					<tr>
						<td> <input type="password" size="40" name="pa" placeholder="Password"/>
						</td>
					</tr>
						<tr><td>I am : <select name="who">
								<option>Patient</option>
								<option>Psychiatrist</option>
							</select></td></tr>
					<tr>
						<td>
							<input type="submit" class="btn btn-info" value="Login">
						</td>
					</tr>
				</table>
				<a href="signup_patient.php" class="high_lighter2">Sign up as patient?</a> | 
				<a href="signup_psy.php" class="high_lighter2">Sign up as psychiatrist?</a> | <a href="index.php" class="high_lighter2">Home</a>
				<br><a href="#" class="high_lighter2">Forgot Password?</a>
			</form>
		</div>
	</body>
</html>








