	<?php
			error_reporting(E_ALL & ~E_NOTICE & E_WARNING ^ E_DEPRECATED);
	?>
			<?php
				session_start();
				if(!isset($_SESSION['em'])){
					header('Location:index.html');
					}
			require('konekcija.php');
				$folder="slikee/";
				$imeSlike=basename($_FILES["fajl"]["name"]);
				$putanja=$folder."_".$imeSlike;
				$uploadOK;
				$tipFajla=pathinfo($putanja,PATHINFO_EXTENSION);
					if(isset($_POST['upload'])){
						$provera=getimagesize($_FILES["fajl"]["tmp_name"]);
						if($provera!==false){
						$uploadOK=1;
						}
			else{
					$uploadOK=0;
					echo "<script>alert('Fajl nije slika');</script>";
					echo "<script>window.location.assign('galerija.php');</script>";

				}
			}
			if(file_exists($putanja)){
				$uploadOK=0;
				echo "<script>alert('Fajl postoji u bazi');</script>";
				echo "<script>window.location.assign('galerija.php');</script>";
			}

			if($tipFajla!="jpg" && $tipFajla!="png" && $tipFajla!="jpeg" && $tipFajla!="gif"){
				$uploadOK=0;
				echo "<script>alert('Samo JPG, PNG i GIF formati se mogu koristiti!');</script>";
				echo "<script>window.location.assign('galerija.php');</script>";
			}
			if($uploadOK==0){
				echo "<script>alert('Vasa slika nije uploadana');</script>";
				echo "<script>window.location.assign('galerija.php');</script>";
			}
			else{
				if(move_uploaded_file($_FILES["fajl"]["tmp_name"],$putanja)){
					echo "<script>alert('Vasa slika je uploadana');</script>";
					echo "<script>window.location.assign('galerija.php');</script>";
					$sql="INSERT INTO`galerija`(`path`) VALUES ('$putanja')";
					$rez=mysqli_query($conn,$sql);
					if($rez===false){
						echo "<script>alert('Doslo je do greske pri upload');</script>";
						echo "<script>window.location.assign('galerija.php');</script>";
					}
				}
				else{
					$uploadOK=0;
					echo "<script>alert('Doslo je do greske pri upload');</script>";
					echo "<script>window.location.assign('galerija.php');</script>";
					}
				}
