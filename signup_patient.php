<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/login_signup_design.css"/>
		   <link href="css/bootstrap.css" rel="stylesheet"/>
		   	<style type="text/css">
   body { background: #CC99FF;
background-image: url("img/res/back3.jpg");
   			
   		background-repeat: repeat-x  repeat-y;
   }
</style>
	</head>
	<body>
		<div class="signup_form">
			<form action="reg.php" method="post">
				<table class="rgtab">
					<tr>
						<td>
							First Name:</td><td> <input type="text" size="51"  name="fn" id="fn"/><br>
						</td>
					</tr>
					<tr>
						<td>
							Last Name:</td><td> <input type="text" size="51"  name="ln" id="ln"/><br>
						</td>
					</tr>
					<tr>
						<td>
							Email:</td><td> <input type="text" size="51"  name="em" id="em"/><br>
						</td>
					</tr>
					<tr>
						<td>
							Password:</td><td> <input type="password" size="51" name="pa"/><br>
						</td>
					</tr>
					<tr>
						<td>
							Age:</td><td> <input type="text" size="51" name="ag"/><br>
						</td>
					</tr>
					<tr>
						<td>
							Gender:</td><td> <select name="gn">
								<option>Male</option>
								<option>Female</option>
							</select><br>
						</td>
					</tr>
					<tr>
						<td>
							Occupation:</td><td> <input type="text" size="51" name="oc"/><br>
						</td>
					</tr>
					<tr>
						<td></td><td>
						<input type="submit" class="btn btn-info" value="Register" name="reg"/>
					</td></tr>
				</table>

			</form>
			<a href="login_user.php" class="high_lighter">Already a member? Click to login!</a>
		</div>
		
		
	</body>
</html>
