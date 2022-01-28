<?PHP
include "../../config.php";
class reclamationC {

	function ajouterreclamation($reclamation){
		$sql="INSERT INTO reclamation (email,id,objet,message) VALUES (:email, :id,:objet,:message)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $email=$reclamation->getemail();
        $id=$reclamation->getid();
        $objet=$reclamation->getobjet();
        $message=$reclamation->getmessage();
       
		$req->bindValue(':email',$email);
		$req->bindValue(':id',$id);
		$req->bindValue(':objet',$objet);
		$req->bindValue(':message',$message);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }
		
	

	
	function afficherreclamation(){
		//$sql="SElECT * From reclamation e inner join formationphp.reclamation a on e.email= a.email";
		$sql="SELECT * FROM reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerreclamation($id){
		$sql="DELETE FROM reclamation where id= :id";
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
	/*
	function modifierreclamation($reclamation,$idd){
		$sql="UPDATE reclamation SET email=:email, id=:id,objet=:objet,message=:message,delivery_man=:delivery_man,code_postal=:code_postal,statut=:statut,price=:price,phone=:phone WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$email=$reclamation->getemail();
        $id=$idd;
        $objet=$reclamation->getobjet();
        $message=$reclamation->getmessage();
        $delivery_man=$reclamation->getdelivery_man();
         $code_postal=$reclamation->getcode_postal();
          $statut=$reclamation->getstatut();
           $price=$reclamation->getprice();
            $phone=$reclamation->getphone();

		$datas = array(':email'=>$email, ':id'=>$id,':objet'=>$objet,':message'=>$message,':delivery_man'=>$delivery_man,':code_postal'=>$code_postal,':statut'=>$statut,':price'=>$price,':phone'=>$phone);
		$req->bindValue(':email',$email);
		$req->bindValue(':id',$id);
		$req->bindValue(':objet',$objet);
		$req->bindValue(':message',$message);
		$req->bindValue(':delivery_man',$delivery_man);
			$req->bindValue(':code_postal',$code_postal);
		$req->bindValue(':statut',$statut);
		$req->bindValue(':price',$price);
				$req->bindValue(':phone',$phone);

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}*/
	function recupererreclamation($id){
		$sql="SELECT * from reclamation where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*
	
	function rechercherListereclamations($tarif){
		$sql="SELECT * from reclamation where delivery_man=$tarif";
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
*/
}
?>