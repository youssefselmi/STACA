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
                        <a href="index.php" class="logo"><img src="images/logo.png" alt=""></a>
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
                    <li class="active"><a href="index.php"><i class="fa fa-home"></i>  <span>Dashboard</span></a></li>  

                   <!--   place sous menu -->






                    <li>
                        <a href="check_out.php"><i class="fa fa-sitemap"></i> <span>Promo</span><span class="fa arrow"></span></a></li>

                        
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

                             <p class="promo" align="center" class="text-center text-info">Ajouter Promotion</p>









<?php
include "../core/promoC.php";
$promo1C=new PromoC();
$listeProdu=$promo1C->afficherproduits();
?>



<form class="was-validated" action="ajoutPromo.php" method="POST" enctype="multipart/form-data"  >

<strong>Nom Produit  </strong>
<select  class="dropdown-header" name="idProd">
    <?PHP
    foreach($listeProdu as $row){
        ?>
    <option value="<?PHP echo $row['id']; ?>"><?PHP echo $row['nom']; ?>
    </option>
    <?PHP } ?>
</select> 
<br>
                <div class="form-group">
<input type="date" name="date_debut" class="form-control" placeholder="Date Start">
</div>


                <div class="form-group">
<input type="date" name="date_fin" class="form-control" placeholder="Date End">
</div>





                <div class="form-group">
<input type="number" name="prix_nouveau" class="form-control" placeholder="Enter your new Price" >
</div>
<div class="form-group">


               <script language="javascript" type="text/javascript">
                  function calculeLongueur(){
                      var iLongueur, iLongueurRestante;
                      iLongueur = document.getElementById('autre').value.length;
                      if (iLongueur>20) {
                        document.getElementById('autre').value = document.getElementById('autre').value.substring(0,40);
                        iLongueurRestante = 0;
                      }
                      else {
                      iLongueurRestante = 40 - iLongueur;
                    }
                    if (iLongueurRestante <= 1)
                      document.getElementById('indic').innerHTML = iLongueurRestante + "&nbsp;caract&egrave;re&nbsp;disponible";
                    else
                      document.getElementById('indic').innerHTML = iLongueurRestante + "&nbsp;caract&egrave;res&nbsp;disponibles";
                  }
              </script>




      <textarea     onblur="calculeLongueur();" onfocus="calculeLongueur();" onkeydown="calculeLongueur();" onkeyup="calculeLongueur();" id="autre" name="description" class="form-control" required pattern="[0-9a-zA-Z-\.]{3,400}" placeholder="Informations About the products" ></textarea>
      
            </div>


<!--<div class="form-group">
<input type="file" name="image" class="custom-file">
</div>-->
                
                <div class="form-group">
 
<input type="submit" name="add" class="btn btn-primary btn-block" value="Add">

</div>


</form>

</div>






<?php
$promo1C=new PromoC();
$listePromo=$promo1C->afficherpromos();
?>
<?php
$today=date("Y-m-d");
?>
<?PHP

foreach($listePromo as $row){
    if($row['date_fin']<$today)
    {
        $promo1C->supprimerPromo($row['id']);
    }
}
$listePromo=$promo1C->afficherpromos();
    ?>
 
 
<table   class="table table-hover">
     

     <thead>
              <tr>
                <th  style="width: 20%"><a href="#" onclick="sortTable(this,0); return
    false;"> ID </a></th>
                <th><a href="#" onclick="sortTable(this,1); return false;">Nom </a></th>
                 <th>Date_debut</th>
                 <th>Date_fin</th>                 
                 <th>Prix_nouveau</th>
                 <th style="width: 20%">Description</th>
                 <th>supprimer</th>
                 <th>modifier</th>
                 


                </tr>
            </thead>
<?PHP
foreach($listePromo as $row){
    $idppp=$row['idProd'];
    $sql="SELECT * from produit where id=$idppp";
    $db = config::getConnexion();
    $NomProd=$db->query($sql);
    foreach($NomProd as $nn)
    {
        $nompp=$nn['nom'];
    }
    ?>
<tr>
    <td><?PHP echo $row['id']; ?></td>
    <td><?PHP echo $nompp; ?></td>
    <td><?PHP echo $row['date_debut']; ?></td>
    <td><?PHP echo $row['date_fin']; ?></td>
    <td><?PHP echo $row['prix_nouveau']; ?></td>
    <td><?PHP echo $row['description']; ?></td>
  <!--  <td><img width="80" src="images/<?php echo $row['image']?>" alt="<?php echo $row['image'] ?>"></td> -->
    <td>
    <form method="POST" action="supprimerPromo.php">
    <input type="submit" name="supprimer" value="supprimer" class="btn btn-danger btn-block">
    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    </form>
    </td>
    <td><a class="btn btn-success btn-block" href="modifiePromo.php?id=<?PHP echo $row['id']; ?>">
    Modifier</a></td>
    </tr>
    <?PHP
}
?>
</table>

    </div>
 <script>
function sortTable (tb, n) {

var iter = 0;
    
    while (!tb.tagName || tb.tagName.toLowerCase() != "table")
    {
        if (!tb.parentNode) return;
        tb = tb.parentNode;
    }

    if (tb.tBodies && tb.tBodies[0]) tb = tb.tBodies[0];

var reg = /^\d+(\.\d+)?$/g;
var index = 0, value = null, minvalue = null;

    for (var i= tb.rows.length -1; i >= 0; i -= 1) {
        minvalue = value = null;
        index = -1;
        for (var j=i; j >= 0; j -= 1) {
            value = tb.rows[j].cells[n].firstChild.nodeValue;
            if (!isNaN(value)) value = parseFloat(value);
            if (minvalue == null || value > minvalue) { index = j; minvalue = value; }
        }

        if (index != -1) {
            var row = tb.rows[index];
            if (row) {
            tb.removeChild(row);
            tb.appendChild(row);
            }
        }
    }
}

         </script>



















                    <!--content-->               
                </div><!--content page-->
            </div><!--end wrapper-->
        </div>
      
    </body>

<!-- Mirrored from html.designstream.co.in/pink-desh/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:40:58 GMT -->
</html>
