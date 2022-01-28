<?PHP
include "config.php";
class produitc {

	function ajouterproduit($produit){
		$sql="insert into produit (id,nom,prix,quantite,image) values (:id,:nom, :prix,:quantite,:image)"; //AJOUT DANS BASE
		$db = config::getConnexion();
		try{

        $req=$db->prepare($sql);

		$id=$produit->getid();
        $nom=$produit->getnom();
        $prix=$produit->getprix();
        $quantite=$produit->getquantite();
        $image=$produit->getimage();
      
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':image',$image);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}



function afficherproduit(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherproduitasc(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit order by prix  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function afficherproduitdesc(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit order by prix desc ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function supprimerProduit($id){
		$sql="DELETE FROM produit where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
            header('Location: table_basic.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function modifierproduit($produit,$id){
		$sql="UPDATE produit SET id=:id, nom=:nom,prix=:prix,quantite=:quantite,image=:image WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$produit->getid();
        $nom=$produit->getNom();
        $prix=$produit->getprix();
        $quantite=$produit->getquantite();
        $image=$produit->getimage();
		$datas = array(':idn'=>$idn, ':id'=>$id, ':nom'=>$nom,':prix'=>$prix,':quantite'=>$quantite,':image'=>$image);
		$req->bindValue(':idn',$idn);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':image',$image);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEmploye($id){
		$sql="SELECT * from produit where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherListeProduits($nom){
		$sql="SELECT * from produit where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}






}
?>