
<?php
include "../../../entities/client.php";
include "../../../core/compteC.php";
session_start();


     
     $c=new config();
     $conn=$c->getConnexion();
     $user=new clientC();
     $u=$user->Logedin($conn,$_POST['login'],$_POST['pwd']);
    
     $vide=false;
     if (!empty($_POST['login']) && !empty($_POST['pwd'])){
	
	foreach($u as $t){
		$vide=true;
       
	
		$_SESSION['email_session']=$_POST['login'];
		$_SESSION['pass_session']=$_POST['pwd'];
		$_SESSION['nom_session']=$t['nom'];
        $_SESSION['prenom_session']=$t['prenom'];
                $_SESSION['telephone_session']=$t['telephone'];	
                $_SESSION['id_session']=$t['id'];


	
} 



if ($vide==true) { 

    
 header('Location:reCaptcha.php');

      } 
         else if ($vide==false)
    {
    
       
         header('Location: login.php');

         // puis on le redirige vers la page d'accueil
      } 
}
    
    

    
     
  


?>
</body>
</html>