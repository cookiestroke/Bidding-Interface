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
<title>Location</title>
<link rel="icon" href="logo.ico">
<style type="text/css">
img{border-radius:20px;width:300px;height:300px;}
input.foot:hover{
opacity:0.8;
cursor:pointer;
}

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
</div><br>
<p><font size="4"><b>Offline Auction will be held in the headquaters.</b></font></p>
<div style="height:300px;">
<div style="height:300px;width:400px;">
<p id="header8" style="text-align:center;"><B>MUMBAI HEADQUARTERS</B><br>
<p style="font-family:Calibri;font-size:20px;text-align:left;margin-left:20px;"><b>Address: B1-007, Boomerang, </b></p>
<p style="font-family:Calibri;font-size:20px;text-align:left;margin-left:20px;"><b>Chandivali Farm Road, Powai, Andheri(East),</b></p>
<p style="font-family:Calibri;font-size:20px;text-align:left;margin-left:20px;"><b>Mumbai - 400 072, Maharashtra, India.</b></p>
<p style="font-family:Calibri;font-size:20px;text-align:left;margin-left:20px;"><b>Contact: 26477011/022</b></p>
<p style="font-family:Calibri;font-size:20px;text-align:left;margin-left:20px;"><b>Email-id:auctionmum12@gmail.in</b></p>
</div>
<div style="height:300px;width:500px;margin-top:-300px;"><img src="1a.jpg" style=" width: 500px; height: 300px; margin-left:480px;">
</div></div><br>

<div style="height:300px;">
<div style="height:300px;width:400px;">

<p id="header7" style="text-align:center;"><B>DELHI	HEADQUARTERS</B><br>
<p style="font-family:Calibri;font-size:20px;text-align:left;margin-left:20px;"><b>Address: No 214-217 , A Block,</b></p>
<p style="font-family:Calibri;font-size:20px;text-align:left;margin-left:20px;"><b>Naurang House , Kasturba Marg ,</b></p>
<p style="font-family:Calibri;font-size:20px;text-align:left;margin-left:20px;"><b> New Delhi - 110 045, India.</b></p>
<p style="font-family:Calibri;font-size:20px;text-align:left;margin-left:20px;"><b>Contact: 28658144/145</b></p>
<p style="font-family:Calibri;font-size:20px;text-align:left;margin-left:20px;"><b>Email-id:auctiondel24@gmail.in</b></p>
</div>

<div style="height:300px;width:500px;margin-top:-300px;">
<img src="2a.jpg" style=" width: 500px; height: 300px; margin-left:480px;"></div></div>
<br><br><form method="post" action="logout.php">
    <input type="submit" class="foot" value="Logout" style="float:right;text-decoration:none;border-radius:5px;background-color:#696969;margin:10px;padding:10px;font-weight: bold;width: 115px;padding: 10px;height: 45px;color:white;text-align: center;">
</form>
<div style="background-color:2d2d2d;clear:both;text-align:left; height: 150px;border-radius:20px;">
<div style="float:left ;margin-top:10px;color:3232ff;font-size:20px;margin-left:15px;">
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