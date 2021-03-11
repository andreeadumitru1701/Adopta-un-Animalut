<?php
	include_once 'Database.php';
	$db=new Database('root','','localhost', 'adoptie');
	$conn=$db->getConnection();
	//var_dump($_POST); die;
	$name=$_POST['nume'];
	$pname=$_POST['prenume'];
	$adopt_steril=$_POST['category'];
	$cat_dog=$_POST['caine_pisica'];
	$rural_urban=$_POST['rural_urban'];
	$zona=$_POST['casa_apartament'];
	$social=$_POST['category1'];
	$raise=$_POST['category2'];
	$message=$_POST['mesaj'];
	
	$sql="INSERT INTO formular_adoptie (Nume, Prenume, `Adoptie/Sterilizare`, `Caine/Pisica`, `Rural/Urban`, Zona, Mediu_social, Loc_crestere, Detalii) VALUES ('$name', '$pname', '$adopt_steril', '$cat_dog', '$rural_urban', '$zona', '$social', '$raise', '$message');";
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	header("Location: index.php?transfer_catre_bd=success");
?>