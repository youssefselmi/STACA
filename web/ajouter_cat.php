<?PHP
include "categorie.php";
include "categoriec.php";


if (isset($_POST['id_cat']) AND isset($_POST['nom'])) 
{

	$categorie1=new categorie($_POST['id_cat'],$_POST['nom']);
$categorie1c=new categoriec();
$categorie1c->ajoutercategorie($categorie1);
header('Location: table_data_tables.php');

	
}else{
	echo "vérifier les champs";
}

//*/



?>