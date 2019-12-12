<?php
	session_start();
?>

<?php

    error_reporting( E_ALL & ~E_NOTICE ^ E_DEPRECATED );
?>

<?php


	if(isset($_POST['signupdugme'])){
		$ime = $_POST['ime'];
		$e_mail = $_POST['e_mail'];
		$sifra = $_POST['sifra'];

		$imeERROR = "";
		$e_mailERROR = "";
		$sifraERROR = "";

		if(empty($ime) || $ime == ""){
				$imeERROR = "Ime ne moze da bude prazno!";
				echo "<script>
				alert('Greska: $imeERROR');
				window.location.assign('index.html');
				</script>"; 
 		} else {
 			if (!preg_match("/^[a-zA-Z ]*$/",$ime)) {
      			$imeERROR = "Only letters and white space allowed!";
      			echo "<script>
				alert('Username error: $imeERROR');
				window.location.assign('index.html');
				</script>";
    		}
 		}

 		if(empty($e_mail) || $e_mail == ""){
 				$emailERROR = "Email ne moze biti prazan!";
 				echo "<script>
				alert('E-mail error: $e_mailERROR');
				window.location.assign('index.html');
				</script>";
 		} else {
 			if (!filter_var($e_mail, FILTER_VALIDATE_EMAIL)) {
      			$e_mailERROR = "nevazeci format emaila!";
      			echo "<script>
				alert('E-mail error: $e_mailERROR');
				window.location.assign('index.html');
				</script>";
    		}
 		}

 		if(empty($sifra) || $sifra == ""){
 				$sifraERROR = "sifra ne moze biti prazna!";
 				echo "<script>
				alert('Password error: $sifraERROR');
				window.location.assign('index.html');
				</script>";
 		}

 		if(empty($imeERROR) && empty($e_mailERROR) && empty($sifraERROR)){
 			require('konekcija.php');
				
					$x = mysqli_query($conn,"INSERT INTO korisnici(ime, email, sifra) VALUES('".$ime."', '".$e_mail."', '".$sifra."')");
					if($x){
					      $_SESSION['em'] = $e_mail;
					      header('Location: pocetna.php');
						}
				 
				}
			} else {
				echo '<div class="alert alert-danger">
	  				      <strong>Error message:</strong> Neuspela konekcija sa bazom.
					  </div>';
			}
 		 
	
?>