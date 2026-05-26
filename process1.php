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
if(isset($_POST['department']))
{
	$department=$_POST['department'];
}
$conn = mysqli_connect("localhost","root","111","booking");
if(!$conn){
	die("could not connect".mysqli_error());
}
else
{
	 echo "";
} 
  $result=mysqli_query($conn,"select * from register where username ='$username'and password='$password'")
			or die("Failed to query database".mysqli_error());
		echo '<br>';
	$row=mysqli_fetch_array($result);
	if ($row['username']== "vichu123" && $row['password']== "123945")
	{
		$_session['login_user']=$username;
         include("index1.php");
	}
if ($row['username']== $username && $row['password']== $password )
	{
	 $_session['login_user']=$username;
       include("index.php");
    }  
    else
	{
		echo "Failed to Login";
	}	 

?>	 
