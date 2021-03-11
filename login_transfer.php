<?php
    include_once 'Database.php';
    $db=new Database('root','','localhost', 'adoptie');
    $conn=$db->getConnection();

    $username=$_POST['login_username'];
    $password=$_POST['login_password'];

    $result=$conn->query("SELECT * from utilizatori where username='$username' and parola='$password'")
        or die ("Failed to query database");
    $row=$result->fetch_array();
    if ($row['username']==$username && $row['parola']==$password)
    {
        echo "Autentificarea a reusit!";
    } else echo "Eroare la autentificare.";

    header("Location: index.php?login_transfer=success");

