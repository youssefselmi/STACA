<?php 
include "../../../entities/client.php";
include "../../../entities/carte.php";
include "../../../core/compteC.php";
include "../../../core/carteC.php";
session_start();
if (isset($_GET['email'])  && !empty($_GET['email']))
{
   
    $email= urldecode($_GET['email']);
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/CNF.css">
    <title>Document</title>
</head>
<body>
    <div class="line">
        <p><?php  echo $_GET['email']; echo "<br>"; echo "votre email est confirmé <br> ";?></p>
    </div>

    
</body>
</html>