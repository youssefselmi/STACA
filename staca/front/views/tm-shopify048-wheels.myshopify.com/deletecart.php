<?php



$host='localhost';
$user2='root';
$pass='';
$db='staca';
$id=$_POST['idtest'];
echo $id;
$co = new PDO("mysql:host=$host;dbname=$db",$user2,$pass);
$sql = "DELETE FROM panier  WHERE idproduit='$id'";
$query=$co->prepare($sql);
$query->execute();
header('location: cart.php')



?>