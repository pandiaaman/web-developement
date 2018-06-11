<?php
if(isset($_POST['submit'])){

$dbservername="localhost";
$dbusername="root";
$dbpasword="";
$dbname="student";

$conn=mysqli_connect($dbservername,$dbusername,$dbpasword,$dbname);


	$first=mysqli_real_escape_string($conn,$_POST['first']);
	$last=mysqli_real_escape_string($conn,$_POST['last']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$year=mysqli_real_escape_string($conn,$_POST['year']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	$pwdc=mysqli_real_escape_string($conn,$_POST['pwdc']);
	
	if(!preg_match("/^[a-zA-Z]*$/",$first)||!preg_match("/^[a-zA-Z]*$/",$last)){
			header("Location: ../srmevent/signup.php?signup=invalid");
			exit();
		}
		else{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header("Location: ../srmevent/signup.php?signup=invalidemail");
			exit();
			}
			else{
				$sql= "SELECT * FROM users WHERE user_uid='$uid'";
				$result= mysqli_query($conn,$sql);
				$resultCheck=mysqli_num_rows($result);
				
				if($resultCheck>0){
					header("Location: ../srmevent/signup.php?signup=usertaken");
					exit();
				}
				else{
					if($pwd!=$pwdc){
						header("Location: ../srmevent/signup.php?signup=confirmerror");
					}
				else{
					$hashed=password_hash($pwd,PASSWORD_DEFAULT);
					$sql="INSERT INTO users (user_first, user_last,user_email,user_uid,user_year,user_pwd) VALUES ('$first','$last','$email','$uid','$year','$hashed');";
					$result=mysqli_query($conn,$sql);
					header("Location: ../srmevent/index.php?signup=success");
					exit();
				}
			}
		}		
}
}

else{
	header("Location: ../srmevent/signup.php");
	exit();
}
?>