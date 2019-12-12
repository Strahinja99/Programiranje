<?php
    session_start();
    if(!isset($_SESSION['em'])){
        header('Location: index.html');
    }
?>	

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PC SHOP</title>
		<script src="login.js"></script>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body class="bg">
		<nav>
			<img src="slike/fan.png" alt="fan">
			<ul>
				<li><a href="kontakt.php">KONTAKT</a></li>
				<li><a href="proizvodi.php">PROIZVODI</a></li>
				<div class="dropdown">
					<button class="dropbtn">PONUDA<i class="fa fa-caret-down"></i></button>
					<div class="dropdown-content">
						<a href="procesori.php">Procesori</a>
						<a href="maticne.php">Maticne ploce</a>
						<a href="graficke.php">Graficke kartice</a>
					</div>
					
					
				</div>
				
				<li><a href="pocetna.php">POCETNA</a></li>
				<div class="dropdown">
					<button class="dropbtn">KORISNIK <?php echo $_SESSION['em'] ?><i class="fa fa-caret-down"></i></button>
					<div class="dropdown-content">
						<a href="profil.php">PROMENI LOZINKU</a>
						<a href="upload.php">UPLOAD</a>
						<a href="galerija.php">GALERIJA</a>
						<a href="odjavise.php">ODJAVI SE</a>
					</div>
				</div>
			</ul>
		</nav>
	
		<div class="pocetna">
			<img src="slike/fan.png" alt="fan">
			<h1>DOBRODOSLI U PC SHOP</h1>
		</div>
			
	
		<footer>
			<p>STRAHINJA DRINIC ALL RIGHTS RESERVED 2019 ©</p>
		</footer>
	</body>
</html>