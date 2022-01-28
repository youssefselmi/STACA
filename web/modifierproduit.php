<?PHP
include "produit.php";
include "produitc.php";
if $id=$_POST['id'];
$nom =$_POST["nom"];
$prix =$_POST["prix"];
$quantite =$_POST["quantite"];
$image =$_POST["image"];
$produitc=new produitc();
$produitc->modifierProduit($id,$nom$,$prix,$quantite,$image);
?>

