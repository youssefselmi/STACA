<?php
include('../core/commandeC.php');
session_start();
$id=$_SESSION['tool'];

echo $id;
$adresse=$_POST['adress'];
$email=$_POST ['email'];
$nomproduit=$_POST['nomprod'];
$tel=$_POST['telephone'];
$prix=$_POST['prix'];
$hello=new Commande();
$hello->modifiercommande($id,$adresse,$email,$nomproduit,$tel,$prix);





?>