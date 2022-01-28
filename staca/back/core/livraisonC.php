<?PHP
include "../config.php";
class livraisonC {

	function ajouterlivraison($livraison){
		$sql="INSERT INTO livraison (ref,id,adress,day,delivery_man,code_postal,statut,price,phone) VALUES (:ref, :id,:adress,:day,:delivery_man,:code_postal,:statut,:price,:phone)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $ref=$livraison->getref();
        $id=$livraison->getid();
        $adress=$livraison->getadress();
        $day=$livraison->getday();
        $delivery_man=$livraison->getdelivery_man();
        $code_postal=$livraison->getcode_postal();
        $statut=$livraison->getstatut();
        $price=$livraison->getprice();
        $phone=$livraison->getphone();
		$req->bindValue(':ref',$ref);
		$req->bindValue(':id',$id);
		$req->bindValue(':adress',$adress);
		$req->bindValue(':day',$day);
		$req->bindValue(':delivery_man',$delivery_man);
		$req->bindValue(':code_postal',$code_postal);
		$req->bindValue(':statut',$statut);
		$req->bindValue(':price',$price);
		$req->bindValue(':phone',$phone);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }
		
	

	
	function afficherlivraison(){
		//$sql="SElECT * From livraison e inner join formationphp.livraison a on e.ref= a.ref";
		$sql="SELECT * FROM livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivraison($id){
		$sql="DELETE FROM livraison where id= :id";
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
	
	function modifierlivraison($livraison,$idd){
		$sql="UPDATE livraison SET ref=:ref, id=:id,adress=:adress,day=:day,delivery_man=:delivery_man,code_postal=:code_postal,statut=:statut,price=:price,phone=:phone WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$ref=$livraison->getref();
        $id=$idd;
        $adress=$livraison->getadress();
        $day=$livraison->getday();
        $delivery_man=$livraison->getdelivery_man();
         $code_postal=$livraison->getcode_postal();
          $statut=$livraison->getstatut();
           $price=$livraison->getprice();
            $phone=$livraison->getphone();

		$datas = array(':ref'=>$ref, ':id'=>$id,':adress'=>$adress,':day'=>$day,':delivery_man'=>$delivery_man,':code_postal'=>$code_postal,':statut'=>$statut,':price'=>$price,':phone'=>$phone);
		$req->bindValue(':ref',$ref);
		$req->bindValue(':id',$id);
		$req->bindValue(':adress',$adress);
		$req->bindValue(':day',$day);
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
		
	}
	function recupererlivraison($id){
		$sql="SELECT * from livraison where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}



		function recupererlivreur($cin){
		$sql="SELECT * from livreur where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


		function afficherlivreur(){
		//$sql="SElECT * From livreur e inner join formationphp.livreur a on e.cin= a.cin";
		$sql="SELECT * FROM livreur";
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
	
	function rechercherListelivraisons($tarif){
		$sql="SELECT * from livraison where delivery_man=$tarif";
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