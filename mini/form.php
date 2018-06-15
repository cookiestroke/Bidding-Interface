<script>history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});
</script>
<html>
<head>
<style>
input.footer:hover{
opacity:0.8;
cursor:pointer;
	}
	</style>
<title>Form</title>
<link rel="icon" href="logo.ico">
<link rel="stylesheet" type="text/css" href="edit.css"/>
<script type="text/javascript">
function validate()
{
var fname=document.getElementById("fname").value;
var lname=document.getElementById("lname").value;
var uname=document.getElementById("uname").value;
var psw=document.getElementById("psw").value;
var cpsw=document.getElementById("cpsw").value;
var email=document.getElementById("email").value;
var at=document.getElementById("email").value.indexOf("@");
var dt=document.getElementById("email").value.indexOf(".com");
var user_input;
submitOK="true";
if ((fname=="") ||(lname=="") ||(uname=="") ||(psw=="") ||(cpsw=="")|| (email==""))
{
alert("Please enter the values!!");
submitOK="false";
}

if (fname.length>10)
 {
 alert("The name may have no more than 10 characters");
 submitOK="false";
 }
 
if (lname.length>10)
 {
 alert("The name may have no more than 10 characters");
 submitOK="false";
 }
 
if (uname.length>10)
 {
 alert("The name may have no more than 10 characters");
 submitOK="false";
 }
 
if (psw.length<8)
 {
 alert("The password needs more than 8 characters");
 submitOK="false";
 }
if (at==-1) 
 {
 alert("Not a valid e-mail!");
 submitOK="false";
 }
	
if (dt==-1)
 {
 alert("Not a valid e-mail!");
 submitOK="false";
 }
 
if ( ( document.contact_form.gender[0].checked == false )
    && ( document.contact_form.gender[1].checked == false )
	&& ( document.contact_form.gender[2].checked == false )	)
    {
        alert ( "Please choose your Gender:" );
        submitOK="false";
    } 
if (submitOK=="false")
 {
 return false;
 }
}

</script>
</head>
<body >
<div id="header" style="height:150px;">
 <div id="header1" style="height:150px;width;300px;float:left;">eBid</div>
  <div id="header2" style="height:75px;width:600px;float:right;"><ul>
 <li><a href="form.php" style="float:right; margin:20px;">Form</a></li>
 </ul></div>
</div>
</div><br>
<br>
<div>
<ul>
 <li><a class="a2" href="form.php">Buyer</a></li>
 </ul>
</div><br><br>

<div style="height:520px;width:500px;border:#d3d3d3 solid 2px;margin-left:250px;background-color:#d3d3d3;border-radius:10px;padding:30px;">
<p style="text-align:center;"><br> <b> <u> <font size="5"> REGISTRATION FORM  </font> </u> </p>

<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root", "", "users");
//the form has been submitted with post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //two passwords are equal to each other
    if ($_POST['psw'] == $_POST['cpsw']) {
        
        //set all the post variables
		$fname = $mysqli->real_escape_string($_POST['fname']);
		$lname = $mysqli->real_escape_string($_POST['lname']);
        $uname = $mysqli->real_escape_string($_POST['uname']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $psw= $mysqli->real_escape_string($_POST['psw']);
     	$result = $mysqli->query("SELECT * FROM reg WHERE email='$email'") or die ($mysqli->error);

		// We know user email exists if the rows returned are more than 0
		if ( $result->num_rows > 0 ) {
    	$_SESSION['message'] = 'User with this email already exists!';
    	$mysqli->close();
		}
		else
		{
                //set session variables
                $_SESSION['uname'] = $uname;

                //insert user data into database
                $sql = $mysqli->query("INSERT INTO reg (fname, lname, uname, email, psw)"."VALUES ('$fname','$lname','$uname','$email', '$psw')") or die ($mysqli->error);

                //if the query is successsful, redirect to welcome.php page, done!
                if ($sql === true){
                    $_SESSION['message'] = "Registration succesful! Added $uname to the database!";
					  echo ("<SCRIPT LANGUAGE='JavaScript'>
    						window.alert('Succesfully Registered $uname. Thank you for registering!')
							window.location.href='start.php';
    						</SCRIPT>");
                }
                else {
                    $_SESSION['message'] = 'User could not be added to the database!';
                }
                $mysqli->close(); 
            } 
	}
    else {
        $_SESSION['message'] = 'Two passwords do not match!';
    }
}
?>

<form action="form.php" method="post" name="contact_form" onsubmit="return validate()">
<div><?= $_SESSION['message'] ?></div>
<table >
<col width="200">
<col width="200">
<tr><td><b>First name:</b></td><td> <input type="text" name="fname" id="fname" placeholder="First name" size="30" required><br><br></td>
</tr>
<tr><td><b>Last name:</b></td><td> <input type="text" name="lname" id="lname" placeholder="Last name"  size="30" required><br><br></td>
</tr>
<tr><td><b>Username:</b> </td><td><input type="text" name="uname" id="uname" placeholder="Username" size="30" required><br><br></td>
</tr>
<tr><td><b>Password:</b></td> <td><input type="password" name="psw" id="psw" placeholder="Password" size="30" required><br><br></td>
</tr>
<tr><td><b>Confirm Password:</b></td><td> <input type="password" name="cpsw" id="cpsw" placeholder="Confirm password"  size="30" required><br><br></td>
</tr>
<tr><td><b>Email ID :</b></td><td> <input type="e-mail" name="email" id="email" placeholder="email-id" size="30" required><br><br></td>
</tr>
<tr><td><b>Gender: </b></td><td><input type="radio" name="gender" value="male" required>Male</td></tr>
<tr><td>  </td><td><input type="radio" name="gender" value="Female">Female </td></tr>
<tr><td>  </td><td><input type="radio" name="gender" value="Others">Others</td>
</tr>
</table><br><p style="text-align:center;"><input type="submit" value="Submit"></p>
</form>
</div>
<br><form method="post" action="logout.php">
    <input type="submit" class="footer" value="Login" style="float:right;background-color:#696969;text-decoration:none;border-radius:5px;margin:10px;padding:10px;font-weight: bold;width: 115px;padding: 10px;height: 45px;color:white;text-align: center;">
</form>
<div style="background-color:2d2d2d;clear:both;text-align:left; height: 150px;border-radius:20px;">
<div style="float:left ;margin-top:8px;color:3232ff;font-size:20px;margin-left:15px;">
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