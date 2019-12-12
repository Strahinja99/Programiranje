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
						<a href="odjavise.php">ODJAVI SE</a>
					</div>
			</ul>
		</nav>
	
		<div class="zamaticnu1">
			<img src="slike\mbo.png" alt="maticna">
			<p>Supports AMD® Ryzen 1st and 2nd Generation/ Ryzen™ with Radeon™ Vega Graphics/ Athlon™ with Radeon™ Vega Graphics and A-series / Athlon™ X4 Processors for Socket AM4
Supports DDR4-3200+(OC) Memory
DDR4 Boost: Give your DDR4 memory a performance boost
VR Ready: Best virtual reality game experience without latency
GAMING LEDs: Ambient LED lights for an awesome look & feel
Lightning Fast Game experience: Turbo M.2
Audio Boost with Nahimic 2: Reward your ears with studio grade sound quality for the most immersive gaming experience
GAMING LAN with LAN Protect: The best online gaming experience with lowest latency and bandwidth management
Military Class 4, Guard-Pro: Latest evolution in high quality components for best protection and efficiency
MULTI-GPU: With Steel Armor PCI-E slots. Supports AMD Crossfire™
Mystic Light Sync: Synchronize other RGB solutions with your gaming rig and control all LEDs in one click
In-Game Weapons: Game Boost, GAMING Hotkey, X-Boost,
EZ Debug LED: Easiest way to troubleshoot
Click BIOS 5: Award-winning BIOS with high resolution scalable font, favorites and search function
GAMING CERTIFIED: 24-hour on- and offline game and motherboard testing by eSports players
WHQL certified for Windows 10</p>

		</div>
		<div class="zamaticnu2">
			<img src="slike\mbo2.png" alt="maticna2">
			<p>Supports 7th / 6th Gen Intel® Core™ / Pentium® / Celeron® processors for LGA 1151 socket
Supports DDR4-3866+(OC) Memory
DDR4 Boost with Steel Armor: Give your DDR4 memory a performance boost
VR Ready and VR Boost: Best virtual reality game experience without latency, reduces motion sickness
Mystic Light and Mystic Light Sync: 16.8 milliom colors /17 effects controlled in one click with GAMING APP or mobile devices.
Lightning Fast Game experience: Twin Turbo M.2, Steel Armor, M.2 Shield. Intel Optane Memory Ready, Lightning USB 3.1 Gen2
Audio Boost 4 with Nahimic 2: Reward your ears with studio grade sound quality for the most immersive gaming experience
GAMING LAN with LAN Protect, powered by Intel® : The best online gaming experience with lowest latency and bandwidth management
Military Class 5, Guard-Pro: Latest evolution in high quality components for best protection and efficiency
MULTI-GPU: With Steel Armor PCI-E slots. Supports NVIDIA SLI™ & AMD Crossfire™
In-Game Weapons: Game Boost, GAMING Hotkey, X-Boost,
EZ Debug LED: Easiest way to troubleshoot
Click BIOS 5: Award-winning BIOS with high resolution scalable font, favorites and search function
GAMING CERTIFIED: 24-hour on- and offline game and motherboard testing by eSports.</p>
		</div>


		<footer>
			<p>STRAHINJA DRINIC ALL RIGHTS RESERVED 2019 ©</p>
		</footer>
	</body>
</html>