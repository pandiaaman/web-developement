<?php
session_start();
$cookie_name = "user";
$cookie_value = $_SESSION['u_first'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html>

	<head>
		<title> SRM EVENT MANAGEMENT</title>
		<link rel="stylesheet" type="text/css" href="style9.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
					<?php
						if(isset($_SESSION['u_id'])){
							echo '<form action="logout.php" method="POST">
							<ul>
								<li><div class="dropdown">
									  <button class="dropbtn">YEAR</button>
									  <div class="dropdown-content">
									  
										<a href="login.php">YEAR 1</a>
										<a href="login.php">YEAR 2</a>
										<a href="login.php">YEAR 3</a>
										<a href="login.php">YEAR 4</a>
									  </div>
									</div></li>
							<button class="lout" type="submit" name="submit"> logout</button>
							</ul>
							</form>';
						}
						else{
							echo '<nav>
							<ul>
								<li><div class="dropdown">
									  <button class="dropbtn">YEAR</button>
									  <div class="dropdown-content">
										<a href="login.php">YEAR 1</a>
										<a href="login.php">YEAR 2</a>
										<a href="login.php">YEAR 3</a>
										<a href="login.php">YEAR 4</a>
									  </div>
									</div></li>
								<li><a href="login.php">LOGIN</a></li>
								<li><a href="signup.php">SIGNUP</a></li>
							</ul>
						</nav>';
						
						}
						
						?>
					</div>
			</div>
		</header>
		
		
		
			
		<?php
		if(isset($_SESSION['u_id'])){
			echo'<script>
			prompt("welcome");
			</script>';
			echo '<div id="intro"> <p>you are logged in ';
			echo $_SESSION['u_first'];
			echo ' ';
			echo $_SESSION['u_last'];
			echo'</p>
			</div>
			
			
			
			
			';
		}
		else{
			
			echo'
			<section>
				<div id="welcome">
					<h2> WELCOME TO SRM EVENT MANAGEMENT</h2>
				</div>
			</section>
			
			<section>
			<div id="container">
			<div id="vid" >
			<video muted autoplay controls width="400px">
			<source src="videoplayback.mp4"  type="video/mp4">
			</video>
			</div>
			<div id="def">
			<p>This competition takes place exclusively for the freshers of SRM, so if you want to know where you stand on the talent table amongst your fellow first years, this is your one big shot to fame! Be it dance, singing, writing, playing an instrument, quizzes or fashion, you can pick your favorites, go ahead, and make your mark wherever you see fit! So brush up those skills youve worked on for all these years, and prepare for glory! You also stand a chance of becoming the Mr or Ms Fresher of your branch, which is an amazing way of becoming well known among your peers! All this, and a lot more! Meet new people with interests similar to yours, and be a step closer to making sure your stay at SRM will be nothing short of amazing!</p>
			</div>
			
			';
			
		}
		?>
		
		
		
		<div id="boxes">
			<div class="box">
				<img src="ca.jpg" width="100px">
				<h5> CALL US</h5>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit </p>
			</div>
			
			<div class="box">
				<img src="cb.png" width="100px">
				<h5> HELP</h5>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit </p>
			</div>
			
			<div class="box">
				<img src="cc.jpg" width="100px">
				<h5> MESSAGE US</h5>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit </p>
			</div>
			
			<div class="box">
				<img src="cd.jpg" width="100px">
				<h5> FAQs</h5>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nibh ac tellus maximus pretium. Sed pellentesque metus lorem, vel fermentum ligula rhoncus eget. Duis eget odio metus. Nunc euismod velit </p>
			</div>
		</div>
		
		</div>
		<div id="foot">
		<footer>
		
				<?php
				if(isset($_SESSION['u_id'])){
							if(!isset($_COOKIE[$cookie_name])) {
								 echo "Cookie named '" . $cookie_name . "' is not set!";
							} else {
								 echo "Cookie '" . $cookie_name . "' is set!<br>";
								 echo "Value is: " . $_COOKIE[$cookie_name];
							}
							}
							?>
				
				<p> copyright &copy;</p>

		</footer>
		</div>
	</body>
</html>

