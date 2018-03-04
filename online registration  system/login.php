<?php 
require_once"function.php";
$user = new LoginRegistration();

  
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
<li><a href="Register.php">Register </a></li>
</ul>
</div>


<div class="content">
<h2> Login</h2>

<p class="msg">
      

     <?php
     if($_SERVER['REQUEST_METHOD']=='POST'){

     	$email=$_POST['email'];
     	$password=$_POST['password'];

     


     if(empty($email) or empty($password)){
     	echo"<span style ='color:#e53d37'>Field must not be empty..</span>";

     } else{
     	$password=md5($password);
     	 $login = $user->loginUser($email,$password);

        if($login){

       header('Location:index.php');

        } else{
        	echo"  <span style ='color:#e53d37'>Error... Email or Password not match</span>";
        }

     	 }
 }

?>

      </p>
<div class="login_reg">

<form  action="" method="post">
<table>
    <tr>
	<td>Email:</td>
	<td><input type="email" name="email" placeholder="Please enter your email address"/></td>
	</tr>	
	


	<tr>
	<td>Password:</td>
	<td><input type="password" name="password" placeholder="Please give your password"/></tds>
	</tr>


	

	

	

<tr>
<td colspan="2">
<span style="float:right">
<input type ="submit" name="login" value="login"/>
<input type="reset" value="Reset"/>
</span>

</td>
</tr>


</table>


</form>
</div>




<div class="footer">

<h3> www.raihanblog.com</h3>








</body>
</html>