<?php
if(isset($_POST['name']))
{
		$name=$_POST['name'];
}
if(isset($_POST['department']))
{
	$department=$_POST['department'];
}
if(isset($_POST['phoneno']))
{
	$phoneno=$_POST['phoneno'];
}	
if(isset($_POST['email']))
{
	$email=$_POST['email'];
}
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
else{
	$sql= "INSERT into register(name,department,phoneno,email,username,password)VALUES('$name','$department','$phoneno','$email','$username','$password')";
	$result=mysqli_query($conn,$sql);
	echo $result;
	if($result==1){
		echo"Successfully Registered";
	}
	else{
		 include("login.php");
	}
	mysqli_close($conn);
}
?>