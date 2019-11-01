<?php
// Start the session
session_start();
 include 'logout.php';

?>

<html>
<head>
<link href="Styles/styles.css" rel="stylesheet" />
<title>Bikes - Moto Montreal</title>
	
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
					<form id="search">
						<input id="searchfld" type="text" placeholder="Search motos..." />
					</form>
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
					
				</li>
			</ul>
		</nav>
	</nav>
	<!-- From here I am adding the listing page of motos -->
	
	<div id="moto-list">
	
	<?php
	
		$host = "localhost";
		$dbUname = "root";
		$dbPsw = "";
		$dbname = "dbmoto";

		 $conn = mysqli_connect($host, $dbUname, $dbPsw, $dbname);
		 $URL_BASE = "http://localhost/DELIVERABLE%202%20Dmitri%20Atanasov/Images/";

		 $queryMoto = "Select * from `motos`";
		 $resultMotos = mysqli_query($conn, $queryMoto);

		 while($rowMoto=$resultMotos->fetch_assoc()){
			 //echo "<img src=".$URL_BASE.$rowMoto['image']."\"/img id=".$rowMoto['img_id'].">";
			 echo "<img id=\"" .$rowMoto['img_id']. "\" src=\"Images/".$rowMoto['image']."\" alt=\"".$rowMoto['moto_id'].", ".$rowMoto['year'].", ".$rowMoto['description'].", ".$rowMoto['moto_price']."\"/>";
		 }
		 ?>
	
				<!-- Pictures of motos 
				<img id="myImg" src="Images/1smallT.png" alt="101, 2018, Triumph Bonneville Bobber, Price: 34200"/>
			
			
				<img id="myImg1" src="Images/2smallT.png" alt="102, 2019, Triumph Speedmaster, Price: 33000 " />
				
				<img id="myImg2" src="Images/3smallT.png" alt=" 103, 2018, Triumph Scrambler 800 XE, Price: 23000"/>
				
				<img id="myImg3" src="Images/4smallT.png" alt="104, 2019, Triumph 2019 Tiger 1200 XRX Low, Price: 19800"/>
				
				<img id="myImg4" src="Images/5smallT.png" alt="105, 2019, Triumph Speed Twin, Price: 25300"/>
				
				<img id="myImg5" src="Images/6smallT.jpg" alt="106, 2017, Triumph Bonneville T100, Price: 22222"/>
				
				<img id="myImg6" src="Images/7smallT.jpg" alt="107, 2017, Triumph Street Triple R 2019, Price: 44999"/>
				
				<img id="myImg7" src="Images/8smallT.png" alt="108, 2019, Triumph Tiger 1200 XCA, Price: 28777"/>
				
				<img id="myImg8" src="Images/9smallT.png" alt="109, 2019, Triumph Street Scrambler, Price: 26120"/>
				-->
				
	<div id="myModal" class="modal">
		<span class="close">×</span>
		<img class="modal-content" id="img01">
		<div id="caption"></div>
		<a class="edit" id="edit" href="editPage.php">Edit</a>
	</div>
				
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
<script src="JavaScript/listingPage.js"></script>
</body>
</html>