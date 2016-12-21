<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link type="text/css" rel="stylesheet" href="css/login_signup_design.css"/>
		<link href="css/bootstrap.css" rel="stylesheet"/>
   		<script type="text/javascript" src="js/update.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(document).on("click", "#detect_p", function() {
        			window.location = "signup_patient.php";
    			});
    			$(document).on("click", "#detect_psy", function() {
        			window.location = "signup_psy.php";
    			});
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
		<div class="login_form" id="center_log">
			<button class="btn btn-info" id="detect_p">I want to sign up as Patient</button>
			<button class="btn btn-info" id="detect_psy">I want to sign up as Psychiatrist</button>
		</div>
	</body>
</html>








