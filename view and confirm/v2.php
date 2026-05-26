<html>
<head>
<title> Viewing the Table </title>
<body>
<center>
<h1>To view the bookings of Krishna Hall
<br>
<table border="1">
<tr>
 <th>Name</th>
 <th>Begin</th>
 <th>End</th>
 <th>Time</th>
</tr>
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

    $conn = mysqli_connect("localhost","root","111","booking");
	 $result1=mysqli_query($conn,"select count(*) from hdrawing ")
			or die("Failed to query database".mysqli_error());
    $row1=mysqli_fetch_array($result1);
	 $v=$row1['count(*)'];
	$result=mysqli_query($conn,"select * from hdrawing ")
			or die("Failed to query database".mysqli_error());
	
 for ($n=1;$n<=$v;$n++)  
   {
    $row=mysqli_fetch_array($result);	  
 ?>
    <tr>
    <td><?php echo $row['name'];?></td>
	<td><?php echo $row['dfrom'];?></td>
	<td><?php echo $row['dto'];?></td>
	<td><?php echo $row['tfrom'];?></td>
    </tr>
    <?php 
	}
  ?>     
  <center>
  <body>
  <head>
  <html>