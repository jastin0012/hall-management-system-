<html>
	<head>
		<title>List of halls</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
	<?php
	 $conn = mysqli_connect("localhost","root","111","booking");
	 $username=$_session['login_user'];
	 

if(!$conn){
	die("could not connect".mysqli_error());
}
else
{
	 echo "";
} 
$result=mysqli_query($conn,"select department from register where username ='$username'")
			or die("Failed to query database".mysqli_error());
	$row=mysqli_fetch_array($result);?>
	<p align=right>Profile Name:- <?php echo $username?></p>
	<p align=right>Department:-<?php  echo $row['department'] ?> </p>

		<!-- Banner -->
	<!--		<section id="banner">
				<h2><strong></strong>Login Form</h2>
				<p>Click here to Enter</p>
				<ul class="actions">
					<li><a href="index1.php" class="button special">Login</a></li>
				</ul>
			</section>
				-->

		
	<section id="one" class="wrapper special">
				<div class="inner">
					<header class="major">
						<h2>List of Available Halls</h2>
					</header>
					<div class="features">
						<div class="feature">
							<h3>KRISHNA HALL</h3>
							<a href="khall.php">
							<img src="krishnahall.jpg" width="250" height="100" >
							</a>
							<p></p>
						</div>
						<div class="feature">
							<h3>CONVENTION CENTER</h3>
							
							<a href="chall.php">
							<img src="cc.jpg" width="250" height="100" >
							</a>
							<p></p>
						</div>
						<div class="feature">
							<h3>MCA SEMINAR HALL</h3>
								<a href="mcahall.php">
							<img src="mca.jpg" width="250" height="100" >
							</a>
							<p></p>
						</div>
						<div class="feature">
							<h3>DRAWING HALL</h3>
						<a href="dhall.php">
							<img src="drawings.jpg" width="250" height="100" >
							</a>
							<p></p>
						</div>
						<div class="feature">
							<h3>BS-03</h3>
								<a href="bshall.php">
							<img src="BS.jpg" width="250" height="100" >
							</a>
							<p></p>
						</div>
						<div class="feature">
							<h3>OTHERS</h3>
								<a href="hall.php">
							<img src="others.jpg" width="250" height="100" >
							</a>
							<p></p>
						</div>
					</div>
				</div>
			</section>
			
			<section id="two" class="wrapper style2 special">
				<div class="inner narrow">
					<header>
						<h2>For any Queries</h2>
					</header>
					<form class="grid-form" method="post" action="send_mail.php">
						<div class="form-control narrow">
							<label for="name">Name</label>
							<input name="name" id="name" type="text">
						</div>
						<div class="form-control narrow">
							<label for="email">Email</label>
							<input name="email" id="email" type="email">
						</div>
						<div class="form-control">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="4"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" type="submit"></li>
						</ul>
					</form>
				</div>
			</section> 
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>