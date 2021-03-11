<?php
	include_once 'Database.php';
	$db=new Database('root','','localhost', 'adoptie');
    $conn=$db->getConnection();
    
    $nume_user=$_POST['register_name'];
    $pren_user=$_POST['register_pren'];
    $email_user=$_POST['register_email'];
    $username_user=$_POST['register_username'];
    $password_user=$_POST['register_password'];

    $sql="INSERT INTO `utilizatori` (`nume`, `prenume`, `email`, `username`, `parola`) VALUES ('$nume_user', '$pren_user', '$email_user', '$username_user', '$password_user');";
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	header("Location: index.php?admin_transfer=success");

