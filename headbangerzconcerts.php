<!DOCTYPE html>
<!--	Author:  Roland Estep, Ethan Yount, and Robert Rexrode
        Date:    24 October 2018
		File:    headbangerzconcerts.php
		Purpose: Web page
-->
<html>
<head>
  <title>Headbangerz</title>
  <link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div id="header">
  <center><img src="LOGO.png" alt="Headbangerz"></center>
	<form action="headbangerzconcerts.php" method="post">
  </div>
  <div id="menu">
	<ul>
		<li><a href="headbangerzhome.html">Home</a></li>
		<li><a href="headbangersnews.html">News</a></li>
		<li><a href="headbangerzgallery.html">Gallery</a></li>
		<li><a href="headbangerzabout.html">About Headbangerz</a></li>
		<li><a href="headbangerzcontact.html">Contact</a></li>
	</ul>
</div>

  <center>
  <?php
    $concertsFile = fopen("headbangerz.txt","r");
	$concertShowtimes1 = fgets($concertsFile);
	$concertShowtimes2 = fgets($concertsFile);
	$concertShowtimes3 = fgets($concertsFile);
	$concertShowtimes4 = fgets($concertsFile);
	$concertShowtimes5 = fgets($concertsFile);
	$concertShowtimes6 = fgets($concertsFile);
	$concertShowtimes7 = fgets($concertsFile);
	$concertShowtimes8 = fgets($concertsFile);
	fclose($concertsFile);
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$fullName = "$firstName $lastName";
	
	
	print("<p><strong>$fullName</strong>, here are your results for concerts!</p>");
	print("<p><strong><h1>$concertShowtimes1</h1></strong></p>");
	print("<p><strong>$concertShowtimes2</strong></p>");
	print("<p><strong>$concertShowtimes3</strong></p>");
	print("<p><strong>$concertShowtimes4</strong></p>");
	print("<p><strong><h1>$concertShowtimes5</h1></strong></p>");
	print("<p><strong>$concertShowtimes6</strong></p>");
	print("<p><strong>$concertShowtimes7</strong></p>");
	print("<p><strong>$concertShowtimes8</strong></p>");

  ?>
  </center>
</body>
</html>