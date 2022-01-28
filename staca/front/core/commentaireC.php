<?PHP
include "config.php";
class commentaireC {
function affichercommentaire2($commentaire){
		echo "id: ".$commentaire->getid()."<br>";
		echo "contenue: ".$commentaire->getcontenue()."<br>";
		echo "nom: ".$commentaire->getnom()."<br>";
		echo "tarif heure: ".$commentaire->getemail()."<br>";
		echo "nb heures: ".$commentaire->getdate()."<br>";
	}
	function calculerSalaire($commentaire){
		echo $commentaire->getdate() * $commentaire->getemail();
	}
	function ajoutercommentaire($commentaire){
		$sql="INSERT INTO commentaire (id,contenue,nom,date,email) VALUES (:id, :contenue,:nom,:date,:email)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$commentaire->getid();
        $contenue=$commentaire->getcontenue();
        $nom=$commentaire->getnom();
        $date=$commentaire->getdate();
        $email=$commentaire->getemail();
		$req->bindValue(':id',$id);
		$req->bindValue(':contenue',$contenue);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':date',$date);
		$req->bindValue(':email',$email);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercommentaire(){
		//$sql="SElECT * From commentaire e inner join formationphp.commentaire a on e.id= a.id";
		$sql="SELECT * FROM commentaire";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercommentaire($id){
		$sql="DELETE FROM commentaire where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercommentaire($commentaire,$id){
		$sql="UPDATE commentaire SET id=:id, contenue=:contenue,nom=:nom,date=:date,email=:email WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idn=$commentaire->getid();
        $contenue=$commentaire->getcontenue();
        $nom=$commentaire->getnom();
        $nb=$commentaire->getdate();
        $tarif=$commentaire->getemail();
		$datas = array(':id'=>$id, ':contenue'=>$contenue,':nom'=>$nom,':date'=>$date,':email'=>$email);
		$req->bindValue(':id',$id);
		$req->bindValue(':contenue',$contenue);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':date',$date);
		$req->bindValue(':email',$email);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercommentaire($id){
		$sql="SELECT * from commentaire where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecommentaires($tarif){
		$sql="SELECT * from commentaire where email=$tarif";
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