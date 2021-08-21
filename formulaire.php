<?php
session_start();

/*appelle de fichier de connexion à a base */
require('dbconnect.php');

/*declaration des variables */
$nom=$_POST['nom'];
$renom=$_POST['prenom'];
$aej=$_POST['aej'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$domaine=$_POST['domaine'];
/*début d'insertion */
$insert=$db->prepare("INSERT INTO inscris(nom, prenom, aej, tel, email, domaine) VALUES(?,?,?,?,?,?)");
$insert->execute(array($nom,$renom,$aej,$tel,$email,$domaine));
/*redirection à la page principale*/
header('Location:index.php');

?>




