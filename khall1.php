<?php

if(isset($_POST['username']))
{
		$username=$_POST['username'];
}
if(isset($_POST['name']))
{
		$name=$_POST['name'];
}
if(isset($_POST['dfrom']))
{
	$dfrom=$_POST['dfrom'];

}
if(isset($_POST['dto']))
{
	$dto=$_POST['dto'];
}	
if(isset($_POST['tfrom']))
{
	$tfrom=$_POST['tfrom'];
}
if(isset($_POST['coordinator']))
{
	$coordinator=$_POST['coordinator'];	
}
if(isset($_POST['email']))
{
		$email=$_POST['email'];
}
$message="Your hall is been booked successfully for '$name' in Krishna Hall  on '$dfrom' to '$dto' at '$tfrom' . For further queries ask '$coordinator' ";
/*
echo "CONNECTED"."</br>";
echo $name."</br>";
echo $dfrom."</br>";
echo $dto."</br>";
echo $tfrom."</br>";

*/
$conn = mysqli_connect("localhost","root","111","booking");

if(!$conn){
	die("could not connect".mysqli_error());
}
else{
	
	$sql= "INSERT INTO hkrishna(name,dfrom,dto,tfrom,coordinator)VALUES('$name','$dfrom','$dto','$tfrom','$coordinator')";
	$result=mysqli_query($conn,$sql);
	//echo $result;
	if($result==1)
	{
		$result1=mysqli_query($conn,"select email from register where username ='$username'")
			or die("Failed to query database".mysqli_error());
	$row=mysqli_fetch_array($result1);
	  $email1=$row['email'];
	
		include("c1.php");
		
	}
	else{
	   echo "fail".mysqli_error($conn);
				 
	mysqli_close($conn);
	}
}
?>