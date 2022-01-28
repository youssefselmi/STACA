	<?php
include('../core/commandeC.php');
$hello=new commande();
if( $_POST['submit']=='supprimer')
{

$id=$_POST['idtest'];
$hello->supprimercommande($id);

}
if( $_POST['submit']=='map')
{
session_start();
$_SESSION['tool']=$_POST['adress'];
header("location: ../views/map.php");

}
if($_POST['submit']=='modifier')
{
session_start();
$_SESSION['tool']=$_POST['idtest'];
header("location: ../views/modifiercommande.html");
	
}






?>