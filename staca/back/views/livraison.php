<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start(); 
session_id(); 
session_name(); ?>
<html>
    
<!-- Mirrored from html.designstream.co.in/pink-desh/dark/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:41:41 GMT -->
<head>
        <title>pink-desh</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/metisMenu.css" rel="stylesheet">
        <link href="css/morris-0.4.3.min.css" rel="stylesheet">
        <!-- DATATABLES-->
        <link rel="stylesheet" href="css/dataTables.colVis.css">
        <link rel="stylesheet" href="css/dataTables.bootstrap.css">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/modernizr.js"></script>
    </head>








    <?php

include "../core/livraisonC.php";
    include "../entities/livreur.php";
    $a2=new livraisonC();
 $a3=new livraisonC();
    $liste=$a2->afficherlivraison();
        $liste2=$a3->afficherlivreur();

?>


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
                                <span>Sami Bhh <br><em>Admin</em></span>                            
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
                    <li><a href="index.php"><i class="fa fa-home"></i>  <span>Dashboard</span></a></li>  

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
                            <li><a href="table_basic.html">Static Tables</a></li>
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
                    <li class="active">
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
            <div class="content-page  equal-height">
                <div class="content">
                    <div class="container">
                        <div class="page-title">

                            <!--*********************************************************************************************************************-->






  








                            <!--*************************************************************************************************************************************-->
                            <h3>Delivery</h3>
                            <a href="ajouterlivraison.php"><i class="fa fa-plus"></i> Add Delivery</a>


         
                                                                        
                                            
                                            
                                            
                                                
                                                
                                            
                                  
                                                                

                        </div><!--end page title-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel-box">
                                    <div class="table-responsive">
 

                                            <form style="float:right;" method="POST">

                                             <select name="delivery_man">
        <option>All</option>
        <option>None</option>
                                                                                            <?php foreach ($liste2 as $row) 
{
?>
        <option><?php echo $row['cin'];?></option>
<?php } ?>
    </select>           
<input type="submit" name="search" value="search">


    </form>





                                          <table id="basic-datatables" class="table" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Product Ref</th>
                                                <th>ID</th>
                                                <th>Adress</th>
                                                 <th>Delivery day</th>
                                                <th>Delivery man</th>
                                                <th>Postal code</th>
                                                <th>State</th>
                                                <th>Price</th>
                                                <th>Client Phone</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               <th>Product Ref</th>
                                                <th>ID</th>
                                                <th>Adress</th>
                                                 <th>Delivery day</th>
                                                <th>Delivery man</th>
                                                <th>Postal code</th>
                                                <th>State</th>
                                                <th>Price</th>
                                                <th>Client Phone</th>
                                                
                                                <th>Action</th>


                                            </tr>
                                            <tr><th align="center" >
                                        </tfoot>
                                        <tbody>

                                            <tr>

<?php 


if(isset($_POST['delivery_man'] )  && $_POST['delivery_man']!='All')
{
 

    $valueToSearch =$_POST['delivery_man'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM livraison WHERE CONCAT(`delivery_man`) LIKE '%".$valueToSearch."%'";
    $connect = mysqli_connect("localhost", "root", "", "staca");
    $search_result = mysqli_query($connect, $query);    
     while($lvr = mysqli_fetch_array($search_result)):
 
if($lvr['statut']=='Delivred') {$color2='green'; }  
 else if($lvr['statut']=='Comfirming') { $color2='grey'; }
    else if($lvr['statut']=='Canceled') { $color2='red'; }
else if($lvr['statut']=='Delivring') {$color2='orange'; }



 ?>


                                                <td><?php echo $lvr['ref']; ?></td>
                                                <td><?php echo $lvr['id']; ?></td>
                                                <td><?php echo $lvr['adress']; ?></td>
                                                <td><?php echo $lvr['day']; ?></td>
                                                <td><?php echo $lvr['delivery_man']; ?></td>
                                                <td><?php echo $lvr['code_postal']; ?></td>	
                                                <td><span style="color:<?php echo $color2 ?>"  > <?php echo $lvr['statut']; ?> </span></td>
                                                <td><?php echo $lvr['price']; ?>DT</td>
                                               <td><?php echo $lvr['phone']; ?></td>
                                                    <td> <a href="modifierlivraison.php?id=<?PHP echo $lvr['id']; ?>" style="float:left;"> <?php if($lvr['statut']!='Delivred'){?>modifier <?php } ?> </a></td>
                                                   



                                                          <td> <?php if($lvr['statut']=="Delivring") { ?>
                                           <div  class="content" align="center"  style="display: none;" id="content">
                                          <p style="float:right;"><?php echo $lvr['day']; ?></p>
                                         <h2>Delivery#<?php echo $lvr['id']; ?></h2>
                                        <h3>Product</h3>
                                        <p>Reference: <?php echo $lvr['ref']; ?> </p>
                                        <p>Price: <?php echo $lvr['price']; ?> DT</p>
                                        <h3>Client</h3>
                                         <p>Adress: <?php echo $lvr['adress']; ?></p> 
                                        <p>Postal Code: <?php echo $lvr['code_postal']; ?></p>
                                                <p>Phone: <?php echo $lvr['phone']; ?> </p>


                                                </div>
                                                <div class="editor" id="editor"></div>

<button class="cmd" >Print</button>

                                                 </td>
                                             <?php } ?>




                                                                       <td>                   	<form method="POST" action="supprimerlivraison.php">

                                                <button type="submit" name="supprimer" style="float:left;">Delete</button>
                                                 <input type="hidden" value="<?PHP echo $lvr['id']; ?>" name="id">
                                         
                                                   </form>


                                                </td>


                                            </tr>
<?php endwhile; } 



else
{
      foreach ($liste as $row) 
{
?>
                                            <tr>

<?php 
if($row['statut']=='Delivred') { $color2='green'; }  
 else if($row['statut']=='Comfirming') { $color2='grey'; }
    else if($row['statut']=='Canceled') { $color2='red'; }
else if($row['statut']=='Delivring') { $color2='orange'; }
                                              ?>


                                                <td><?php echo $row['ref']; ?></td>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['adress']; ?></td>
                                                <td><?php echo $row['day']; ?></td>
                                                <td><?php echo $row['delivery_man']; ?></td>
                                                <td><?php echo $row['code_postal']; ?></td> 
                                                <td><span style="color:<?php echo $color2 ?>"  > <?php echo $row['statut']; ?> </span></td>
                                                <td><?php echo $row['price']; ?>DT</td>
                                               <td><?php echo $row['phone']; ?></td>
                                                    <td> <a href="modifierlivraison.php?id=<?PHP echo $row['id']; ?>" style="float:left;"> <?php if($row['statut']!='Delivred'){?>modifier <?php } ?> </a></td>
                                                   



                                                          <td> <?php if($row['statut']=="Delivring") { ?>
                                           <div  class="content" align="center"  style="display: none;" id="content">
                                          <p style="float:right;"><?php echo $row['day']; ?></p>
                                         <h2>Delivery#<?php echo $row['id']; ?></h2>
                                        <h3>Product</h3>
                                        <p>Reference: <?php echo $row['ref']; ?> </p>
                                        <p>Price: <?php echo $row['price']; ?> DT</p>
                                        <h3>Client</h3>
                                         <p>Adress: <?php echo $row['adress']; ?></p> 
                                        <p>Postal Code: <?php echo $row['code_postal']; ?></p>
                                                <p>Phone: <?php echo $row['phone']; ?> </p>


                                                </div>
                                                <div class="editor" id="editor"></div>

<button class="cmd" >Print</button>

                                                 </td>
                                             <?php } ?>




                                                                       <td>                     <form method="POST" action="supprimerlivraison.php">

                                                <button type="submit" name="supprimer" style="float:left;">Delete</button>
                                                 <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                         
                                                   </form>


                                                </td>


                                            </tr>

                                           <?php } 
                                       
}



                                           ?>

                                       
                                     
                                        </tbody>

                                    </table>
                                     

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
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
        <!-- DATATABLES-->
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.colVis.js"></script>
        <script src="js/dataTables.bootstrap.js"></script>
        <script src="js/demo-datatable.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>
        <script type="text/javascript">
            var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('.cmd').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('facture.pdf');
});
        </script>



<!--   ******************************************************************************************************************************** -->





<!--******************************************************************************************************************************** *********** -->




    </body>

<!-- Mirrored from html.designstream.co.in/pink-desh/dark/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:41:45 GMT -->
</html>
