<?php
session_start();
?>
<!DOCTYPE html>
<html>

	<head>
		<title> SRM EVENT MANAGEMENT | LOGIN</title>
		<link rel="stylesheet" type="text/css" href="style9.css">
	</head>
	
	<body>
		<header>
		<div id="head">
		<div id="headpic">
				<img src="al.png" width="100px" height="auto">
				</div>
		<div id="pic">
					<a href="index.php"><h1>EVENT MANAGEMENT</h1></a>
				</div>
<div id="navmenu">		
			<nav>
				<ul>
					<li><a href="login.php">YEAR 1</a></li>
									<li>	<a href="login.php">YEAR 2</a></li>
									<li>	<a href="login.php">YEAR 3</a></li>
									<li>	<a href="login.php">YEAR 4</a></li>
									  
								<li><a href="signup.php">SIGNUP</a>	</li>
								<li><a href="index.php">HOME</a></li>	
				</ul>
				
				
			</nav>
			</div>
			</div>
		</header>
		
		<section>
		<div id="containform">
		
		<form action="loginconnect.php" method="post" onsubmit="validate()"> 
					<input type="text" name="uid" id="username" placeholder="username" required></br>
					<input type="password" name="pwd" id="password" placeholder="password" required></br>
					<button  class="btn" type="submit" name="submit"> login </button>
				</form>
				<div id="sgn">
				
				</div>
		</div>
		</section>
		<div id="container">
		<div id="boxes">
			<div class="box">
				<img src="ca.jpg" width="100px">
				<h5> CONTACT US</h5>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit </p>
			</div>
			
			<div class="box">
				<img src="cb.png" width="100px">
				<h5> CONTACT US</h5>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit </p>
			</div>
			
			<div class="box">
				<img src="cc.jpg" width="100px">
				<h5> CONTACT US</h5>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit </p>
			</div>
			
			<div class="box">
				<img src="cd.jpg" width="100px">
				<h5> CONTACT US</h5>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit </p>
			</div>
		</div>
		
		</div>
		<div id="foot">
		<footer>
				<p> copyright &copy;</p>

		</footer>
		</div>
		
	</body>
</html>

<script type="text/javascript">
var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "tryhard" && password == "password"){
alert ("Login successfully");
return false;
}
else{
attempt --;// Decrementing by one.
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}
</script>

