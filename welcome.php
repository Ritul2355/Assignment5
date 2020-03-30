<?php

session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<style type="text/css">
		body{
			background-color: #6C63F1;
		}
	</style>
</head>
<body>
<header style="color: black; font-size: 50px;font-family:Verdana;margin: 10% "><center><h1>Hey There... <br><h2 style="color: red"><?php echo $_SESSION['username']; ?></h2></h1></center></header>
<center><button onclick="window.location.href=' login.php'" id="lout" style="color: black; background: grey;border: none; border-radius: 30px; font-size: 40px; height:60px;width: 300px; background-size: 300px "><strong>logout</strong></button></center>
</body>
</html>