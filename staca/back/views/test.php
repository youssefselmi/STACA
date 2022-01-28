<?php
include "../connexion.php";
include "../core/customerC.php";
$db=config::getConnexion();

   $req1= $db->query("SELECT COUNT(*) as nb1 from livraison where DATE( day ) = DATE( NOW() )");
   $nb=$req1->fetch();
   $sales_today=new customerC();
   $total_income=new customerC();
   $total_new_orders=new customerC();
   $pending=new customerC();
   $soso=$sales_today->total_sales_today();
   $income=$total_income->total_income();
   $new_orders=$total_new_orders-> total_new_orders();
   $pending_O=$pending->pending_orders();
    //view orders//
   $view_orders=new customerC();
   $liste=$view_orders->view_new_orders();
   //view all orders//
   $view_all_orders=new customerC();
   $liste_all=$view_all_orders-> view_total_orders();
   //           //

?>
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
                                <img src="images/user.png" alt="" class="pull-left">
                                <span>Sami Bhh <br><em>Admin</em></span>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="logout.php">Logout</a></li>
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
                        <a href="#"><i class="fa fa-table"></i> <span>Products</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="../../../web/table_basic.php">Static Tables</a></li>
                            <li><a href="table_data_tables.html">Data Tables</a></li>
                        </ul>
                    </li>


                    <li>
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

                                    
                                    </div>
                                </div>
                            </div>
                        </div>
  <table class="table table-striped table-hover" id="basic-datatables">
                                        <select class="input-select" size="1" onChange="location = this.options[this.selectedIndex].value;" class="fa arrow">
                                        <option value="affichageclient.php?affichageclient=1">Default</option>
                                        <option value="affichageclient.php?clientTriesqteDESC=1">ID <-</option>
                                        <option value="affichageclient.php?clientTriesqteASC=1">ID -></option>
                                        <option value="affichageclient.php?clientTriesA=1"> A-Z</option>
                                        <option value="affichageclient.php?clientTriesZ=1">Z-A</option>
                                    </select>
                                            <thead>
                                                <tr>
                                                <th>ID</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Phone</th>
                                                    <th>Email Adress</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             <tr>
                                             <?php 
                        
                        
                        //if (isset($_GET['search']))
    //{  //$liste = $produitc->rechercherclient($_GET['search']);
     //$result = $produitc->afficherModifierProduit($_GET['idProduit']); 

     //
    // }
   if(isset($_GET['clientTriesqteDESC']))
    {
        $liste = $client1C->triidd();
    }
     else if(isset($_GET['clientTriesqteASC']))
    {
        $liste = $client1C->triida();
    }
    
    else  if(isset($_GET['clientTriesA']))
     {
        $liste = $client1C->trinomA();
     }
     else if(isset($_GET['clientTriesZ']))
     {
        $liste = $client1C->trinomZ();
     }
    /* else if(isset($_GET['clientTriesDesc']))
     {
        $liste = $client1C->triPrixDesc(); 
     }*/
     else
      {  $liste = $client1C->afficherClients(); 

      }

 ?>
                                            <?PHP
                                            
           foreach($liste as $row){
            

?>
<td><?PHP echo $row['id'];?></td>
<td><?PHP echo $row['nom'];?></td>
<td><?PHP echo $row['prenom'];?></td>
<td><?PHP echo $row['telephone'];?></td>
<td><?PHP echo $row['email'];?></td>
<td>  
     <form method="POST" action="supprimerclient.php">
     
 <!--  <button type="submit" value=Delete class=" btn btn-theme btn-lg" name="delete" action="../views/supprimerclient.php" > 
 <input type="hidden" value="<?PHP echo $row['id']; ?>"name="id">
 ******************-->
 <button class="btn btn-danger btn-l" name="supprimer" onclick="window.location.href='../views/supprimerclient.php'">                      
                      <i class="fa fa-trash-o " ></i></button>
                      <input type="hidden" value="<?PHP echo $row['id']; ?>"name="id">

</form>
</td>
</tr>

<?PHP
     }
     
     ?>
 
</tbody> 
</table>
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
        <script src="js/moment.js"></script>  
        <script src="js/jquery.sparkline.min.js"></script>
        <script src="js/jquery.flot.js"></script>
        <script src="js/jquery.flot.time.js"></script>
        <script src="js/jquery.flot.tooltip.min.js"></script>
        <script src="js/jquery.flot.resize.js"></script>
        <script src="js/jquery.flot.pie.js"></script>
        <script src="js/jquery.flot.selection.js"></script>
        <script src="js/jquery.flot.stack.js"></script>
        <script src="js/jquery.flot.crosshair.js"></script>
        <script src="js/raphael-2.1.0.min.js"></script>
        <script src="js/morris.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/core.js"></script>
        <script src="js/mediaquery.js"></script>
        <script src="js/equalize.js"></script>
        <script src="js/app.js"></script>

        <!--page js-->

    </body>

<!-- Mirrored from html.designstream.co.in/pink-desh/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:40:58 GMT -->
</html>
