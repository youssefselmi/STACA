<?php

$host='localhost';
$user2='root';
$pass='';
$db='staca';
$nb=rand(100,900);
$co = new PDO("mysql:host=$host;dbname=$db",$user2,$pass);
$x1=$_POST['nomprod'];
$y1=$_POST['price'];
echo $x1;
$sql=" SELECT * FROM panier WHERE nomprod='$x1'";
$query=$co->prepare($sql);
$query->execute();
if($data=$query->fetch())
{
$quatity=$data['quantite'];
$quatity++;
$nom=$data['nomprod'];
$holy1="UPDATE panier SET quantite='$quatity' WHERE nomprod='$nom'";
$query1=$co->prepare($holy1);
$query1->execute();
}
else
{
$holy="INSERT INTO panier (idproduit,nomprod,quantite,prixtotale) values ('$nb','$x1','1','$y1')";
$query=$co->prepare($holy);
$query=$co->query($holy);
}
header('location: index.php');

?>