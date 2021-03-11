<?php
	include_once 'Database.php';
	$db=new Database('root','','localhost', 'adoptie');
	$conn=$db->getConnection();
	//var_dump($_POST); die;
	$da_nu1=$_POST['da_nu1'];
	$da_nu2=$_POST['da_nu2'];
	$da_nu3=$_POST['da_nu3'];
    $mesaj=$_POST['mesaj1'];
    $da_nu4=$_POST['da_nu4'];
    $da_nu5=$_POST['da_nu5'];
    $da_nu6=$_POST['da_nu6'];
    
	$sql="INSERT INTO sondaj (cumparat, pret, recomand, detalii, experienta, dificultati, probleme) VALUES ('$da_nu1', '$da_nu2', '$da_nu3', '$mesaj','$da_nu4', '$da_nu5', '$da_nu6' );";
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	header("Location: elements.php?transfer_catre_bd=success");