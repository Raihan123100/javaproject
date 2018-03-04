<?php


session_start();

require_once"function.php";
$user = new LoginRegistration();

$uid=$_SESSION['uid'];

 
 if(!$user->getSession()){
	header( 'Location:login.php');
	exit();

}

?>
<!DOCTYPE html>
<html  lang="en">
<head>
<meta charset="UTF-8">
	<title>Change Password</title>
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

    $old_pass=$_POST['old_password'];
    $new_pass=$_POST['new_password'];
    $confirm_pass=$_POST['confirm_password'];

    if(empty($old_pass) or empty($new_pass) or empty($confirm_pass)){
      echo "<span style='color:#e53d53'>Error..Field must not be empty</span>";
    } else if($new_pass != $confirm_pass){
      echo "<span style='color:#e53d53'>Error..password not matched</span>";

    }  else{


      $old_pass=md5($old_pass);
      $new_pass=md5($new_pass);
      $password=$user->updatePassword($uid,$new_pass,$old_pass);
    }


   }
    
?>
      </p>

      

<div class="login_reg">

<form action="" method="post"

<table>
  
  <tr>
  <td>  Old Password:</td>
  <td> <input type ="password" name="old_password" placeholder="Please give your old password"/
  ></td>
  </tr>


  <tr>
  <td> New Password:</td>
  <td><input type="password" name="new_password" placeholder="Please give your new password"/></td>
  </tr>


  <tr>
  <td>Confirm Pass:</td>
  <td><input type="password" name="confirm_password" placeholder="Please enter your password again "/></td>
  </tr>


 

  

<tr>
<td colspan="2">
<span style="float:right">
<input type ="submit" name="update" value="Update"/>
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