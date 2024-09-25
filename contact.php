<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Academia Track</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
		<img src="b1.jpg" width="800">
		
		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					ACADEMIA TRACK<BR>
					SCHOOL MANAGEMENT SYSTEM<BR>
					CONTACT ADMINISTRATION:<BR>
                    MAIL - admin@mail.com<br>Phone - 1234567890<br>
					CONTACT TEACHERS:<BR>
					MAIL - kodom@mail.com<br>Phone - 23456789<br>

				</form>
			</div>
		</div>
		<div class="footer">
			<footer><p> </p></footer>
		</div>
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>
		
	
		
	</body>
</html>