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
        <div class="dropdown">
          <button class="dropbtn">PONUDA<i class="fa fa-caret-down"></i></button>
          <div class="dropdown-content">
            <a href="procesori.php">Procesori</a>
            <a href="maticne.php">Maticne ploce</a>
            <a href="graficke.php">Graficke kartice</a>
          </div>
          
          <li><a href="proizvodi.php">PROIZVODI</a></li>
        </div>
        <li><a href="pocetna.php">POCETNA</a></li>
        <div class="dropdown">
          <button class="dropbtn">KORISNIK <?php echo $_SESSION['em'] ?><i class="fa fa-caret-down"></i></button>
          <div class="dropdown-content">
            <a href="upload.php">UPLOAD</a>
            <a href="galerija.php">GALERIJA</a>
            <a href="index.html">ODJAVI SE</a>
          </div>
      </ul>
    </nav>
    <div class="pocetna1">
      <?php
require('konekcija.php');
if(isset($_POST['nadji'])){
$nadji=$_POST['search'];
$upit1="SELECT proizvod.naziv,proizvod.model,proizvod.cena FROM proizvod WHERE proizvod.model LIKE'%$nadji%'"; 
$rez1=mysqli_query($conn,$upit1);
echo "<table border='1' style='width:100%;font-size:15px;font-weight:bold;'>";
echo "<thead><tr style='background-color:red'><th>Naziv</th><th>model</th><th>cena</th></thead><tbody style='background-color:red'>";
if(mysqli_num_rows($rez1)>0){
	while($podaci=mysqli_fetch_array($rez1)){
	$naziv=$podaci['naziv'];
	$model=$podaci['model'];
  $cena=$podaci['cena'];
	echo "<tr><td  style='text-align:center'>$naziv</td><td style='text-align:center'>$model</td><td style='text-align:center'>$cena</td>";}
}
else {
	echo "<p>Nema rezultata</p>";
}
}
?>
    </div>


    <footer>
      <p>STRAHINJA DRINIC ALL RIGHTS RESERVED 2019 ©</p>
    </footer>
    
  </body>
</html>