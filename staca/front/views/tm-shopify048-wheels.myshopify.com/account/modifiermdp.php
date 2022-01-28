<?php
include "../../../entities/client.php";
include "../../../core/compteC.php";

session_start();

     $clientC=new clientC();
     $clientC->modifiermdp($_POST['mdp'],$_SESSION['recoveremail']);


       
      
    
    
    header('location:../index.php');
     





?>
