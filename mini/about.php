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
<title>About Us</title>
<link rel="icon" href="logo.ico">
<style type="text/css">
input.foot:hover{
opacity:0.8;
cursor:pointer;
}
img{border-radius:20px;width:460px;height:480px;}
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
</div><br><br>

<div id="k" style="height:480px;">
<br>

	<h1><b><u> About Us...</u></b></h1>
	
	<p style="text-align:left;margin-left:15px;">
eBid is a privately owned Indian auction house and one of the India's oldest and largest auctioneers of fine art and antiques. The eBid name is recognized throughout India in all sectors of the fine art with several of its departments established Indian leaders within their specialist category. eBid conducts some 400 annual sales through its sixty specialist departments. The sameguiding principles have ensured eBid's success over the past two centuries.
<br>
<br>
<br>
With specialists in every major area of art and collectables, the depth of collective knowledge of eBid auctioneers has enabled the company to challenge the market positions of Sotheby's and Christie's. eBid is one of a very few top-tier fine art auction houses in the world. Since its establishment in 1793, it has been amongst the most respected and trusted brands in the industry. Over the last couple of decades,eBid has experienced a remarkable period of prosperity and expansion under the seasoned and capable leadership of its executive board. The current owners acquired the family-owned firm of eBid and merged it with specialist auctioneer Brooks in 2000.This merger created the platform that has made eBid a powerful and dynamic twenty-first century auction house.
</p>
</div>

<div id="a" style="height:480px;margin-top:-480px;">
<img src="aboutus.jpg">
</div>
<br><br>
<form method="post" action="logout.php">
    <input type="submit" class="foot" value="Logout" style="float:right;background-color:#696969;text-decoration:none;border-radius:5px;margin:10px;padding:10px;font-weight: bold;width: 115px;padding: 10px;height: 45px;color:white;text-align: center;">
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