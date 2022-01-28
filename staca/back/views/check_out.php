<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <script>

    function filterProducts22() {

    var price_range = $('.price_range').val();
    $.ajax({
        type: 'POST',
        url: 'getProducts.php',
        data:'price_range='+price_range,
        beforeSend: function () {
    
        },
        success: function (html) {
            $('#productContainer').html(html);
           
        }
    });
}

function filterProducts2() {

    var price_range = $('.price_range').val();
    $.ajax({
        type: 'POST',
        url: 'getProducts2.php',
        data:'price_range='+price_range,
        beforeSend: function () {
    
        },
        success: function (html) {
            $('#productContainer').html(html);
           
        }
    });
}
function filterProducts3() {
    var key = $('.key').val();
    $.ajax({
        type: 'POST',
        url: 'getProducts3.php',
        data:'key='+key,
        beforeSend: function () {
    
        },
        success: function (html) {
            $('#productContainer').html(html);
           
        }
    });
}
</script>


 
<!-- Mirrored from html.designstream.co.in/pink-desh/dark/empty_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:41:45 GMT -->
<head>
        <title>pink-desh</title>
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
                    <li class="dropdown">
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
                    <li class="dropdown profile-link">
                        <div class="clearfix">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" alt="" class="pull-left">
                                <span>Angila Deo <br><em>Admin</em></span>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>

                    </li>
                    <li><a href="#" id="sidebar-toggle"><i class="fa fa-comments-o"></i></a></li>
                </ul>
            </div>
            <!--end top bar-->

            <!--left menu start-->
            <div class="side-menu left" id="side-menu">
                <ul class="metismenu" id="menu">
                       <li class="profile-menu visible-xs">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" alt="" class="pull-left">
                                <span>Angila Deo <br><em>Admin</em></span>                            
                            </a>
                            <ul class="dropdown-menu profile-drop">
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                   <li class=""><a href="index.php"><i class="fa fa-home"></i>  <span>Dashboard</span></a></li>  

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span>STATS</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><i class="fa fa-bar-chart-o"></i> <span>PRODUCTS STATS</span><span class="fa arrow"></span></li> <!-- graph flot-->
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="best_sellers_ever.php">Best Sellers Ever</a>
                                </li>
                                <li>
                                        <a href="best_sales_monthly.php">Best Sales MONTHLY</a>
                                </li>
                                <li>
                                        <a href="best_sales_weekly.php">Best Sales WEEKLY</a>
                                </li>
                            </ul>
                            <li><i class="fa fa-bar-chart-o"></i> <span>CUSTOMERS STATS</span><span class="fa arrow"></span></li><!-- graph morris-->
                            <ul class="nav nav-third-level">
                                    <li>
                                        <a href="Top_customers.php">TOP Customers</a>
                                    </li>
                                    <li>
                                        <a href="loyal_customers.php">LOYAL CUSTOMERS</a>
                                    </li>
                                    <li>
                                        <a href="over_view_monthly.php">Over Views MONTHLY</a>
                                    </li>
                            </ul>
                            <li><i class="fa fa-bar-chart-o"></i> <span>INCOME STATS</span><span class="fa arrow"></span></li><!-- graph chartjs-->
                            <ul class="nav nav-third-level">
                                    <li>
                                        <a href="over_view_total_income.php">Over View Total Income</a>
                                    </li>
                            </ul>
                            
                        </ul>
                    </li>
      
                    <li>
                        <a href="affichageclient1.php"><i class="fa fa-edit"></i> <span>CUSTOMERS</span><span class="fa arrow"></span></a>
                        
                    </li>
                    <li>
                        <a href="../../../web/table_basic.php"><i class="fa fa-table"></i> <span>Products</span><span class="fa arrow"></span></a>
                       
                    </li>


                    <li class="active">
                        <a href="ajoutPromo.php"><i class="fa fa-flask"></i> <span class="nav-label">PROMO</span><span class="fa arrow"></span></a>
          
                    </li>


                    <li>
                        <a href="checkout_events1.php"><i class="fa fa-flask"></i> <span class="nav-label">EVENT</span><span class="fa arrow"></span></a>
          
                    </li>


                    <li>
                        <a href="chat.php"><i class="fa fa-flask"></i> <span class="nav-label">CHAT ROOM</span><span class="fa arrow"></span></a>
          
                    </li>
                    <li>
                                                <a href="empty_page.html"><i class="fa fa-truck"></i> <span>Shipping</span><span class="fa arrow"></span></a>

                                                <ul class="nav nav-second-level collapse">
                            <li><a href="livraison.php">Delivery</a></li>
                            <li><a href="livreur.php">Delivery_Man</a></li>
                           
                        </ul>
                    </li>

                    <li >
                                                <a href="reclamation.php"><i class="fas fa-ban"></i> <span>Reclamation</span><span></span></a>

                       
                    </li>
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
                            <h3>Empty page</h3>
                            <a href="#"><i class="fa fa-plus"></i> Add Widget</a>
                            <a href="#"><i class="fa fa-share"></i> Share</a>
                            <a href="#"><i class="fa fa-envelope"></i> Email</a>
                        </div><!--end page title-->
                      

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
<span class="lnr lnr-arrow-right" >  tri Prix_nouveau_dessandant:     <input type="button" name="trier" value="trier" onclick="filterProducts22()">  </span>
<br>
    <span class="lnr lnr-arrow-right" >  tri Prix_nouveau :     <input type="button" name="trier" value="trier" onclick="filterProducts2()">  </span>
    <br>
    <br>
      <p><input type="hidden" class="price_range" value="0,500" /></p>
        <span class="lnr lnr-arrow-right" >  recherche Nom
            <input type="text" class="key" placeholder="...."  onkeyup="filterProducts3()">  </span>




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
<div id="productContainer">
<table class="table table-hover">
            <thead>
              <tr>
                <th  style="width: 20%">ID</th>
                <th>Nom</th>
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
    </div>




<script>
$('.price_range').jRange({
    from: 0,
    to: 500,
    step: 50,
    format: '%s USD',
    width: 1150,
    showLabels: true,
    isRange : true
});
</script>














                    </div><!--content-->               
                </div><!--content page-->
            </div><!--end wrapper-->
        </div>
        <div class="sidebar">
            <div class='nicescroll'>
                <h4>Quick Support</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod.
                </p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows='5' placeholder="Name"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="button" class=" btn btn-theme btn-lg">Send</button>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="footer">
                <span>Copyright &copy; 2016. Pink-Desh.</span>
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

<!-- Mirrored from html.designstream.co.in/pink-desh/dark/empty_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:41:45 GMT -->
</html>
