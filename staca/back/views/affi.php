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

<html>
  <head>
    <title>insertion de données</title>
  </head>
<body>
<div>
<form  action="ajouter.php" method="POST" >
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="center">
      <td>id de produit</td>
      <td><input type="text" name="id"></td>
    </tr>

    <tr align="center">
      <td>Nom de produit</td>
      <td><input type="text" name="nom"></td>
    </tr>
    <tr align="center">
      <td>Prix</td>
      <td><input type="text" name="prix"></td>
    </tr>
    <tr align="center">
      <td>qu</td>
      <td><textarea type="text" name="quantite"></textarea></td>
    </tr>
    <tr align="center">
      <td>Inserer URL image</td>
      <td><input type="text" name="image"></td>
    </tr>
   
    <tr align="center">
      <td colspan="2"><input type="submit" value="insérer" name="inserer"></td>
    </tr>
 
  </table>
</form>
</div>


</body>
</html>