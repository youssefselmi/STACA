
<?php
include "../../../entities/client.php";
include "../../../core/compteC.php";
session_start();


     
     $c=new config();
     $conn=$c->getConnexion();
     $user=new clientC();
     $u=$user->verifmail($conn,$_POST['recoveremail']);
    
     $vide=false;
     if (!empty($_POST['recoveremail'])){
  
         $_SESSION['recoveremail']=$_POST['recoveremail'];
        //  echo $_SESSION['recoveremail'];
	foreach($u as $t){
		$vide=true;
} 



if ($vide==true) { 

    
header('Location:mdpoublier.php');

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