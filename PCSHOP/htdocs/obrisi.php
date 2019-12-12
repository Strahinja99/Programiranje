<?php
    session_start();
    if(!isset($_SESSION['em'])){
        header('Location: index.html');
    }
?>  
 
<?php
		require('konekcija.php');
		if(isset($_POST['obrisi'])){
		$idzabrisanje=$_POST['id'];
		

		$greskaid = "";

 		if(empty($idzabrisanje) || $idzabrisanje == ""){
 				$greskaid = "Polje ne moze biti prazno!";
 				echo "<script>
				alert('Greska: $greskaid');
				window.location.assign('galerija.php');
				</script>";}
 					
 		}

if(empty($greskaid)){
$upitt="DELETE FROM galerija WHERE id='".$_POST['id']."'";
$rezultat=mysqli_query($conn,$upitt);
if($rezultat){
	echo "<script>alert('id je obrisan!')</script>";
	echo "<script>window.location.assign('galerija.php')</script>";
}
else{
	echo "<script>alert('Nije uspelo brisanje!')";
}
}


?>