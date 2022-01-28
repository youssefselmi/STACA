<?php 
include 'config.php';
$errors="";
if (isset($_POST['ajouter']))
{
    $ref=$_POST['ref'];
    $nom=$_POST['nom'];
    $gamme=$_POST['gamme'];
     $matricule=$_POST['matricule'];

    $prix=$_POST['prix'];
    $ref2=$_POST['refn'];
  

    if ($ref!=$refn)
    {
        $errors= $errors . "reference non identiques";
    }
    else{
        $stmt=$bdd->prepare("SELECT ref FROM produit");
        $stmt->execute();

        while ($data= $stmt->fetch()){
            if ($email==$data['ref'])
            {
                $errors= $errors . "ref existant";
            }
            
        }

     
    }

    if ($errors!="")
    {
        echo $errors;
    }
    else{
        $stmt= $bdd->prepare("INSERT INTO produit(ref,nom,gamme,matricule,prix,ref2) VALUES(?,?,?,?,?)");
        $stmt->execute([$ref,$nom,$gamme,$matricule,$prix,$ref2]);
        
}


?>












<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
<!-- Mirrored from html.designstream.co.in/pink-desh/dark/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:41:45 GMT -->
<head>
        <title>AJOUT PRODUIT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/metisMenu.css" rel="stylesheet">
        <link href="css/morris-0.4.3.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/modernizr.js"></script>
    </head>
    <body class="fixed-left">
<div class="container">
            <div class="row">
                <div class="locksreen-col text-center">
                    <h3>AJOUT PRODUCT</h3>
                    <form class="m-t" role="form" action="http://html.designstream.co.in/pink-desh/dark/index.html">
                         <div class="form-group">
                            <input type="text" class="form-control" placeholder="ref" required="">
                        </div>
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="nom" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="gamme" required="">
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-control" placeholder="matricule" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="prix" required="">
                        </div>

                        <button type="submit" class="btn btn-theme btn-lg btn-block ">ajouter</button><br>
                <p class=" text-center"><small>vous pouvez ajouter un produit!</small></p>
                
                <p>Copyright STACA PRODUCT</p>
                    </form>
                </div>
            </div>
        </div>
        <!-- Plugins  -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.slimscroll.js"></script>
        <script src="js/metisMenu.js"></script>
         <script src="js/core.js"></script>
        <script src="js/mediaquery.js"></script>
        <script src="js/equalize.js"></script>
        <script src="js/app.js"></script>

    </body>

<!-- Mirrored from html.designstream.co.in/pink-desh/dark/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:41:45 GMT -->
</html>
