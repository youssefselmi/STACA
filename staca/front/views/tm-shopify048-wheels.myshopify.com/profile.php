<?php
include "account/config.php";
session_start();
if (isset($_SESSION['email'])  )
{
    $check=$bdd->prepare("SELECT * FROM  client WHERE email = ?");
     $check->execute([$_SESSION['email']]);
     $USER=$check->fetch();
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
<h2>ancien mot de pass : <?php echo $USER['mdp']; ?></h2>
    <table width="100%">
        <form method="POST">

          <tr>
            <td>nom</td>
            <td><?php echo $USER['nom']; ?></td>
        </tr>
        <tr>
            <td>prenom</td>
            <td><?php echo $USER['prenom']; ?></td>
        </tr>  
        
        <tr>
            <td>tele</td>
            <td><?php echo $USER['telephone']; ?></td>
        </tr>

        <tr>
            <td>email</td>
            <td><?php echo $USER['email']; ?></td>
        </tr>

        <tr>
            <td>nouveau mot de passe</td>
            <td>
              <td><?php echo $USER['mdp'];  ?></td>
            </td>
        </tr>
        <tr>
        <td><a href="EditProfile.php">Editer mon profile</a></td>
        </tr>
    </table>
    </form>
</body>
</html>
<?php 
}
else{
    header("location:connexion.php");
?>
<?php 
}
?>