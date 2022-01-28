<?PHP
include "produit.php";
include "produitc.php";


if (isset($_POST['id']) AND isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['quantite']) AND isset($_POST['image'] )) 
{

	$produit1=new produit($_POST['id'],$_POST['nom'],$_POST['prix'],$_POST['quantite'],$_POST['image']);

$produit1c=new produitc();
$produit1c->ajouterproduit($produit1);
header('Location: table_basic.php');
}
	
else{
	echo "vérifier les champs";
}

//*/



?>