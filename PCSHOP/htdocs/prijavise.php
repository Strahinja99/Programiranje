<?php
	session_start();
?>

<?php
    error_reporting( E_ALL & ~E_NOTICE ^ E_DEPRECATED );
?>

<?php

  if(isset($_POST['logindugme'])){
      $E_mail = $_POST['E_mail'];
      $sifra = $_POST['Sifra'];

    require('konekcija.php');
      $sql = "SELECT * FROM korisnici WHERE email='".$E_mail."' AND sifra='".$sifra."'";
      if(mysqli_connect($host, $server_username, $server_pass,$base ))
          
              $x = mysqli_query($conn,$sql);
              if(mysqli_num_rows($x) == 1){

                  $_SESSION['em'] = $E_mail;
                  header('Location: pocetna.php');
              } 
              else {
                  echo "<script>
				alert('Nema pogodaka!!!');
				window.location.assign('index.html');
				</script>";
              }
         }

           
       
  