<?php
session_start();

if(isset($_POST['submit'])){

$dbservername="localhost";
$dbusername="root";
$dbpasword="";
$dbname="student";

$conn=mysqli_connect($dbservername,$dbusername,$dbpasword,$dbname);

	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	

				$sql= "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$email'";
				$result= mysqli_query($conn,$sql);
				$resultCheck=mysqli_num_rows($result);
				
				if($resultCheck<1){
					header("Location: ../srmevent/login.php?login=error");
					exit();
				}
				else{
					if($row=mysqli_fetch_assoc($result)){
						$hashedpwdcheck=password_verify($pwd,$row['user_pwd']);
					if($hashedpwdcheck==false){
						header("Location: ../srmevent/login.php?login=passworderror");
						exit();
					}elseif($hashedpwdcheck==true){
						//logging in the user here
						$_SESSION['u_id']=$row['user_id'];
						$_SESSION['u_first']=$row['user_first'];
						$_SESSION['u_last']=$row['user_last'];
						$_SESSION['u_email']=$row['user_email'];
						$_SESSION['u_year']=$row['user_year'];
						$_SESSION['u_uid']=$row['user_uid'];
						if($_SESSION['u_year']==1){
						header("Location: ../srmevent/oneyear.php?login=success");
						exit();}
						else if($_SESSION['u_year']==2){
						header("Location: ../srmevent/twoyear.php?login=success");
						exit();}
						else if($_SESSION['u_year']==3){
						header("Location: ../srmevent/threeyear.php?login=success");
						exit();}
						else if($_SESSION['u_year']==4){
						header("Location: ../srmevent/fouryear.php?login=success");
						exit();}
						else{
							
						}
						
					}
					}
				}
			}
else{
	header("Location: ../srmevent/login.php?login=error");
	exit();
}
?>