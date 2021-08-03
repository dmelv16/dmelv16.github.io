<?php	
<! DOCTYPE html>

<html>
<head>
	<meta charset= "utf-8">
	<title>UnitedKingdomFootballExchange</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
	<div class= "main-header">
	<header class="menu-area">
        <ul>
        <li class="logo"><img src="premier_league_logo.png" alt="MMPN" width="96.77" height="40"></li>
          <!--2.419-->
		<li><a href= "index.html">Home</a></li>
        <li><a href="login.php">Login</a></li>
		<li><a href= "signup.php">Sign Up</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="england.html">England (ESE)</a></li>
        <li><a href="scotland.html">Scotland (SSE)</a></li>
		<li><a href= "ireland.html">Ireland (ISE)</a></li>
		<li><a href= "wales.html">Wales (WSE)</a></li>
		<li><a href= "northernireland.html">Northern Ireland (NISE)</a></li>
		<li><a href="contact.html">Contact</a></li><br><hr>
        </ul>
    </header>
	</div>
	
</body>
</html>

	<section class= "signup-form">
	<h2>Log In</h2>
	<form action= "includes/login.inc.php" method= "post">
		<input type= "text" name= "name" placeholder= "Username/Email">
		<input type= "password" name= "pwd" placeholder= "Password">
		<button type= "submit" name= "submit">Log In</button>
	</form>
	</section>
	

	
?>