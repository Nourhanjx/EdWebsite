<?php
$con=mysqli_connect("localhost","root","123456","educationalDB");

if (isset($_POST['signUp']))
{
    $name  =$_POST['username'];
    $Password = $_POST['Password'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$type=$_POST['type'];

	
    $query = "INSERT INTO users (name,Password,age,Gender,Type) VALUES ('$name','$Password','$age','$gender','$type')";
	mysqli_query($con,$query);
	header('Location: index.php');
 }

 ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/registration.css">

</head>
<body>
<form  method="post" action="signup.php"enctype="multipart/form-data" >
<div id="Register">
<div class="text">Registration Form </div><br>
 
 
<div  class="forms"  method="post" >


    <label for="username"> User Name:</label>
    <input type="text" class="form-control" name="username" id="usernameField" placeholder="username"><br>
<label>age:</label>
<input type="number" name="age" value=""><br>
    <label for="password"> Password:</label><br>
    <input type="password" name="Password" id="passwordField" placeholder="Password"><br>

<label class="control-label" >Type:</label>
										<select name="type" required>
										
													<option>Student</option>
													<option>teacher</option>
													<option></option>
										</select><br>
 <label class="control-label" >Gender:</label>
										
										<select name="gender" required>
										
													<option>Male</option>
													<option>Female</option>
													</select>
													<br>
  <button  type="submit"  name="signUp" value="submit" >Sign up</button>
   </div>

  </form>

  </section>
  
</div>  
  
</body>
</html>