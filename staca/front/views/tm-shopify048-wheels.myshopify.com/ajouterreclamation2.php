<?php
include "../../core/reclamationC.php";
include "../../entities/reclamation.php";
 
//if(isset($_POST['ref']) and isset($_POST['adress']) and isset($_POST['day']) and isset($_POST['delivery_man']) and isset($_POST['code_postal']) and isset($_POST['statut']) and isset($_POST['price']) and isset($_POST['phone']))
//{

  $p1= new reclamation($_POST['email'],$_POST['objet'],$_POST['message']);
  $p2= new reclamationC();

  $p2->ajouterreclamation($p1);
header('Location: ajouterreclamation.php');
//}
?>
