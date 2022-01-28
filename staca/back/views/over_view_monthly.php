<?php
include "../connexion.php";
$db=config::getConnexion();

   $req1= $db->query("SELECT count(*) as n, MONTHNAME(date_visite) as date_view from visits GROUP BY MONTHNAME(date_visite)");
   $req1->execute();
         $liste= $req1->fetchALL(PDO::FETCH_OBJ);
 $dataPoints = array();
 
foreach ($liste as $row) {
    $dataPoints[] = array('label' => $row->date_view, 'y' => $row->n );
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
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
                            <h3>Best Sales MONTHLY </h3>  
                    
                            <a href="#"><i class="fa fa-plus"></i> Add Widget</a>
                            <a href="#"><i class="fa fa-share"></i> Share</a>
                            <a href="#"><i class="fa fa-envelope"></i> Email</a>

                        </div><!--end page title-->
                        <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,  
	title:{
		text: "Over Views Monthly"
	},
	axisY: {
		title: "Views",
		valueFormatString: "#0,,.",
		suffix: "",
		prefix: ""
	},
	data: [{
		type: "splineArea",
		color: "rgba(54,158,173,.7)",
		markerSize: 5,
		xValueFormatString: "YYYY",
		yValueFormatString: "$#,##0.##",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
			
		
	}]
	});
chart.render();

}
 </script>
 <div id="chartContainer" style="height: 550px; width: 70%;"></div>
 <script src="canvasjs-2.3.2/canvasjs.min.js"></script>   





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
