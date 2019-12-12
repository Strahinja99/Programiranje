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
            <a href="profil.php">PROMENI LOZINKU</a>
            <a href="upload.php">UPLOAD</a>
            <a href="galerija.php">GALERIJA</a>
            <a href="index.html">ODJAVI SE</a>
          </div>
      </ul>
    </nav>
    <div class="pocetna1">

<form method="post" action="nadji.php">
    <p>Pretražite modele:</p><input type="text" name="search" placeholder="naziv modela"><input type="submit" name="nadji" value="Pretraga">
    </form>

    </div>


    
    <script src="kontakt.js"></script>
  </body>

<?php
require('konekcija.php');
$upit="SELECT dobavljac.ime,proizvod.naziv,proizvod.model,proizvod.cena FROM dobavljac INNER JOIN proizvod ON dobavljac.sifra=proizvod.sifradobavljaca ORDER BY dobavljac.ime";
$rez=mysqli_query($conn,$upit);
echo "<table border='2' style='width:100%;font-size:17px;font-weight:bold;'>";
echo "<thead><tr style='background-color:red'><th>Ime Dobavljaca</th><th>Naziv</th><th>model</th><th>cena</th></thead><tbody style='background-color:lightblue'>";
while($podaci=mysqli_fetch_array($rez)){
  $ime=$podaci['ime'];
  $naziv=$podaci['naziv'];
  $model=$podaci['model'];
  $cena=$podaci['cena'];
  echo "<tr></td><td>$ime</td><td>$naziv</td><td>$model</td><td>$cena</td>";
}
echo "</tbody></table>";
?>


</html>
