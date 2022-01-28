<?php
include('../core/commandeC.php');

$adresse=$_POST['adress'];
$email=$_POST ['email'];
$nomproduit=$_POST['nomprod'];
$tel=$_POST['telephone'];
$prix=$_POST['prix'];

$hello=new Commande();
$hello->ajoutercommande($adresse,$email,$tel,$nomproduit,$prix);



?>