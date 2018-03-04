<?php
session_start();
require_once "function.php";

$user=new LoginRegistration();
$user->logOutUser();
header("Location:login.php");
exit();

?>