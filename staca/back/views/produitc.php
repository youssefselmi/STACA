<?PHP
include "../config.php";
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








}
?>