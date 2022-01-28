<?php
include "../../../entities/client.php";
include "../../../core/compteC.php";

session_start();

     $clientC=new clientC();
     $clientC->modifierClient($_POST['nom_c'],$_POST['prenom_c'],$_POST['telephone_c'],$_POST['email_c'],$_POST['adr_c'],$_POST['postal_c'],$_POST['city_c'],$_POST['mdp_c'],$_SESSION['id_session']);


       
        $_SESSION['email_session']=$_POST['email_c'];
		$_SESSION['pass_session']=$_POST['mdp_c'];
		$_SESSION['nom_session']=$_POST['nom_c'];
        $_SESSION['prenom_session']=$_POST['prenom_c'];
                $_SESSION['telephone_session']=$_POST['telephone_c'];
                $_SESSION['adr']=$_POST['adr_c'];
                $_SESSION['postal']=$_POST['postal_c'];	
                $_SESSION['city']=$_POST['city_c'];
    
    
    
    
    header('location:modifier.php');
     





?>
