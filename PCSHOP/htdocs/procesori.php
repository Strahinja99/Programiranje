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
        <div class="procesor1">
          <img src="slike\proc1.png" alt="procesor">

          <p>Ryzen utilizes AMD's unified Socket AM4. However, Ryzen 7 processors are a complete system on a chip, integrating the northbridge and the memory controller, along with much of the southbridge on-die. These processors includes 16 PCIe lanes for a GPU along with an NVMe controller and an additional 4 PCIe lanes for I/O along with SATA and USB 3.0 links. Ryzen 7 desktop SoCs do not incorporate an integrated graphics processors.

The Ryzen 7 family became AMD's first series of processors to compete in the high-performance desktop market for the first time in over half a decade. 
        </p>
        </div>
        <div class="procesor2">
          <img src="slike\proc2.png" alt="procesor2">
          <p>Coffee Lake-based Core i5s were introduced in late 2017 with a number of high-end SKUs. A larger number of SKUs were introduced in April 2018. Although they still use standard Socket LGA-1151, those parts are no longer backwards compatible with earlier 100/200-series chipsets and must be paired with an appropriate 300-series chipset. A significant configuration change has taken place with the introduction of Coffee Lake including bumping the core count for the Core i5s from 4 cores to 6 and appropriately increasing the L3 cache which has significantly increased the performance of those parts over the prior generation.</p>
          <a href="https://www.facebook.com/strahinjaad">fejs</a>
        </div>
    <footer>
      <p>STRAHINJA DRINIC ALL RIGHTS RESERVED 2019 ©</p>
    </footer>
  </body>
</html>