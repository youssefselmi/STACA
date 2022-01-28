<?PHP
include "config.php";
class clientC {
    function ajouterclient($client){
        $sql="insert into client (nom,prenom,telephone,email,mdp) values (:nom, :prenom,:telephone,:email,:mdp)";
        $sql1="insert into adresse (adr,postal,city) values (:adr,:postal,:city)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $req1=$db->prepare($sql1);
		
        $nom=$client->getnom();
        $prenom=$client->getprenom();
        $telephone=$client->gettelephone();
        $email=$client->getemail();
        $mdp=$client->getmdp();

        $adr=$client->getadr();
        $postal=$client->getpostal();
        $city=$client->getcity();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':telephone',$telephone);
        $req->bindValue(':email',$email);
        $req->bindValue(':mdp',$mdp);
            
      $req1->bindValue(':adr',$adr);
      $req1->bindValue(':postal',$postal);
      $req1->bindValue(':city',$city);
		
            $req->execute();
            $req1->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    function Email($email){

        $sql="SELECT email FROM client";
        $db = config::getConnexion();
        $erreurMail="";
        try{
        $stmt=$db->prepare($sql);
        
        $stmt->execute();
        while ($data =$stmt->fetch())
        {
        if ($email ==$data['email'] ) {


            $erreurMail= "E-mail Deja existant ";
        }
        }
        return $erreurMail;
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }

 }
    public function verifmail($conn,$recoveremail)
	{
		$req="select * from client   where email='$recoveremail'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
    }
    public function Logedin($conn,$login,$pwd)
	{
		$req="select * from client   where email='$login' && mdp='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
    }
    public function getAdresseTable($conn,$id)
	{
		$req="select * from adresse where id='$id'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
    public static  function modifierClient($nom,$prenom,$telephone,$email,$adr,$postal,$city,$mdp,$id)
{
    
     
     $db =config::getConnexion();
     
                $s=$db->prepare('UPDATE client SET nom=:nom,prenom=:prenom,telephone=:telephone,email=:email,mdp=:mdp where id=:id') ;
                $s1=$db->prepare('UPDATE adresse SET adr=:adr,postal=:postal,city=:city where id=:id') ;
               
        $s->bindValue(':nom', $nom);
        $s->bindValue(':prenom', $prenom);
        $s->bindValue(':telephone', $telephone);
        $s->bindValue(':email',$email);
        $s->bindValue(':mdp',$mdp);
        $s->bindValue(':id',$id);

        $s1->bindValue(':id',$id);
        $s1->bindValue(':adr',$adr);
        $s1->bindValue(':postal',$postal);
        $s1->bindValue(':city',$city);
        

                 $s->execute();
                 $s1->execute();
              
    
     
}
public static  function modifiermdp($mdp,$recoveremail)
{
    $sql="UPDATE client SET mdp='$mdp' where email='$recoveremail'" ;
    $db =config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $s=$req->execute();
    }
    catch(Exception $e){
        echo"ERREUR !!".$e->getMessage();
    }
}
}


   



?>