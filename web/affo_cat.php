<?PHP
include "categoriec.php";
$categorie1c=new categoriec();
$listecategorie=$categorie1c->affichercategorie();

//var_dump($listeEmployes->fetchAll());
if (isset($_POST['idn']))
{
$categorie1c->supprimercategorie($_POST['idn']);
}
?>
<table border="1">
<tr>
<td>id</td>
<td>nom</td>

</tr>

<?PHP
foreach($listecategorie as $row){
	$id_cat=$row['id_cat'];

	?>
	<tr>
	<td><?PHP echo $row['id_cat']; ?></td>	
	<td><?PHP echo $row['nom']; ?></td>
	
	<input type="hidden" value="<?PHP echo $row['id_cat']; ?>" name="id_cat">
 

             

	     </td>
	



	</tr>
	<?PHP
}
?>
</table>
