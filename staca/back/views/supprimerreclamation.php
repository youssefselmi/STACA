<?PHP
include "../core/reclamationC.php";
$reclamationC=new reclamationC();
if (isset($_POST["id"])){
	echo("sahhit");
	$reclamationC->supprimerreclamation($_POST["id"]);
header('Location: reclamation.php');
}

?>