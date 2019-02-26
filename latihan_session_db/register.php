<?php 
session_start();

if(isset($_SESSION['message'])) {
	if($_SESSION['message']!="") {
		echo "<span style ='color:red'>".$_SESSION['message']."</span>";
		$_SESSION['message'] = "";
	}
}

?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
 	<meta charset="utf-8">
 	<title>Register Here</title>
 	<link rel="stylesheet" type="text/css" href="css/Beginner.css">
 </head>
 <body>
 	<form method="POST" class="Form" action="cekregister.php">
 		<h2 class="Register">Register Here</h2>
 			<input type="text" name="username" placeholder="Username" required>
 			
 			
 			<input type="text" name="password" placeholder="Password"  required>
 			
 		
 			<button class="button" type="submit" name="register">Register</button>
 			<div class="link">
 				<a href="login.php" class="have-account">Have an Account?</a>
 				<br>
 				<a href="login.php" class="Sign-In">SIGN IN NOW</a>
 			</div>
 	</form>
 </body>
 </html>