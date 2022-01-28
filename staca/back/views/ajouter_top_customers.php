<?php
include "../core/customerC.php";
include "../entities/top_cust.php";


if( isset($_POST['idbest']) && isset($_POST['idclients']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['nbrvisites']) ){
    $customer1=new customer($_POST['idbest'],$_POST['idclients'],$_POST['nom'],$_POST['prenom'],$_POST['nbrvisites']);
    $customer1C=new customerC();

    $customer1C->ajouter_customer($customer1);
    Header("Location: Top_customers.php");// mise ajour affichage 
}



?>