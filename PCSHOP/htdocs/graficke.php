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
						<a href="index.html">ODJAVI SE</a>
					</div>
			</ul>
		</nav>
			<div class="gpu1">
				<img src="slike\gpu1.png" alt="graficka">
				<p>Core/Memory

Boost Clock / Memory Frequency
1366 MHz / 8000 MHz
8GB GDDR5
Armor 2X Thermal Design

TORX Fan
- Dispersion fan blade: Steep curved blade accelerating the airflow.
- Traditional fan blade: Provides steady airflow to massive heat sink below.
Zero Frozr: Stopping the fan in low-load situations, keeping a noise-free environment.
Advanced Airflow Control technology: Improves cooling efficiency by using advanced aerodynamics to focus airflow.
Afterburner Overclocking Utility

Wireless control through Android/iOS devices.
Predator: In-game video recording.
Kombustor: DirectX12 benchmark.
Supports multi-GPU setups.
Military Class 4 Components

Certified to MIL-STD-810G standards for top stability and quality.
Built with Hi-c CAP, Solid CAP, and New SFC components.</p>
			</div>
			<div class="gpu2">
				<img src="slike\gpu2.png" alt="graficka2">
				<p>Core/Memory

Boost Clock / Memory Speed
1755 MHz / 14 Gbps
11GB GDDR6
TORX FAN 3.0: Supremely silent

Dispersion fan blade: Steeper curved blade accelerating the airflow.
Traditional fan blade: Provides steady airflow to massive heat sink below.
Double ball bearing: Strong and lasting core for years of smooth gaming.
TRI-FROZR Thermal Design

Using three of the award-winning TORX Fans 3.0 with Double Ball Bearings.
Using groundbreaking aerodynamic techniques, the heatsink is optimized for efficient heat dissipation.
RGB Mystic Light

Customize colors and LED effects with exclusive MSI software and synchronize the look & feel with other components.
Afterburner Overclocking Utility

Wireless control through Android/iOS devices.
Predator: In-game video recording.
Kombustor: DirectX12 benchmark.
			</p>
		</div>
		

		<footer>
			<p>STRAHINJA DRINIC ALL RIGHTS RESERVED 2019 ©</p>
		</footer>
	</body>
</html>