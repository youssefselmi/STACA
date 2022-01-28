<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
<!-- Mirrored from html.designstream.co.in/pink-desh/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:40:12 GMT -->
<head>
        <title>STACA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/metisMenu.css" rel="stylesheet">
        <link href="css/morris-0.4.3.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <script type="text/javascript" src="js/test.js"></script>





        <script src="js/modernizr.js"></script>
    </head>
    <body class="fixed-left">

        <div id="wrapper">

            <!--top bar-->
            <div class="topbar">
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="pull-left menu-toggle">
                    <i class="fa fa-bars"></i>
                </div>
                <form class="pull-left app-search hidden-xs">
                    <input type="text" class="form-control" placeholder="Search here...">
                    <i class="fa fa-search"></i>
                </form>
                <ul class="nav navbar-nav  top-right-nav hidden-xs">
                    <li>

                        <span id="para2"></span>
                        <span id="para3"></span>
                        <span id="para1"></span>
                    </li>
                    <li class="dropdown  hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>
                        <ul class="dropdown-menu dropdown-lg">
                            <li><a>Notifications (3)</a></li>
                            <li class="clearfix"><a href="#"><i class="fa fa-twitter"></i> <div class="drop-content">
                                        <h4>New Follower</h4>
                                        <span>3 New Follower</span>
                                    </div></a>
                            </li>
                            <li class="clearfix"><a href="#"><i class="fa fa-envelope-o"></i> <div class="drop-content">
                                        <h4>New Emails</h4>
                                        <span>3 New Emails</span>
                                    </div></a>
                            </li>
                            <li class="clearfix"><a href="#"><i class="fa fa-tasks"></i> <div class="drop-content">
                                        <h4>Pending tasks</h4>
                                        <span>you have 3 pending tasks</span>
                                    </div></a>
                            </li>
                            <li class="text-right"><a href="#">View All Notifications</a></li>
                        </ul>
                    </li>
                    <li class="dropdown profile-link hidden-xs">
                        <div class="clearfix">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/admin.JPG" alt="" class="pull-left">
                                <span>Youssef selmi <br><em>Admin</em></span>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>

                    </li>
                    <li class=" hidden-xs"><a href="#" id="sidebar-toggle"><i class="fa fa-comments-o"></i></a></li>
                </ul>
            </div>
            <!--end top bar-->

            <!--left menu start-->
            <div class="side-menu left" id="side-menu">

                <ul class="metismenu clearfix" id="menu">
                    <li class="profile-menu visible-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="images/user.png" alt="" class="pull-left">
                            <span>Sami Bhh <br><em>Admin</em></span>                            
                        </a>
                        <ul class="dropdown-menu profile-drop">
                            <li><a href="#">Account</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="index.html"><i class="fa fa-home"></i>  <span>Dashboard</span></a></li>  

                   <!--   place sous menu -->






                    <li>
                        <a href="ajoutPromotion.html"><i class="fa fa-sitemap"></i> <span>Promo</span><span class="fa arrow"></span></a></li>

                          <li>
                        <a href="afficherPromos.php"><i class="fa fa-sitemap"></i> <span>Listes des Promos</span><span class="fa arrow"></span></a></li>
                        <!--
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                        </ul>
                    </li>
                </ul>
            -->
                <div class="nav-bottom clearfix">
                    <a href="#" style="border-right: 0px;"><i class="fa fa-lock"></i></a>
                    <a href="#" style="border-right: 0px;"><i class="fa fa-download"></i></a>
                    <a href="#" style="border-right: 0px;"><i class="fa fa-globe"></i></a>
                    <a href="#" style="border-right: 0px;"><i class="fa fa-phone"></i></a>
                </div>
            </div>
            <!--left menu end-->
            <div class="content-page  equal-height">
                <div class="content">
                    <div class="container">
                        <div class="page-title">
                            <h3>Ma Promotion</h3>
                            <a href="#"><i class="fa fa-plus"></i> Add Widget</a>
                            <a href="#"><i class="fa fa-share"></i> Share</a>
                            <a href="#"><i class="fa fa-envelope"></i> Email</a>
                        </div><!--end page title-->

                             <p class="promo" align="center" class="text-center text-info">Modifier Promotion</p>









  <body>
<?PHP
 
include "../core/promoC.php";
  $promoC=new PromoC();
    $result=$promoC->recupererPromo($_GET['id']);
  foreach($result as $row){
    $id=$row['id'];
    $idProd=$row['idProd'];
    $date_debut=$row['date_debut'];
    $date_fin=$row['date_fin'];
    $prix_nouveau=$row['prix_nouveau'];
    $description=$row['description'];
if (isset($_GET['id'])){

?>
<?php
                                    $produit1C=new PromoC();
                                    $listeCat=$produit1C->afficherproduits();
                                    ?>
<form class="was-validated" method="POST">
<table>
<div class="container-fluid">
<hr>
<div class="row">
    <div class="col-md-3">
      <h3 class="text-center text-info">Update Promotion</h3>
            <hr>
<div class="form-group">

<input class="form-control" required pattern="[0-9]{1,12}" placeholder="Enter the Id" type="text" name="id" value="<?PHP echo $id ?>">
</div>

<div class="form-group">

<select  class="dropdown-header" name="idProd">
  <?PHP
    foreach($listeCat as $row){
        ?>
  <option value="<?PHP echo $row['id']; ?>"><?PHP echo $row['nom']; ?>
  </option>
  <?PHP } ?>
</select> </div>

<div class="form-group">
<input class="form-control" required placeholder="date_debut"  type="Date" name="date_debut" value="<?PHP echo $date_debut ?>">
</div>

<div class="form-group">
<input class="form-control" required placeholder="date_fin"  type="Date" name="date_fin" value="<?PHP echo $date_fin ?>">
</div>



<div class="form-group">
<input class="form-control" required pattern="[0-9.]{1,12}" placeholder="Enter your new Price" type="number" name="prix_nouveau" value="<?PHP echo $prix_nouveau ?>">
</div>

<div class="form-group">
<input type="text"  class="form-control" required pattern="[0-9a-zA-Z-\.- -]{3,300}" placeholder="Informations About the products" name="description" value="<?PHP echo $description ?>">
</div>


<!--<div class="form-group">
<input  type="file" name="image" value=">
</div>-->

<div class="form-group">
<input  class="btn btn-success btn-block" type="submit" name="modifier" value="Update">
</div>

<div class="form-group">
<input  type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>">
</div>
</table>
</div>


</form>

 <?PHP
   }
 
  
 $produit1C=new promoC();
 $listeProduits=$produit1C->afficherproduits();
 $promocc=new promoC();
 $listePromo=$promocc->afficherpromos();
 
   

 


 if (isset($_POST['modifier'])){
   $priiix=$_POST['prix_nouveau'];
   $yID=$_POST['idProd'];
   
     
  
   $sql="SELECT prix from produit  where id = $yID  ";
   $db = config::getConnexion();
   $idPrix=$db->query($sql);
   
   foreach($idPrix as $nn){
     $prix = $nn['prix'];
   }
    $tauxx=$promocc->calcultaux($prix,$priiix);
   $Promo=new Promo($_POST['id'],$_POST['idProd'],$_POST['date_debut'],$_POST['date_fin'],$_POST['prix_nouveau'],$_POST['description'],$tauxx);
   

  
   if($priiix<$prix)
   {

if($_POST['date_fin']< $_POST['date_debut'])
{
  echo("<script> alert(\"il faut que la date fin soit superieur a la date debut\")</script>");
  echo("<script> document.Location.replace(\"check_out.php\")</script>");

}else{
   $promoC->modifiePromo($Promo,$_POST['id_ini']);
  // echo $_POST['id_ini'];
   echo ("<script> window.location.replace(\"check_out.php\")</script>");
 
 }

 
 }else{
    
  echo("<script> alert(\"il faut que le nouveau prix soit inferieur au prix ancien\")</script>");
  echo("<script> window.location.replace(\"modifiePromo.php?id=$id\")</script>");

}

}}
 
 ?>
</body>

















                    <!--content-->               
                </div><!--content page-->
            </div><!--end wrapper-->
        </div>
      
    </body>

<!-- Mirrored from html.designstream.co.in/pink-desh/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:40:58 GMT -->
</html>