<?php 
	session_start();
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];

 ?>

 <!DOCTYPE html>
 <html >
 <head>
 	
 	<title>PHP sessioon </title>
 </head>
 <body>
 	<h1>Welcome to Your homepage <?php echo $name; ?></h1>
 	
 </body>
 </html>