<?php
    session_start();
    if(!isset($_SESSION['em'])){
        header('Location: index.html');
    }
?>  
 
<?php
		require('konekcija.php');
		if(isset($_POST['promenilozinku'])){
		$novalozinka=$_POST['sifra'];
		

		$greskasifre = "";

 		if(empty($novalozinka) || $novalozinka == ""){
 				$greskasifre = "Polje ne moze biti prazno!";
 				echo "<script>
				alert('Greska: $greskasifre');
				window.location.assign('profil.php');
				</script>";}
 					
 		}

if(empty($greskasifre)){
$upit4="UPDATE korisnici SET sifra='$novalozinka'  WHERE email='".$_SESSION['em']."'";
$rez4=mysqli_query($conn,$upit4);
if($rez4){
	echo "<script>alert('sifra je promenjena!')</script>";
	echo "<script>window.location.assign('profil.php')</script>";
}
else{
	echo "<script>alert('Nije uspelo azuriranje!')";
}
}


?>