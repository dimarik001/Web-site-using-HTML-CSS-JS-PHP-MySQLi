<?php
// Start the session
session_start();
 include 'logout.php';

?>
<html>
<head>
<link href="Styles/login.css" rel="stylesheet" />
<title>Home - Moto Montreal</title>
	
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
	<ul>
	<?php 
		if(isset($_SESSION['username'])){
			$user = $_SESSION['username'];
			echo '<li><a class="button" id="Logout" href="homepage.php?action=logout">Log Out</a></li>';
			echo '<li><a class="button" id="Logout" href="listingPage2.php">Bikes</a></li>';
			echo '<li><a class="button" id="Logout" href="listingPage2.php">'.$user.'</a></li>';
			
		} 
		else{
			echo '<li><a class="button" id="Register" onclick=document.getElementById("id02").style.display="block">Register</a></li>
		<li><a class="button" id="Login"  onclick=document.getElementById("id01").style.display="block">Log in</a></li>
		<li><a class="button" id="Logout" href="listingPage2.php">Bikes</a></li>';
		}
	?>
	<!--
		<li><a class="button" id="Register" onclick="document.getElementById('id02').style.display='block'">Register</a></li>
		<li><a class="button" id="Login"  onclick="document.getElementById('id01').style.display='block'">Log in</a></li>
		<li><a class="button" id="Logout" href="listingPage2.html">Bikes</a></li>
		-->
	</ul>
<!-- REGISTER START -->
<div id="id02" class="modal">

  
  <form class="modal-content animate" action="register.php" method="POST">
    <div class="imgcontainer1">
	<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">x</span>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
	  
	  <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>
<!-- END -->

<!-- LOGIN  START Insert sign in and register 
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>-->

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
      
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<!-- END -->

<!-- START -->

<!-- END -->
</div>
	</nav>
		<img src="Images/home_page_picture2.jpg" alt="Nature" style="width:100%;">	
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
<script src="JavaScript/loginPage.js"></script>
<script src="JavaScript/register.js"></script>
</body>
</html>