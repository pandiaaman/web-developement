<!DOCTYPE html>
<html>

	<head>
		<title> SRM EVENT MANAGEMENT| SIGN UP</title>
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
								<li><li><a href="login.php">YEAR 1</a></li>
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
		</section>
		<div id="containform">
		
			<form method="POST" action="connect.php" onsubmit="return Validate()" name="vform">
				
				<div id="first_div">
				<input type="text" name="first" placeholder="first name" >
				<div id="first_error"></div>
				</div>
				
				<div id="last_div">
				<input type="text" name="last" placeholder="last name" >
				<div id="last_error"></div>
				</div>
				
				<div id="email_div">
				<input type="email" name="email" placeholder="e mail" >
				<div id="email_error"></div>
				</div>
				
				<div id="uid_div">
				<input type="text" name="uid" placeholder="Registration no" >
				<div id="uid_error"></div>
				</div>
				
				<div id="year_div">
				<input type="text" name="year" placeholder="year" >
				<div id="year_error"></div>
				</div>
				
				<div id="pass_div">
				<input type="password" name="pwd" placeholder="password" >
				</div>
				
				<div id="cpass_div">
				<input type="password" name="pwdc" placeholder="confirm password" >
				<div id="pwd_c_error"></div></br>
				</div>
				
				<button type="submit" value="register" name="submit"> Sign up</button>
			</form>
			</br>
			<div id="sgn">
			
		</div>
		</div>
		
		
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

var first=document.forms["vform"]["first"].value;

var last=document.forms["vform"]["last"].value;

var email=document.forms["vform"]["email"].value;

var uid=document.forms["vform"]["uid"].value;

var pwd=document.forms["vform"]["pwd"].value;

var pwd_c=document.forms["vform"]["pwd_c"].value;


var first_error=document.getElementById("first_error");
var last_error=document.getElementById("last_error");
var email_error=document.getElementById("email_error");
var pwd_c_error=document.getElementById("pwd_c_error");

first.addEventListener('blur', nameVerify, true);
last.addEventListener('blur', nameVerify, true);
uid.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
// validation function
function Validate() {
  // validate first name
  if (first == "") {
	  alert("name should be filled out");
    first.style.border = "1px solid red";
    document.getElementById('first_div').style.color = "red";
    first_error.textContent = "first anme is required";
    first.focus();
    return false;
  }
   // validate last name
  if (last== "") {
	  alert("name should be filled out");
    last.style.border = "1px solid red"; 
	document.getElementById('last_div').style.color = "red";
    last_error.textContent = "last name is required";
    last.focus();
    return false;
  }
  
  
  if (uid== "") {
	  alert("usernamename should be filled out");
    uid.style.border = "1px solid red"; 
	document.getElementById('uid_div').style.color = "red";
    uid_error.textContent = "last name is required";
    uid.focus();
    return false;
  }
  // validate username
  if (first.value.length < 3) {
    first.style.border = "1px solid red";
    first_error.textContent = "reg no must be at least 3 characters";
    first.focus();
    return false;
  }
  
  if (last.value.length < 3) {
    last.style.border = "1px solid red";
    last_error.textContent = "reg no must be at least 3 characters";
    last.focus();
    return false;
  }
  if (uid.value.length < 3) {
    uid.style.border = "1px solid red";
    uid_error.textContent = "reg no must be at least 3 characters";
    uid.focus();
    return false;
  }
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
  // validate password
  if (pwd.value == "") {
    pwd.style.border = "1px solid red";
    document.getElementById('pwd_div').style.color = "red";
    pwdc.style.border = "1px solid red";
    pwd_error.textContent = "Password is required";
    password.focus();
    return false;
  }
  // check if the two passwords match
  if (password.value != password_confirm.value) {
    password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "The two passwords do not match";
    return false;
  }
}
// event handler functions
function nameVerify() {
  if (username.value != "") {
   username.style.border = "1px solid #5e6e66";
   document.getElementById('username_div').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (email.value != "") {
  	email.style.border = "1px solid #5e6e66";
  	document.getElementById('email_div').style.color = "#5e6e66";
  	email_error.innerHTML = "";
  	return true;
  }
}
function passwordVerify() {
  if (pwd != "") {
  	pwd.style.border = "1px solid #5e6e66";
  	document.getElementById('cpass_div').style.color = "#5e6e66";
  	document.getElementById('pass_div').style.color = "#5e6e66";
  	password_error.innerHTML = "";
  	return true;
  }
  if (pwd === pwd_c.value) {
  	pwd.style.border = "1px solid #5e6e66";
  	document.getElementById('cpass_div').style.color = "#5e6e66";
  	pwd_c_error.innerHTML = "";
  	return true;
  }
}



</script>