<?php
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
if(isset($_POST['tto']))
{
	$tto=$_POST['tto'];	
}

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
	
	$sql= "INSERT INTO event(name,dfrom,dto,tfrom,tto)VALUES('$name','$dfrom','$dto','$tfrom','$tto')";
	$result=mysqli_query($conn,$sql);
	//echo $result;
	if($result==1){
		
	include("confirmation.php");

	}
	else{
	   echo "fail".mysqli_error($conn);
				 
	mysqli_close($conn);
	}
}
?>