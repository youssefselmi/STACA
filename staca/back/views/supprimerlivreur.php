<?PHP
include "../core/livreurC.php";
$livreurC=new livreurC();
//if (isset($_POST["id"])){
	echo("sahhit");
	$livreurC->supprimerlivreur($_POST["cin"]);
	header('Location: livreur.php');
//}

?>