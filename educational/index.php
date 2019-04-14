<?php
$con=mysqli_connect("localhost","root","123456","educationalDB");
session_start();

if (isset($_POST['login'])){	
	$name  =$_POST['username'];
    $Password = $_POST['Password'];
	$selectNP="SELECT * FROM users WHERE Name='$name' AND Password='$Password'";
	$resultNP=mysqli_query($con,$selectNP);
    
	// If result matched $myusername and $mypassword, table row must be 1 row
    if(mysqli_num_rows($resultNP)>0){
		$row = mysqli_fetch_array($resultNP);
		session_start();
		
		$_SESSION['user_id']= $row['User_ID'];
		$_SESSION['name']= $row['name'];
		$id = $_SESSION['user_id'];
		
		#$_SESSION=$row['Email'];
		header('Location: home.php');

	}else {	
    $error = "Your Login Name or Password is invalid";
	}
}
if (isset($_POST['Signup'])){
	   header('Location: signup.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type= "text/css" href="assets/css/login.css">
		<title> Login Page</title>
	</head>
	<body>
		<div id="login">
			<form method="post" action="index.php">
				 <div class="text">Game Based Educational  </div>				 
				 <div  class="forms" >
						<input type="text" id="name" name="username" placeholder="UserName"/>
						<input type="password"  name="Password" id ="pass" placeholder="Password"/>
						<br>
						<button type="submit" id="intext" name="login">Login</button>
				</div>
				<div class="rem">
					
					 <input type="checkbox" />    
					 Remmber me
					
					<div style = "font-size:28px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
				</div>
				<div class="container">
					<span class="psw">Forgot <a href="#">password?</a></span>
					<p class ="have">Dont Have An Account?
						<button type="submit" id ="insign" name="Signup">Sign Up</button>
					</p>
			  </div>
		</form>
		</div>
	</body>
</html>
