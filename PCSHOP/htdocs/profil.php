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
            <a href="odjavise.php">ODJAVI SE</a>
          </div>
      </ul>
    </nav>
    <div class="pocetna">
    <form name="forma" method="post" action="promenisifru.php">
        <h1>nova sifra:</h1>
         <input type="password" name="sifra"><br><br>
<button type="submit" name="promenilozinku">Promeni lozinku</button>
</form>

    <footer>
      <p>Strahinja Drinic All rights reserved 2019 ©</p>
    </footer>
  </body>
</html>