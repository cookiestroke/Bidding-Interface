<script>history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});
</script>
<html><head>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #268BD4;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
	font-size: 30px;
}

button:hover {
    opacity: 0.8;
}

.imgcontainer {
    text-align: center;
    width:300px;
	height:300px;
	margin: auto;
}

img.avatar {
	margin: auto;
}

span.footer {
    float: right;
    padding-top: 16px;
	text-align: justify;
}
	
span.footer:hover{
		opacity:0.8;
	}

@media screen and (max-width: 300px) {
    span.footer {
       display: block;
       float: none;
    }
}
</style>
</head>
<body>
<div>
<form name="input" action="start.php" method="post">
 <fieldset>
    <legend><b><p style="color:#696969;text-shadow: 13px 12px #cdc;font-size:30px;">Login:</p></b></legend>
  <div class="imgcontainer">
    <img src="loginlogo.gif" class="avatar">
  </div>

	<?php
	session_start();
	$_SESSION['message'] = '';
	$mysqli = new mysqli("localhost", "root", "", "users");
	error_reporting( error_reporting() & ~E_NOTICE );
/* User login process, checks if user exists and password is correct */
	if(isset($_POST['email'])){
    $email = $mysqli->real_escape_string($_POST['email']);
	}	
// Escape email to protect against SQL injections
	
	$result = $mysqli->query("SELECT * FROM reg WHERE email='$email'") or die($mysqli->error);

	if ( $result->num_rows != 0 )
	{ // User exists
    $user = $result->fetch_assoc();
	
	if(isset($email))
	{ 
    echo $user['uname'];
	}
	
    if ( $_POST['psw'] == $user['psw'] ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['fname'] = $user['fname'];
        $_SESSION['lname'] = $user['lname'];
		$_SESSION['uname'] = $user['uname'];
        $_SESSION['active'] = $user['active'];
		$uname=$user['uname'];
        
        // This is how we'll know the user is logged in
        $_SESSION['loggedIn'] = true;
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    	window.alert('Welcome to eBid $uname !')
		window.location.href='home.php?loggedIn=success';
    	</SCRIPT>");
    }
    else {
       	echo "   You have entered wrong password, try again!";
    	}
	}
	
?>

  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email-id" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" style="cursor:pointer;border-radius: 50%;width:20%;height: 10%;margin-left:40%;">Login</button>
  </div>
  <div>     
    <span class="footer" style="border-style:outset;background-color:#696969;"><a href="form.php" style="display: block;text-decoration:none;border-radius: 5px;font-weight: bold;width: 115px;padding: 10px;height: 25px;color:white;text-align: center;">Register</a></span>
  </div>
 </fieldset>
</form>
</div>
</body>
</html>
