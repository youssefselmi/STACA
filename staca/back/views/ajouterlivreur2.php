
<?php
include "../core/livreurC.php";
include "../entities/livreur.php";

if(isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['adresse']) and isset($_POST['ville']) and isset($_POST['telephone']) and isset($_POST['email']) and isset($_POST['code_postal']))
{

	$p1= new livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['ville'],$_POST['telephone'],$_POST['email'],$_POST['code_postal']);
	$p2= new livreurC();

	$p2->ajouterlivreur($p1);
header('Location: livreur.php');
}
?>

