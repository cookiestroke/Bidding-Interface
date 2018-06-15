<?php
    // Start the session
    ob_start();
    session_start();

    // Check to see if actually logged in. If not, redirect to login page
    if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) {
        header("Location: start.php");
    }
?>
<html>
<head>
<title>Auction</title>
<link rel="icon" href="logo.ico">
<style type="text/css">
img{border-radius:20px;width:300px;height:300px;}
#input:hover
{background-color:midnightblue;
cursor:pointer; }
</style>
<link rel="stylesheet" type="text/css" href="edit.css"/>
</head>
<body>
<div id="header" style="height:150px;">
 <div id="header1" style="height:150px;width;300px;float:left;">eBid</div>
  <div id="header2" style="height:75px;width:600px;float:right;"><ul>
 <li><a href="home.php">Home</a></li>
 <li><a href="auction.php">Auction</a></li>
 <li><a href="location.php">Location</a></li>
 <li><a href="about.php">About Us</a></li>
 </ul></div>
</div>
<div><br><Br>
	<div class="menu1" style="margin:auto;display: inline-block;width:100%;"><img src="21.jpg" style="height:300px;width:300px;margin:30px;float:right;">
	<?php
	$mysqli = new mysqli("localhost", "root", "", "users");
	$result = $mysqli->query("SELECT * FROM pain WHERE painid=1004") or die($mysqli->error);
	if ( $result->num_rows != 0 )
	{ // painting data
    while($paint = $result->fetch_assoc()) 
	{
        echo "<h1 style='float:left;margin-left:30px;weight:bold;'>"."ID: ". $paint["painid"]."</h1>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>" ;
		echo "<h1 style='float:left;margin-left:30px;weight:bold;'>"."Name: " . $paint["painame"]."</h1>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>" ;
		echo "<h1 style='float:left;margin-left:30px;weight:bold;'>"."Bid: " . $paint["painbid"]."</h1>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"  ;
		echo "<h1 style='float:left;margin-left:30px;weight:bold;'>"."Bidder: " . $paint["own"]."</h1>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"  ;
		echo "<h1 style='float:left;margin-left:30px;weight:bold;'>"."Date: " . $paint["date"]."</h1>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"  ;
    }
	}
	else
	{
	echo "error!";
	}
	?>
	<form action="bid.php" style="float:right;margin-right:120px;margin-top:-70px;">Place a Bid <input type="submit" value="&nbsp;" id="input" style="border-radius: 45%;width:50px;height:50px;"></form>
	</div><br><Br><Br>
	<div class="menu1" style="margin:auto;display:inline-block;width:100%;"><img src="23.jpg" style="height:300px;width:300px;margin:30px;float:right;">
	<?php
	$mysqli = new mysqli("localhost", "root", "", "users");
	$result = $mysqli->query("SELECT * FROM pain WHERE painid=1005") or die($mysqli->error);
	if ( $result->num_rows != 0 )
	{ // painting data
    while($paint = $result->fetch_assoc()) 
	{
        echo "<h1 style='float:left;margin-left:30px;weight:bold;'>"."ID: ". $paint["painid"]."</h1>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>" ;
		echo "<h1 style='float:left;margin-left:30px;weight:bold;'>"."Name: " . $paint["painame"]."</h1>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>" ;
		echo "<h1 style='float:left;margin-left:30px;weight:bold;'>"."Bid: " . $paint["painbid"]."</h1>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"  ;
		echo "<h1 style='float:left;margin-left:30px;weight:bold;'>"."Bidder: " . $paint["own"]."</h1>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"  ;
		echo "<h1 style='float:left;margin-left:30px;weight:bold;'>"."Date: " . $paint["date"]."</h1>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"  ;
    }
	}
	else
	{
	echo "error!";
	}
	?>
	<form action="bid.php" style="float:right;margin-right:120px;margin-top:-70px;">Place a Bid <input type="submit" value="&nbsp;" id="input" style="border-radius: 45%;width:50px;height:50px;"></form>
	</div><br><Br><Br>
	<div class="menu1" style="margin:auto;display: inline-block;width:100%;"><img src="26.jpg" style="height:300px;width:300px;margin:30px;float:right;">
	
	<?php
	$mysqli = new mysqli("localhost", "root", "", "users");
	$result = $mysqli->query("SELECT * FROM pain WHERE painid=1006") or die($mysqli->error);
	if ( $result->num_rows != 0 )
	{ // painting data
    while($paint = $result->fetch_assoc()) 
	{
        echo "<h1 style='float:left;margin-left:30px;weight:bold;'>"."ID: ". $paint["painid"]."</h1>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>" ;
		echo "<h1 style='float:left;margin-left:30px;weight:bold;'>"."Name: " . $paint["painame"]."</h1>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>" ;
		echo "<h1 style='float:left;margin-left:30px;weight:bold;'>"."Bid: " . $paint["painbid"]."</h1>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"  ;
		echo "<h1 style='float:left;margin-left:30px;weight:bold;'>"."Bidder: " . $paint["own"]."</h1>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"  ;
		echo "<h1 style='float:left;margin-left:30px;weight:bold;'>"."Date: " . $paint["date"]."</h1>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"  ;
    }
	}
	else
	{
	echo "error!";
	}
	?>
	<form action="bid.php" style="float:right;margin-right:120px;margin-top:-70px;">Place a Bid <input type="submit" value="&nbsp;" id="input" style="border-radius: 45%;width:50px;height:50px;"></form>
	</div>
</div>
<br><br><br>
<p style="margin-left:44%;margin-top:0%;margin-bottom: 2%;width:300px;">Previous Page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Next Page</p>
<a class="next" href="auction.php"style="margin-left:45%;width:50px;margin-top:-20px;margin-bottom: 20px;"><img src="arrow-l.png" style="width:50px;height:30px"></a>
<a class="next" href="auction2.php" style="margin-left:5%;margin-right:30%;width:50px;margin-top:-20px;margin-bottom: 20px;"><img src="arrow-r.png" style="width:50px;height:30px"></a>
<br><br>
<div style="background-color:2d2d2d;clear:both;text-align:left; height: 150px;border-radius:20px;margin:auto;">
<div style="float:left ;margin:auto;color:3232ff;font-size:20px;margin-left:15px;">
<b><u>Contact Us</u></b><br><br>
B1-007, Boomerang,Chandivali Farm Road,<br>
Powai,Mumbai - 400 072, Maharashtra, India.<br>
Mail Us: feedback@ebid.com
</div>
<DIV>
<div style=" float:right; margin-top: 35px;margin-right:60px;">
	
	<img src="facebook.png" 
	onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
	onmouseout="this.style.opacity=0.8;this.filters.alpha.opacity=20"
	alt="LINK: facebook" class="image"/>
	</div>

<div style=" float:left ;margin-left:80px; margin-top: 35px;">

	<img src="Twitter.jpg" 
	onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
	onmouseout="this.style.opacity=0.8;this.filters.alpha.opacity=20"
	alt="LINK: twitter" class="image" />
	</div>

<div style=" float:left ;margin-left:100px; margin-top: 35px;">
	
	<img src="unnamed.png" 
	onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
	onmouseout="this.style.opacity=0.8;this.filters.alpha.opacity=20"
	alt="LINK: gmail" class="image" />
	</div>
</DIV>
</div>
</body>
</html>