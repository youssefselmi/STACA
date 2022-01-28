
<?php
include "../../core/livraisonC.php";
include "../../entities/livraison.php";

if(isset($_POST['adress']) and isset($_POST['code_postal'])  and isset($_POST['phone']))
{

	$p1= new livraison($_POST['ref'],$_POST['adress'],NULL,NULL,$_POST['code_postal'],'Comfirming',$_POST['price'],$_POST['phone']);
	$p2= new livraisonC();

	$p2->ajouterlivraison($p1);

/*--------------------------*/

/*

$titre = 'Message '; 
$mail=$_POST['Email'];
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





 $host='localhost';
                  $user2='root';
                  $pass='';
             $db='staca';
                  $co=new PDO("mysql:host=$host;dbname=$db",$user2,$pass);

$sql = "DELETE FROM panier ";
$query=$co->prepare($sql);
$query->execute();




header('Location: index.php');
}
?>

