<?php 

include('../config.php');/**
 * 

 */
class Commande
{

private $idc;
private $adresse;
private $telephone;
private $nomproduit;
private $date_commande;
private $prix;


function paginercommande($page)
{
$con=new config();
$co=$con->getconnexion();
$sql="SELECT * FROM commande" ; 
$query=$co->prepare($sql); 
$query->execute(); 
 $occ=0;
while ($data=$query->fetch()) 
{
 $occ++;
if($page>=$occ) 
{


echo "<form method='POST' action='../entities/supprimercommande.php' >";
echo "<tr>";
echo "<th>";
echo "<input class='trash' readonly name='idtest' value=";
echo $data['idc'].">";
echo "</th>";
echo "<th>";
echo $data['email'];
echo "</th>";
echo "<th>";
 echo "<input name='adress' hidden value='".$data['adresse']."'>";
echo $data['adresse'];
echo "</th>";
echo "<th>";
echo $data['telephone'];
echo "</th>";
echo "<th>";
echo $data['nomproduit'];
echo "</th>";
echo "<th>";
echo $data['date_commande'];
echo "</th>";                     
echo "<th>";
echo $data['prix'];
echo "</th>";
echo "<th>";
 echo "<input type='submit'  name='submit' class='btn btn-theme' value='modifier'>";
  echo "</th>";
  echo "<th>";
 echo "<input type='submit' name='submit' class='btn btn-theme' value='supprimer'>";
 echo "</th>";
   echo "<th>";
 echo "<input type='submit' name='submit' class='btn btn-theme' value='map'>";
 echo "</th>";
echo "</tr>";
echo "</form>";

}
 

}
}   

function affichercommande()
{
$con=new config();
$co=$con->getconnexion();
$sql="SELECT * FROM commande" ; 
$query=$co->prepare($sql); 
$query->execute(); 
 
while ($data=$query->fetch()) 
{
echo "<form method='POST' action='../entities/supprimercommande.php' >";
echo "<tr>";
echo "<th>";
echo "<input class='trash' readonly name='idtest' value=";
echo $data['idc'].">";
echo "</th>";
echo "<th>";
echo $data['email'];
echo "</th>";
echo "<th>";
 echo "<input name='adress' hidden value='".$data['adresse']."'>";
echo $data['adresse'];
echo "</th>";
echo "<th>";
echo $data['telephone'];
echo "</th>";
echo "<th>";
echo $data['nomproduit'];
echo "</th>";
echo "<th>";
echo $data['date_commande'];
echo "</th>";                     
echo "<th>";
echo $data['prix'];
echo "</th>";
echo "<th>";
 echo "<input type='submit'  name='submit' class='btn btn-theme' value='modifier'>";
  echo "</th>";
  echo "<th>";
 echo "<input type='submit' name='submit' class='btn btn-theme' value='supprimer'>";
 echo "</th>";
   echo "<th>";
 echo "<label class='btn btn-theme'><i class='fa fa-map-o'></i><input type='submit' name='submit' class='btn btn-theme' value='map'></label>";
 echo "</th>";
echo "</tr>";
echo "</form>"; 

}   

}
function ajoutercommande($adresse,$email,$tel,$nomproduit,$prix)
{
$con=new config();
$co=$con->getconnexion();
$nb=rand(100,900);
$date=date("Y/m/d");
$holy=" INSERT INTO commande (idc,adresse,email,telephone,nomproduit,date_commande,prix) values ('$nb','$adresse','$email','$tel','$nomproduit','$date','$prix')";
$query=$co->prepare($holy);
$query=$co->query($holy);
header("location: ../views/commande.php");

}

function triparid()
{
$con=new config();
$co=$con->getconnexion();
$sql="SELECT * FROM commande ORDER by idc" ; 
$query=$co->prepare($sql); 
$query->execute(); 
 
while ($data=$query->fetch()) 
{
echo "<form method='POST' action='../entities/supprimercommande.php' >";
echo "<tr>";
echo "<th>";
echo "<input class='trash' readonly name='idtest' value=";
echo $data['idc'].">";
echo "</th>";
echo "<th>";
echo $data['email'];
echo "</th>";
echo "<th>";
 echo "<input name='adress' hidden value='".$data['adresse']."'>";
echo $data['adresse'];
echo "</th>";
echo "<th>";
echo $data['telephone'];
echo "</th>";
echo "<th>";
echo $data['nomproduit'];
echo "</th>";         
echo "<th>";
echo $data['date_commande'];
echo "</th>";              
echo "<th>";
echo $data['prix'];
echo "</th>";
echo "<th>";
 echo "<input type='submit'  name='submit' class='btn btn-theme' value='modifier'>";
  echo "</th>";
  echo "<th>";
 echo "<input type='submit' name='submit' class='btn btn-theme' value='supprimer'>";
 echo "</th>";
    echo "<th>";
 echo "<input type='submit' name='submit' class='btn btn-theme' value='map'>";
 echo "</th>";
echo "</tr>";
echo "</form>"; 

} 	
}

function triparprix()
{
$con=new config();
$co=$con->getconnexion();
$sql="SELECT * FROM commande order by prix" ; 
$query=$co->prepare($sql); 
$query->execute(); 
 
while ($data=$query->fetch()) 
{
echo "<form method='POST' action='../entities/supprimercommande.php' >";
echo "<tr>";
echo "<th>";
echo "<input class='trash' readonly name='idtest' value=";
echo $data['idc'].">";
echo "</th>";
echo "<th>";
echo $data['email'];
echo "</th>";
echo "<th>";
 echo "<input name='adress' hidden value='".$data['adresse']."'>";
echo $data['adresse'];
echo "</th>";
echo "<th>";
echo $data['telephone'];
echo "</th>";
echo "<th>";
echo $data['nomproduit'];
echo "</th>";   
echo "<th>";
echo $data['date_commande'];
echo "</th>";                   
echo "<th>";
echo $data['prix'];
echo "</th>";
echo "<th>";
 echo "<input type='submit'  name='submit' class='btn btn-theme' value='modifier'>";
  echo "</th>";
  echo "<th>";
 echo "<input type='submit' name='submit' class='btn btn-theme' value='supprimer'>";
 echo "</th>";
    echo "<th>";
 echo "<input type='submit' name='submit' class='btn btn-theme' value='map'>";
 echo "</th>";
echo "</tr>";
echo "</form>"; 

}         
}

function tripardate()
{
$con=new config();
$co=$con->getconnexion();
$sql="SELECT * FROM commande order by date_commande" ; 
$query=$co->prepare($sql); 
$query->execute(); 
 
while ($data=$query->fetch()) 
{
echo "<form method='POST' action='../entities/supprimercommande.php' >";
echo "<tr>";
echo "<th>";
echo "<input class='trash' readonly name='idtest' value=";
echo $data['idc'].">";
echo "</th>";
echo "<th>";
echo $data['email'];
echo "</th>";
echo "<th>";
 echo "<input name='adress' hidden value='".$data['adresse']."'>";
echo $data['adresse'];
echo "</th>";
echo "<th>";
echo $data['telephone'];
echo "</th>";
echo "<th>";
echo $data['nomproduit'];
echo "</th>";
echo "<th>";
echo $data['date_commande'];
echo "</th>";                      
echo "<th>";
echo $data['prix'];
echo "</th>";
echo "<th>";
 echo "<input type='submit'  name='submit' class='btn btn-theme' value='modifier'>";
  echo "</th>";
  echo "<th>";
 echo "<input type='submit' name='submit' class='btn btn-theme' value='supprimer'>";
 echo "</th>";
    echo "<th>";
 echo "<input type='submit' name='submit' class='btn btn-theme' value='map'>";
 echo "</th>";
echo "</tr>";
echo "</form>"; 

}         
}

function recherche($adress)
{
$con=new config();
$co=$con->getconnexion();
$sql="SELECT * FROM commande where adresse='$adress'" ; 
$query=$co->prepare($sql); 
$query->execute(); 
 
while ($data=$query->fetch()) 
{
echo "<form method='POST' action='../entities/supprimercommande.php' >";
echo "<tr>";
echo "<th>";
echo "<input class='trash' readonly name='idtest' value=";
echo $data['idc'].">";
echo "</th>";
echo "<th>";
echo $data['email'];
echo "</th>";
echo "<th>";
 echo "<input name='adress' hidden value='".$data['adresse']."'>";
echo $data['adresse'];
echo "</th>";
echo "<th>";
echo $data['telephone'];
echo "</th>";
echo "<th>";
echo $data['nomproduit'];
echo "</th>";
echo "<th>";
echo $data['date_commande'];
echo "</th>";                      
echo "<th>";
echo $data['prix'];
echo "</th>";
echo "<th>";
 echo "<input type='submit'  name='submit' class='btn btn-theme' value='modifier'>";
  echo "</th>";
  echo "<th>";
 echo "<input type='submit' name='submit' class='btn btn-theme' value='supprimer'>";
 echo "</th>";
    echo "<th>";
 echo "<input type='submit' name='submit' class='btn btn-theme' value='map'>";
 echo "</th>";
echo "</tr>";
echo "</form>"; 

}         
}


function supprimercommande($id)
{
$con=new config();
$co=$con->getconnexion();
$sql = "DELETE FROM commande  WHERE idc=$id";
$query=$co->prepare($sql);
$query->execute();
header("location: ../views/commande.php");

}

function modifiercommande($id,$adresse,$email,$nomproduit,$tel,$prix)
{
$con=new config();
$co=$con->getconnexion();
$sql = "UPDATE commande SET  adresse='$adresse', email='$email', telephone='$tel'  ,nomproduit='$nomproduit' , prix='$prix'  WHERE idc='$id'";
$query=$co->prepare($sql);
$query->execute();
header('location: ../views/commande.php');	
}



}


?>