<?PHP
include "produitc.php";
$produit1c=new produitc();
$listeproduits=$produit1c->afficherproduit();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id</td>
<td>nom</td>
<td>prix</td>
<td>quantite</td>
<td>IMAGE</td>
</tr>

<?PHP
foreach($listeproduits as $row){
	$id=$row['id'];
	$chemin="image/".$id.".jpg"
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>	
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><img scr="<?PHP echo $chemin; ?>" width="100" height="80"> 

              <!-- <img src="Bureau<?php echo $pr->image; ?>"  >-->

	     </td>
	



	</tr>
	<?PHP
}
?>
</table>
