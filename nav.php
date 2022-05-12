<!DOCTYPE html><!-- Document type --> 
<html>	<!-- opening html --> 

	<head> <!-- opening head --> 
		<!-- formating --> 
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
   	
    	<meta name="description" content="Free Web tutorials">
    	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
    	<meta name="author" content="John Doe">
   
    	<title>Kiwi Tourists</title> <!-- title --> 
   
    	<!-- link to css goes here -->
   	 	<link href="css/main_style.css" rel="stylesheet"> <!-- linking css stylesheet --> 

		<!-- getting fonts --> 
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Lovers+Quarrel&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	</head>

<body> <!-- opening body --> 
	<div class="wrapper" >
		<header class="box"> <!-- header starting --> 
			<img class="roundleft" src="img/nzlogo.png" alt="Old Poetry" height="110"/> 
			<h1> Kiwi Tourists </h1>
			<h3> Kiwis cant you fly to you, but you can come overs.</h3>
		</header>
		
		
		
		<nav class="box" id="navbar"> <!-- navigation bar --> 
			
			<a class="dropbtn" href="index.php">Home</a> |
			
			<div class="dropdown">a
				<a class="dropbtn" href="#"> Islands <span class="littlearrow">&#9660;</span> </a>
				<div class="dropdown-content">
					<a href="north.php">North Island</a>
					<a href="south.php">South Island</a>
				</div>
			</div> <!-- / Dropdown -->
			
			|
			
			<a class="dropbtn" href="sources.php">Sources</a> |
			<a class="dropbtn" href="contact.php">Contact</a> 
		</nav>