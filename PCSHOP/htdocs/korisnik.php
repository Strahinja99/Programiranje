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
        <div class="dropdown">
          <button class="dropbtn">PONUDA<i class="fa fa-caret-down"></i></button>
          <div class="dropdown-content">
            <a href="procesori.php">Procesori</a>
            <a href="maticne.php">Maticne ploce</a>
            <a href="graficke.php">Graficke kartice</a>
          </div>
        </div>
        <li><a href="pocetna.php">POCETNA</a></li>
        <li><a href="korisnik.html">KORISNIK</a></li>
        
      </ul>
    </nav>