<?PHP
include "config.php";
class categoriec {

	function ajoutercategorie($categorie){
		$sql="insert into categorie (id_cat,nom) values (:id_cat,:nom)"; //AJOUT DANS BASE
		$db = config::getConnexion();
		try{

        $req=$db->prepare($sql);

		$id_cat=$categorie->getid();
        $nom=$categorie->getnom();
      
		$req->bindValue(':id_cat',$id_cat);
		$req->bindValue(':nom',$nom);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}



function affichercategorie(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
     }
}
function supprimercategorie($id_cat){
		$sql="DELETE FROM categorie where id_cat= :id_cat";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_cat',$id_cat);
		try{
            $req->execute();
            header('Location: table_data_tables.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>