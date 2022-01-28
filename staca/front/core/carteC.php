<?php


class CarteC {
    
    
    function ajouterCarte($carte)
    {
        $sql="insert into carte_fidelite (email) values (:email)";
        
        $db=config::getConnexion();
        try {
             $req=$db->prepare($sql);
        
        
        $email=$carte->getIDclient();
       
       

        $req->bindValue(':email',$email);
     
        
        
        $req->execute();
        }
         catch (Exception $e)
    { echo 'erreur:'.$e->getMessage();}
   }
    
    
    
    
    
    
    
    function afficherCarte()
   {
       $sql="SELECT * FROM carte_fidelite";
       $db =config::getConnexion();
       try{
        $list=$db->query($sql);
        return $list;
       }
         catch (Exception $e)
    { die('Erreur:'.$e->getMessage());}
   }
    
    function supprimerCarte($email){
		$sql="DELETE FROM carte_fidelite where email= :email";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':email',$email);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    
    
    
    
    
    
    
    
    
    
    
    }
?>