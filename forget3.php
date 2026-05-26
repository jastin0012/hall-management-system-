<?php
session_start();
 if(isset($_POST['otp1']))
{
		$otp1=$_POST['otp1'];
}
$otp=$_SESSION['login_otp']; 
if ($otp1==$otp)
{

   include("forget4.php");
}
else 
{
	echo"Check ur OTP value";
}