<?PHP
include "../core/adresseC.php";
$clientC=new clientC();
if (isset($_POST["id"])){
	$adresseC->supprimerAdresse($_POST["id"]);
	header('Location: affichageclient.php');
}

?>