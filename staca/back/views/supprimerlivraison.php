<?PHP
include "../core/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_POST["id"])){
	echo("sahhit");
	$livraisonC->supprimerlivraison($_POST["id"]);
header('Location: livraison.php');
}

?>