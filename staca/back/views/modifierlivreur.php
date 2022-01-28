<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";
//if (isset($_GET['cin'])){
	$livreurC=new livreurC();
    $result=$livreurC->recupererlivreur($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		
		$prenom=$row['prenom'];
		$adresse=$row['adresse'];
		$ville=$row['ville'];
		$telephone=$row['telephone'];
		$email=$row['email'];
		$code_postal=$row['code_postal'];

?>
<form method="POST" >
<table>
<caption>Modifier livreur</caption>

<tr>
<td>cin</td>
<td><input type="number" name="cin" value="<?PHP echo $cin; ?>" minlength="8" maxlength="8"></td>
</tr>

<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom; ?>"></td>
</tr>

<tr>
<td>prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom; ?>"></td>
</tr>
<tr>
<td>adresse</td>
<td><input type="date" name="adresse" value="<?PHP echo $adresse;?>"></td>
</tr>
<tr>
<td>ville</td>
<td><input type="text" name="ville" value="<?PHP echo $ville; ?>"></td>
</tr>

<tr>
<td>telephone</td>
<td><input type="number" name="telephone" value="<?PHP echo $telephone; ?>"></td>
</tr>


<tr>
<td>email</td>
<td><input type="text" name="email" value="<?PHP echo $email; ?>"></td>
</tr>

<tr>
<td>code_postal</td>
<td><input type="number" name="code_postal" value="<?PHP echo $code_postal; ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?php //} ?>
</body>
</HTMl>


<?PHP




if (isset($_POST['modifier'])){
	$livreur=new livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['ville'],$_POST['telephone'],$_POST['email'],$_POST['code_postal']);
	

	$livreurC->modifierlivreur($livreur,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: livreur.php');
}


}
?>