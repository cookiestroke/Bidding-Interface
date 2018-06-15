<script>history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});
</script>

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
<title>eBid</title>
<link rel="icon" href="logo.ico">
<link rel="stylesheet" type="text/css" href="edit.css"/>

<style type="text/css">
input.foot:hover{
opacity:0.8;
cursor:pointer;
	}
img{border-radius:20px;width:300px;height:300px;}
.mySlides {display:none;}
.w3-animate-left{position:relative;animation:animateleft 0.4s}@keyframes animateleft{from{left:-300px;opacity:0} to{left:0;opacity:1}}
.w3-animate-right{position:relative;animation:animateright 0.4s}@keyframes animateright{from{right:-300px;opacity:0} to{right:0;opacity:1}}
</style>

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
<br>
<div id="header5" style="height:50px;width;300px;margin-left:5px;border-radius:20px;"><B>PAINTINGS OF THE WEEK</B></div>
<br>
<div>
  <img class="mySlides w3-animate-left" src="k4.jpg" style=" width: 1000px; height: 480px;margin:auto;">
  <img class="mySlides w3-animate-right" src="k5.jpg" style=" width: 1000px; height: 480px;margin:auto;">
  <img class="mySlides w3-animate-left" src="k6.jpg" style=" width: 1000px; height: 480px;margin:auto;">
  <img class="mySlides w3-animate-right" src="k7.jpg" style=" width: 1000px; height: 480px;margin:auto;">
</div>

<script>
var myIndex = 0;
carousel();		
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

	
<br>

 <form method="post" action="logout.php">
    <input type="submit" class="foot" value="Logout" style="float:right;background-color:#696969;text-decoration:none;border-radius:5px;margin:10px;padding:10px;font-weight: bold;width: 115px;padding: 10px;height: 45px;color:white;text-align: center;">
</form>
<div style="background-color:2d2d2d;clear:both;text-align:left; height: 150px;border-radius:20px;margin:auto;">
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