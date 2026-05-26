
<?php
if(isset($_POST['username']))
{
		$username=$_POST['username'];
}
if(isset($_POST['email']))
{
	$email=$_POST['email'];
}

$conn = mysqli_connect("localhost","root","111","booking");
if(!$conn){
	die("could not connect".mysqli_error());
}
else
{
	 echo "connected";
} 
  $_SESSION['login_username']="$username";
  $result=mysqli_query($conn,"select * from register where username ='$username'and email='$email'")
			or die("Failed to query database".mysqli_error());
		echo '<br>';
	$row=mysqli_fetch_array($result);
if ($row['username']== $username && $row['email']== $email )
	{
	 $otp = rand(100000,999999);
	 $_SESSION['login_otp'] = "$otp";
	  $_SESSION['login_username']="$username";
	 include("forget2.php");   
    }  
    else
	{
		echo "Failed to Login";
	}	 

?>	 
