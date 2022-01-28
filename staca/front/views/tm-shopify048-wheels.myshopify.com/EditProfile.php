<?php  
include "account/config.php";
session_start();
if (isset($_SESSION['email']) ) 
{
$check=$bdd->prepare("SELECT * FROM  client WHERE email = ?");
     $check->execute([$_SESSION['email']]);
     $USER=$check->fetch();
     if (isset($_POST['Newnom']) && !empty($_POST['Newnom']) && $_POST['Newnom']!=$USER['nom']  )
     {
         $NEWnom=$_POST['Newnom'];
         $modif=$bdd->prepare("UPDATE client SET nom = ? WHERE email = ? ");
         $modif->execute([$NEWnom,$_SESSION['email']]);
                     header('location:profile.php?id='.$_SESSION['email']);
     }

     if (isset($_POST['Newprenom']) && !empty($_POST['Newprenom']) && $_POST['Newprenom']!=$USER['prenom']  )
     {
         $Newprenom=$_POST['Newprenom'];
         $modif=$bdd->prepare("UPDATE client SET prenom = ? WHERE email = ? ");
         $modif->execute([$NEWnom,$_SESSION['email']]);
                     header('location:profile.php?id='.$_SESSION['email']);
     }

     if (isset($_POST['Newtel']) && !empty($_POST['Newtel']) )
     {
         $Newtel=$_POST['Newtel'];
         echo $Newtel;
         $modif=$bdd->prepare("UPDATE client SET telephone = ? WHERE email = ? ");
         $modif->execute([$Newtel,$_SESSION['email']]);
                     header('location:profile.php?id='.$_SESSION['email']);
     }


     

     if (isset($_POST['Newpass']) && !empty($_POST['Newpass']) && isset($_POST['NewpassCNF']) && !empty($_POST['NewpassCNF']))
     {
         $NEWmdp1=$_POST['Newpass'];
         $NEWmdp2=$_POST['NewpassCNF'];
         
         if ($NEWmdp1 == $NEWmdp2)
         { 
            
                $modif=$bdd->prepare("UPDATE client SET mdp = ? WHERE email = ? ");
                $modif->execute([$NEWmdp1,$_SESSION['email']]);
                echo "cest bon";
                echo $NEWmdp2;
                echo $NEWmdp1;
                header('location:profile.php?id='.$_SESSION['email']);

          }
          else {
              echo "mdp!=mdp2";
          }
     }
     

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
            <input type="text" name="PASS_VALID" placeholder="Veuillez entrez votre pass"><br>
        <input type="text" placeholder="nom" name="Newnom">
        <br>
        <input type="text" placeholder="prenom" name="Newprenom">
        <br>

        <input type="text" name="Newtel" placeholder="telephone">
       <br>



        <input type="text" name="Newpass" placeholder="mot de pass">
        <br>
        <input type="text" name="NewpassCNF" placeholder="confirmPass">
        <br>
        <input type="submit" name="valider" >
    </form>
</body>
</html>

<?php } ?>