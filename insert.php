<?php
include('connexion.php');
$Nom=$_POST['Nom'];
$Identifiant=$_POST['Identifiant'];
$Email=$_POST['Email'];
$password=$_POST['Password']
$Verifyyourpassword=$_POST['Verifyyourpassword'];
$Age=$_POST['Age'];
$Lieu=$_POST['Lieu'];
$Sexe=$_POST['Sexe'];
$Datedenaissance=$_POST['Datedenaissance'];
$Favouriteplayer=$_POST['Favouriteplayer'];
$Favouriteteam=$_POST['Favouriteteam'];

$r=$conn->prepare("INSERT INTO users (Nom,Identifiant,Email,Password,Verifyyourpassword,Age,Lieu,Sexe,Datedenaissance,Favouriteplayer,Favouriteteam) VALUES('$Nom','$Identifiant','$Email','$Password','$Verifyyourpassword','$Age','$Lieu','$Sexe','$Datedenaissance','$Favouriteplayer','$Favouriteteam')");
$r->execute();
echo"yes";
header('location:C:\xampp\htdocs\codetest\realmadrid\insert.php ');
?>