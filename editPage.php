<?php
session_start();
 include 'logout.php';
?>

<html>
<head>
<link href="Styles/edit.css" rel="stylesheet" />
<title>Edit - Moto Montreal</title>
	
	<!-- Mini logo -->
	<link rel="apple-touch-icon" sizes="180x180" href="file:///E:/Software%20Applications/Session%204/DATABASE%20DESIGN%20PROJECT/Project/DELIVERABLE%202/Images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="E:/Software%20Applications/Session%204/DATABASE%20DESIGN%20PROJECT/Project/DELIVERABLE%202/Images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="E:/Software%20Applications/Session%204/DATABASE%20DESIGN%20PROJECT/Project/DELIVERABLE%202/Images/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

</head>
<body>
	<div class="projectName">
		<h3>Welcome to Moto Montreal</h3>
		<a id="logo" href="ListingPage2.php">
			<img id="logo" src="Images/logo.png"/>
		</a>
		
	</div>
	<nav id="head-menu">
		<nav>
			<ul>
				<li id="header-search">
					<!--<form id="search">
						<input type="text" placeholder="Search motos..." />
					</form>-->
	<?php 
		if(isset($_SESSION['username'])){
			$user = $_SESSION['username'];
			echo '<li><a class="button" id="Logout" href="homepage.php?action=logout">Log Out</a></li>';
			echo '<li><a class="button" id="Logout" href="homePage.php">Home</a></li>';
			echo '<li><a class="button" id="Logout" href="listingPage2.php">'.$user.'</a></li>';
			
		} 
		else{
			echo '<li><a class="button" id="Register" onclick=document.getElementById("id02").style.display="block">Register</a></li>
		<li><a class="button" id="Login"  onclick=document.getElementById("id01").style.display="block">Log in</a></li>
		<li><a class="button" id="Logout" href="homePage.php">Home</a></li>';
		}
	?>
					<!--<li><a class="button" id="Logout" href="#logout">Log Out</a></li>
					<li><a class="button" id="Logout" href="listingPage2.php">Bikes</a></li>
					<li><a class="button" id="Logout" href="homePage.php">Home</a></li>-->
				</li>
			</ul>
		</nav>
	</nav>
	<div>
		<div class="position">
		<form >
			<b>Information:<b><br>
			<input class="form-field" type="text" name="uname" />
			<h3>Upload new Image:</h3>
		<form action="/action_page.php">
			Select picture: <input type="file" name="myFile" multiple><br><br>
			<input type="submit">
		</form>
		
		</form>
		</div>
		<img class="imgHome" src="Images/edit_page.jpg" alt="Moto"/>
	</div>

		
	
<footer>
	<ul>
	<div>
	<h3>
		Contact Info
	</h3>
<div class="contact_info">
	<p class="phone_number">1-800-561-
	0609</p>
	<p id="adress" class="adress">
	<span>ADRESS</span>
	<br>
	Montreal (QC) H3K 1V7
	<br>
	Canada
	</p>
	<p>
	 <b>Email:</b>
	 <a class="email" href="mailto:
	 triuph@motomontreal.com">
	 triuph@motomontreal.com</a>
    </p>
</div>
	</div>
		<div class="social-footer-icons">
			<ul>
			<a href='https://www.facebook.com'>
			<img id="icons" src="Images/Facebook1.png" alt="Facebook"></a>
						
			<a href='https://www.instagram.com'>
			<img id="icons" src="Images/Instagram1.png" alt="Instagram"></a>
						
			<a href='https://www.linkedin.com'>
			<img id="icons" src="Images/Linkedin1.png" alt="Linkedin"></a>
						
			<a href='https://twitter.com/'>
			<img id="icons" src="Images/Twitter1.png" alt="Twitter"></a>
			</ul>
		</div>
	</ul>
</footer>
</body>
</html>