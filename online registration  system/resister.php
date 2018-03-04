<?php 
require_once"function.php";
$user = new LoginRegistration();
if($user->getSession()){
	header( 'Location:index.php');
	exit();
}

?>

<!DOCTYPE html>
<html  lang="en">
<head>
<meta charset="UTF-8">
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div class="wrapper">
<div class="header">
<h3> PHP OOP Login-Resister System</h3> 

</div>

<div class="mainmenu">
<ul>

<li><a href="index.php"> Home</a></li>
<li><a href="profile.php"> Show profile</a></li>
<li><a href="ChangePassword.php">Change Password</a></li>
<li><a href="logout.php"> Logout</a></li>
<li><a href="login.php"> Login </a></li>
<li><a href="Resister.php">Register </a></li>
</ul>
</div>


<div class="content">
<h2> Resister</h2>

<p class="msg">
      
<?php

if($_SERVER['REQUEST_METHOD'] =='POST'){

	$username= $_POST['username'];
	$password= $_POST['password'];
	$name    = $_POST['name'];
 	$email   = $_POST['email'];
	$website = $_POST['website'];

	if(empty($username) or empty($password)or empty($name) or empty($email) or empty($website)){
		echo"<span style='color:#e53d37'> Error... Field must not be empty</span>";
	}

		else{
			$password=md5($password);
		$register=$user->	registerUser($username,$password,$name,$email,$website);

		if($register){
			echo" <span style='color:green'>Register done <a href='login.php'> Click here </a> for login.</span>";
		} else {
			echo"<span style='color:#e53d37'>username/ email already exist.</span>"; 
		}
		}
	}


 ?>



      </p>
<div class="login_reg">

<form  action="" method="post">
<table>
	
	<tr>
	<td>  Username:</td>
	<td> <input type ="text" name="username" placeholder="Please give your username"/
	></td>
	</tr>


	<tr>
	<td>Password:</td>
	<td><input type="password" name="password" placeholder="Please give your password"/></tds>
	</tr>


	<tr>
	<td>Name:</td>
	<td><input type="text" name="name" placeholder="Please enter your name "/></td>
	</tr>


	<tr>
	<td>Email:</td>
	<td><input type="email" name="email" placeholder="Please enter your email address"/></td>
	</tr>

	<tr>
	<td>Website:</td>
	<td><input type="text" name="website" placeholder="Please enter your webside address"/></td>
	</tr>

<tr>
<td colspan="2">
<span style="float:right">
<input type ="submit" name="register" value="Register"/>
<input type="reset" value="Reset"/>
</span>

</td>
</tr>


</table>


</form>
</div>




<div class="footer">

<h3> www.raihanblog.com</h3>



</div>
      </div>




</body>
</html>