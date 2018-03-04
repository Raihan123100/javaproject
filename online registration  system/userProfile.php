<?php


session_start();

require_once"function.php";
$user = new LoginRegistration();

$uid=$_SESSION['uid'];
$username=$_SESSION['uname'];

if (isset($_REQUEST['id'])){
  $id= $_REQUEST['id'];

} else{
  header("Location:index.php");
  exit()  ;
}

 if(!$user->getSession()){
  header( 'Location:login.php');
  exit();

}

?>
<!DOCTYPE html>
<html  lang="en">
<head>
<meta charset="UTF-8">
  <title>User Profile</title>
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
      
  
      </p>

      <h2> Welcome,<?php echo $username; ?></h2>
      <p class="userlist"> Profile of:<?php $user->getUsername($id);?> </p>

      <table class="tbl_one">
<?php
$getUsers=$user->getUserById($id);

foreach($getUsers as $user){
	




?>
  
 <tr>
 <td>Username</td>
 <td><?php echo $user['username']; ?> </td>
 <tr>

 <tr>
 <td> Name</td>
 <td><?php echo $user['name']; ?></td>
 <tr>

 <tr>
 <td>Email</td>
 <td><?php echo $user['email']; ?></td>
 <tr>

 <tr>
 <td>Website</td>
 <td><?php echo $user['website']; ?></td>
 <tr>

 <?php } ?>

</table>

 

</div>

<div class="footer">


<h3> www.raihanblog.com</h3>


</div>
</div>





</body>
</html>