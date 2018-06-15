<?php

	session_start();
	$_SESSION['message'] = '';
	$mysqli = new mysqli("localhost", "root", "", "users");
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$uname = $mysqli->real_escape_string($_POST['uname']);
	$psw= $mysqli->real_escape_string($_POST['psw']);

    $result1 = $mysqli->query("SELECT * FROM reg WHERE uname='$uname'") or die ($mysqli->error);
	if ( $result1->num_rows != 0 )
	{
		$user = $result1->fetch_assoc();
		
		if ( $_POST['psw'] == $user['psw'] )
		{
			$pid = $mysqli->real_escape_string($_POST['pid']);
			$bid = $mysqli->real_escape_string($_POST['bid']);
			$result = $mysqli->query("SELECT * FROM pain WHERE painid='$pid'") or die($mysqli->error);
			if ( $result->num_rows != 0 )
				{ // painting data is edited
					 $user1 = $result->fetch_assoc();
					
					 $sql = $mysqli->query("UPDATE pain SET painbid='$bid',own='$uname' WHERE painbid<$bid && painid=$pid") or die ($mysqli->error);
                	 $mysqli->close(); 
            	} 
			else
				{
                $_SESSION['message'] = 'Painting Info not Found!';
                }
	
		}
		else
		{
			$_SESSION['message'] = 'Password Incorrect!';
		}
	}
	else
		{
			$_SESSION['message'] = 'User not Found!';
		}
	}
	?>


<html>
<head>
<title>Place a Bid</title>
<link rel="icon" href="logo.ico">
<link rel="stylesheet" type="text/css" href="edit.css"/>

<style type="text/css">
img{border-radius:20px;width:300px;height:300px;}
</style>

<script type="text/javascript">
function validate()
{
var uname=document.getElementById("uname").value;
var psw=document.getElementById("psw").value;
var pid=document.getElementById("pid").value;
var bid=document.getElementById("bid").value;
submitOK="true";
if ((uname=="")||(psw=="") ||(pid=="") || (bid==""))
{
  alert("Please enter the values!!");
  submitOK="false";
}
if (uname.length>10)
 {
 alert("The name may have no more than 10 characters");
 submitOK="false";
 }
if (submitOK=="false")
 {
 return false;
 }
}
</script>
</head>
<body>
<div id="header" style="height:150px;">
 <div id="header1" style="height:150px;width;300px;float:left;">eBid</div>
  <div id="header2" style="height:75px;width:600px;float:right;"><ul>
 <li><a href="home.html">Home</a></li>
 <li><a href="auction.php">Auction</a></li>
 <li><a href="location.php">Location</a></li>
 <li><a href="about.php">About Us</a></li>
 </ul></div>
</div>
<br>


<div style="height:370px;width:400px;background-color:#d3d3d3;border-radius:10px;margin-left:300px;padding: 30px;">
	<p style="text-align:center;"><br><b><u><font size="5"> PLACE A BID </font> </u></b></p>
<form method="post" name="contact_form" onsubmit="return validate()">
<div><?= $_SESSION['message'] ?></div>
<table >
<col width="200">
<col width="200">
<tr><td><b>Username:</b></td><td> <input type="text" name="uname" id="uname" size="30"><br><br></td>
</tr>
<tr><td><b>Password:</b> </td><td><input type="password" name="psw" id="psw" size="30"><br><br></td>
</tr>
<tr><td><b>Painting Id:</b></td><td> <input type="text" name="pid" id="pid" size="30"><br><br></td>
</tr>
<tr><td><b>Bid Amount:</b></td><td> <input type="text" name="bid" id="bid" size="30"><br><br></td>
</tr>
</table><br><p style="text-align:center;">
	<input type="submit" value="Place a Bid" style="display: inline-block;"></p>
</form>
</div><br>

<br><form method="post" action="logout.php">
    <input type="submit" value="Logout" style="float:right;background-color:#696969;text-decoration:none;border-radius:5px;margin:10px;padding:10px;font-weight: bold;width: 115px;padding: 10px;height: 45px;color:white;text-align: center;">
</form>

<div style="background-color:2d2d2d;clear:both;text-align:left; height: 150px;border-radius:20px;">
<div style="float:left ;margin-top:8px;color:3232ff;font-size:20px;margin-left:15px;">
<b><u>Contact Us</u></b><br><br>
B1-007, Boomerang,Chandivali Farm Road,<br>
Powai,Mumbai - 400 072, Maharashtra, India.<br>
Mail Us: feedback@ebid.com
</div>
<div>
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
</div>
</div>

</body>
</html>