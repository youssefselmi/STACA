
<?php
include "./core/livraisonC.php";
include "./entities/livraison.php";

if(isset($_POST['ref']) and isset($_POST['adress']) and isset($_POST['day']) and isset($_POST['delivery_man']) and isset($_POST['code_postal']) and isset($_POST['statut']) and isset($_POST['price']) and isset($_POST['phone']))
{

	$p1= new livraison($_POST['ref'],$_POST['adress'],$_POST['day'],$_POST['delivery_man'],$_POST['code_postal'],$_POST['statut'],$_POST['price'],$_POST['phone']);
	$p2= new livraisonC();

	$p2->ajouterlivraison($p1);



/*	/*--------------------------*/

/*
$titre = 'Message '; 
$mail="siwar.jouini.jouini@gmail.com";
//$mail=substr($mail,0,-1);
$message="Vous avez ajoute une livraison sous le nom de  lalalalal";
//echo $mail;
    // $contenu = "oko okok"; 
  // envoi du mail HTML 
  $from = "From: sami <siwar.jouini@esprit.tn>\nMime-Version:"; 
  $from .= " 1.0\nContent-Type: text/html; charset=ISO-8859-1\n"; 
  // envoie du mail 
  if(mail($mail,$titre,$message,$from))
  	{echo'send';} 

*/
/*--------------------------*/


header('Location: livraison.php');
}
?>

