<?php
session_start();
if(isset($_POST['username']))
{
	$username=$_POST['username'];
}
if(isset($_POST['password']))
{
	$password=$_POST['password'];
}
$conn = mysqli_connect("localhost","root","111","booking");
if(!$conn){
	die("could not connect".mysqli_error());
}
else
{
	 echo "";
} 
   $username=$_SESSION['login_username']; 
  $result=mysqli_query($conn,"update register set password= '$password' where username= '$username' ")
			or die("Failed to query database".mysqli_error());
		echo 'Password is changed';
?>	 
