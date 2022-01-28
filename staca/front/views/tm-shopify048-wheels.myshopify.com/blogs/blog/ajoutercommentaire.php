
<?php
include "../../../../core/commentaireC.php";
include "../../../../entities/commentaire.php";

if(isset($_POST['contenue']) and isset($_POST['nom']) and isset($_POST['email']))
{

echo "dkhal";
	$p1= new commentaire(NULL,$_POST['contenue'],$_POST['nom'],$_POST['email'],'1998/12/12');
	$p2= new commentaireC();

	$p2->ajoutercommentaire($p1);
	header('Location: 14157799-harum-at-sequi-impedit2.php');

}

?>

