<?php

include "../connexion.php";
include "../core/customerC.php";
$db=config::getConnexion();
        $customer=new customerC();
        //$listcustomers=$customer->ordered_customers();
        $listcustomers=$customer->top_5_customers();

        $req=$db->query("DELETE from clients_ORDO");
        $req->execute();
?>      
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
<!-- Mirrored from html.designstream.co.in/pink-desh/dark/graph_morris.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:41:22 GMT -->
<head>
        <title>CUSTOMERS STATS</title>
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
                    <li><a href="index.php"><i class="fa fa-home"></i>  <span>Dashboard</span></a></li>                       
                    <li class="active">
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
                                        <a href="loyal_customers.php">Loyal Customers</a>
                                    </li>
                                    <li>
                                        <a href="over_view_monthly.php">Over Views MONTHLY</a>
                                    </li>
                            </ul>
                            <li><i class="fa fa-bar-chart-o"></i> <span>INCOME STATS</span><span class="fa arrow"></span></li><!-- graph morris-->
                            <ul class="nav nav-third-level">
                            <li>
                                        <a href="over_view_total_income.php">Over View Total Income</a>
                                    </li>
                                    <li>
                                        <a href="revenue_trois.php">REVENEUE 3YRS</a>
                                    </li>
                            </ul> 
                           
                        </ul>
                    </li>
                    
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
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span>Menu Levels </span><span class="fa arrow"></span></a>
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
                            <h3>Customers Stats</h3>
                            <a href="#" type="submit" onclick="imprimer_page()"><i class="fa fa-plus"></i> Print</a>
                            <script type="text/javascript">
                            
                                function imprimer_page(){
                                    window.print();
                                         }
                            </script>
                            <a href="#"><i class="fa fa-share"></i> Share</a>
                            <a href="#"><i class="fa fa-envelope"></i> Email</a>
                        </div><!--end page title-->
                        <style>


#myInput {
  
  background-position: 10px 10px;
  background-repeat: no-repeat;
  background-color: khaki;
  width: 20%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}


</style>
                            <div class="row">
                            <div class="col-sm-12">
                                <div class="panel-box">
                                    
                                <input style="float: right" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search here.." title="Type in a name">
</div>
                                    <h4>
                                    <label>
                                                <select class=" btn btn-theme btn-lg" style="height: 50px; width:250px" onChange="location = this.options[this.selectedIndex].value;">
                                                    <option value="0">Default</option>
                                                    <option value="TOP_customers.php?1">A ----> Z</option>
                                                    <option value="TOP_customers.php?2" >Z ----> A</option>
                                                    <option value="TOP_customers.php?3">VISITS</option>
                                                     <option value="TOP_customers.php?4">ID</option>    
                                                </select>
                                            </label>
                                    
                                    
                                    </h4>
                                                                        
                                            
                                            
                                            
                                                
                                            
                                            <?php 
                                            if(isset($_GET['1']) )
                                                {
                                                    $listcustomers= $db->query('SELECT * FROM best_customers order by nom ASC');
                                                    

   
                                                }
                                            else
                                            if(isset($_GET['2']))
                                                {
                                                    $listcustomers = $db->query('SELECT * FROM best_customers order by nom DESC');
   
                                                }
                                            else 
                                            if(isset($_GET['3']))
                                                {
                                                    $listcustomers = $db->query('SELECT * FROM best_customers order by nbr_visites DESC');
   
                                                }
                                            else
                                            if(isset($_GET['4']))
                                                {
                                                    $listcustomers = $db->query('SELECT * FROM best_customers order by id_best ASC');
   
                                                }
                                                ?>
                                            
                                    





                                    <link href="Top_customers.css" rel="stylesheet">
                                <div class="zina">
                                    <div class="table-responsive">
                                    
                                        <table class="table table-striped table-hover" id="myTable">
                                            
                                                <tr class="zina_titre">
                                                    <td>ID</td>
                                                    <td>ID Customer</td>
                                                    <td>first Name</td>
                                                    <td>last Name</td>
                                                    <td>visits Number</td>
                                                      
                                                </tr>
                                            
                                            <?PHP
                                                foreach($listcustomers as $row){
	                                        ?>

                                                <tr>
                                                    <td><?php echo $row['id_best']; ?></td>
                                                    <td><?php echo $row['id_client']; ?></td>
                                                    <td><?php echo $row['nom']; ?></td>
                                                    <td><?php echo $row['prenom']; ?></td>
                                                    <td class="best"><?php echo $row['nbr_visites']; ?></td>
                                                    <td><a   href="modifier_top_customers.php?id_best=<?= $row['id_best'];?>">
	                                                Modifier</a></td>
                                                </tr>                                             
                                           
                                            <?php
                                                }
                                                ?> 
                                            
                                        </table>
                                        <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
                                        </div>

                                        <form method="POST" action=""> 
      Print Customer with details : <input type="text" name="recherchecmdp">
     <input type="submit" value="search"> 
     </form>
<?php 
     if(!empty($_POST['recherchecmdp']))
{
            
         
                $objproduit_trans = new customerC();
    $objproduit_trans->setid_best($_POST['recherchecmdp']);
    $produit_transs = $objproduit_trans->recuperer_customer($_POST['recherchecmdp']);

 ?>
 <div class="container" id="HTMLtoPDF" style="display: none;" >
            <caption><strong>  detailed customer</strong></caption>
        <table class="table table-striped" cellpadding="10%">
            <thead>
                <tr>
                    <th>#id</th>
                    <th>sales</th>
                    <th>pts_fidelite</th>   
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($produit_transs as $key => $produit_trans) {
                ?>
                <tr>
                    <td><?= $produit_trans['id_best']; ?></td>
                    
                    <td><?= $produit_trans['id_client']; ?></td>
                    <td><?= $produit_trans['nom']; ?></td>
                    <td><?= $produit_trans['prenom']; ?></td>
                    <td><?= $produit_trans['nbr_visites']; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
     <button class=" btn btn-theme btn-lg"> <a href="#" onclick="PrintDiv()">Print</a> </button>
<?php  echo ('<script type="text/javascript">PrintDiv();</script>');?>
    <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('HTMLtoPDF');
       var popupWin = window.open('', '_blank', 'width=900,height=700');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
       popupWin.document.close();
            }
 </script>
<?php }   ?>





























                                        <div class="w3-center">
<div class="w3-bar">
  <a href="#" class="w3-bar-item w3-button">&laquo;</a>
  <a href="#" class="w3-button">1</a>
  <a href="#" class="w3-button">2</a>
  <a href="#" class="w3-button">3</a>
  <a href="#" class="w3-button">4</a>
  <a href="#" class="w3-button">&raquo;</a>
</div>
</div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                            <a style="font-size: 20px; padding-left: 30px;" href="formulaire_ajout.html"><i class="fa fa-plus"></i>Add Customer</a>
                            </div>
                            <div class="col-sm-6">
                               
                            </div>
                        </div>
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
           <script src="js/raphael-2.1.0.min.js"></script>
            <script src="js/morris.js"></script>
               <script src="js/morris-custom.js"></script>
    </body>

<!-- Mirrored from html.designstream.co.in/pink-desh/dark/graph_morris.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:41:23 GMT -->
</html>
