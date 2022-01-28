

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

   //shipping stats...
   $req3= $db->query("SELECT DATE_FORMAT(day,'%b') as mo ,count(*) as nn from livraison GROUP BY DATE_FORMAT(day,'%b')");
   $req3->execute();
         $liste3= $req3->fetchALL(PDO::FETCH_OBJ);

 $dataPoints3 = array();
 
foreach ($liste3 as $row) {
    $dataPoints3[] = array('label' => $row->mo, 'y' => $row->nn);
}

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
                                    <li>
                                        <a href="revenue_trois.php">REVENUS 3YRS </a>
                                    </li>
                                    <li>
                                        <a href="shipping_stats.php">SHIPPING STATS </a>
                                    </li>
                            </ul>
                             
                            
                        </ul>
                    </li>
                    <li>
                        <a href="commande.php"><i class="fa fa-envelope-o"></i> <span>Commande</span><span class="fa arrow"></span></a>
                        
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
            <div class="content-page  equal-height">
                <div class="content">
                    <div class="container">
                        <div class="page-title">
                            <h3>My Dashboard</h3>
                            <a href="#"><i class="fa fa-plus"></i> Add Widget</a>
                            <a href="#"><i class="fa fa-share"></i> Share</a>
                            <a href="#"><i class="fa fa-envelope"></i> Email</a>
                        </div><!--end page title-->

                        <div class="widget-row">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="widget-box clearfix">
                                        <div class="pull-left">
                                            <h4>Today's Shipping</h4>
                                            <h2><?php echo intval($nb['nb1']); ?></h2>
                                        </div>
                                        <div class="text-right">
                                            <span id="sparkline8"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="widget-box clearfix">
                                                <div>
                                                    <h4>Total new orders</h4>
                                                    <h2> <?php echo $new_orders;?> <i class="fa fa-plus pull-right"></i></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="widget-box clearfix">
                                                <div>
                                                    <h4>Total sale today</h4>
                                                    <h2><?php echo $soso;?> <i class="fa fa-shopping-cart pull-right"></i></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="widget-box clearfix">
                                                <div>
                                                    <h4>Pending Orders</h4>
                                                    <h2><?php echo $pending_O; ?> <i class="fa fa-tasks pull-right"></i></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="widget-box clearfix">
                                                <div>
                                                    <h4>Total Income</h4>
                                                    <h2><?php echo $income; ?>DT <i class="fa fa-usd pull-right"></i></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end widget-->

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="panel-box">
                                    <h4> Today's Total Orders</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            
                                                <tr>
                                                    <td>ID Order</td>
                                                    <td>Date Order</td>
                                                    
                                                    <td>Price</td>
                                                       
                                                </tr>
                                            
                                            <?PHP
                                                foreach($liste as $row){
	                                        ?>

                                                <tr>
                                                    <td><?php echo $row['idc']; ?></td>
                                                    <td><?php echo $row['date_commande']; ?></td>
                                                    
                                                    <td><?php echo $row['prix']; ?></td>
                                                
                                                </tr>                                             
                                           
                                            <?php
                                                }
                                                ?> 
                                            
                                        </table>
                                        </div>







                                </div>
                            </div>
                            <div class="col-sm-4">
                               
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="panel-box">
                                    <h4>VIEW PENDING ORDERS</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            
                                                <tr>
                                                    <td>ID Order</td>
                                                    <td>Date Order</td>
                                                    <td>Quantity</td>
                                                    <td>Price</td>
                                                    <td>Status</td>
                                                    
                                                       
                                                </tr>
                                            
                                            <?PHP
                                                foreach($liste_all as $row){
	                                        ?>

                                                <tr>
                                                    <td><?php echo $row['id_commande']; ?></td>
                                                    <td><?php echo $row['date_commande']; ?></td>
                                                    <td><?php echo $row['qte_produit']; ?></td>
                                                    <td><?php echo $row['prix']; ?></td>
                                                    <td style="color:orange"><?php echo $row['etat']; ?></td>

                                                
                                                </tr>                                             
                                           
                                            <?php
                                                }
                                                ?> 
                                            
                                        </table>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel-box">
                                    <h4>MONTHLY Overview Orders</h4>
                                    <div>
<?php

$db=config::getConnexion();

   $req1= $db->query("SELECT count(*) as number_orders, DATE_FORMAT(date_commande,'%b') as date_de_commande from sales GROUP BY DATE_FORMAT(date_commande,'%b')");
   $req1->execute();
         $overview_monthly_orders= $req1->fetchALL(PDO::FETCH_OBJ);

 $dataPoints1 = array();
 
foreach ($overview_monthly_orders as $row) {
    $dataPoints1[] = array('label' => $row->date_de_commande, 'y' => $row->number_orders);
}
?>
<script>
window.onload = function () {
	
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	
	title:{
		text:"Monthly OverViews"
	},
	axisX:{
		interval: 1
	},
	axisY2:{
		interlacedColor: "rgba(1,77,101,.2)",
		gridColor: "rgba(1,77,101,.1)",
		title: "Number of Companies"
	},
	data: [{
		type: "bar",
		name: "companies",
		axisYType: "secondary",
		color: "#014D65",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>
 <div id="chartContainer" style="height: 450px; width:100% ;"></div>
 <script src="canvasjs-2.3.2/canvasjs.min"></script>
                                    </div>
                                </div>
                            </div>
                            
                        </div>


                        <div class="row">

                            <div class="col-sm-6">
                                <div class="panel-box">
                                    <h4>SHIPPING STATS</h4>
                                                    
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel-box">

                                    
                                    </div>
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
        <script>

            $("#sparkline8").sparkline([5, 6, 7, 2, 0, 4, 2, 4, 5, 7, 2, 4, 12, 14, 4, 2, 14, 12, 7], {
                type: 'bar',
                barWidth: 4,
                height: '60px',
                barColor: '#f7b03e',
                negBarColor: '#c6c6c6'});
            $(".sparkline8").sparkline([4, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline9").sparkline([3, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline10").sparkline([4, 1], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline11").sparkline([1, 3], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline12").sparkline([3, 5], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline13").sparkline([6, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });

            //moris chart
            $(function () {
                var lineData = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "Example dataset",
                            fillColor: "rgba(235, 162, 59,0.5)",
                            strokeColor: "rgba(235, 162, 59,1)",
                            pointColor: "rgba(235, 162, 59,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(235, 162, 59,1)",
                            data: [90, 0, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "Example dataset",
                            fillColor: "rgba(247, 176, 62,0.5)",
                            strokeColor: "rgba(247, 176, 62,0.7)",
                            pointColor: "rgba(247, 176, 62,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(247, 176, 62,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };
                var lineOptions = {
                    scaleShowGridLines: true,
                    scaleGridLineColor: "#b5884c",
                    scaleGridLineWidth: 1,
                    bezierCurve: true,
                    bezierCurveTension: 0.4,
                    pointDot: true,
                    pointDotRadius: 4,
                    pointDotStrokeWidth: 1,
                    pointHitDetectionRadius: 20,
                    datasetStroke: true,
                    datasetStrokeWidth: 2,
                    datasetFill: true,
                    responsive: true
                };


                var ctx = document.getElementById("lineChart").getContext("2d");
                var myNewChart = new Chart(ctx).Line(lineData, lineOptions);


                var polarData = [
                    {
                        value: 300,
                        color: "#f7b03e",
                        highlight: "#3d3f4b",
                        label: "App"
                    },
                    {
                        value: 140,
                        color: "#f5c06c",
                        highlight: "#3d3f4b",
                        label: "Software"
                    },
                    {
                        value: 200,
                        color: "#bd914a",
                        highlight: "#3d3f4b",
                        label: "Laptop"
                    }
                ];

                var polarOptions = {
                    scaleShowLabelBackdrop: true,
                    scaleBackdropColor: "rgba(255,255,255,0.75)",
                    scaleBeginAtZero: true,
                    scaleBackdropPaddingY: 1,
                    scaleBackdropPaddingX: 1,
                    scaleShowLine: true,
                    segmentShowStroke: true,
                    segmentStrokeColor: "#fff",
                    segmentStrokeWidth: 2,
                    animationSteps: 100,
                    animationEasing: "easeOutBounce",
                    animateRotate: true,
                    animateScale: false,
                    responsive: true

                };

                var ctx = document.getElementById("polarChart").getContext("2d");
                var myNewChart = new Chart(ctx).PolarArea(polarData, polarOptions);

                var barData = {
                    labels: ["Monday", "Tuesday", "Wedneday", "Thrusday", "Friday"],
                    datasets: [
                        {
                            label: "My Second dataset",
                            fillColor: "#3d3f4b",
                            strokeColor: "#3d3f4b",
                            highlightFill: "#eda01c",
                            highlightStroke: "#eda01c",
                            data: [40, 48, 40, 19, 86]
                        }
                    ]
                };

                var barOptions = {
                    scaleBeginAtZero: true,
                    scaleShowGridLines: true,
                    scaleGridLineColor: "rgba(0,0,0,.05)",
                    scaleGridLineWidth: 1,
                    barShowStroke: true,
                    barStrokeWidth: 1,
                    barValueSpacing: 1,
                    barDatasetSpacing: 1,
                    responsive: true
                };


                var ctx = document.getElementById("barChart").getContext("2d");
                var myNewChart = new Chart(ctx).Bar(barData, barOptions);

                var radarData = {
                    labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(235, 162, 59,1)",
                            strokeColor: "rgba(235, 162, 59,1)",
                            pointColor: "rgba(235, 162, 59,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(235, 162, 59,1)",
                            data: [65, 59, 90, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(247, 176, 62,1)",
                            strokeColor: "rgba(247, 176, 62,1)",
                            pointColor: "rgba(247, 176, 62,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(255,255,255,1)",
                            data: [28, 48, 40, 19, 96, 27, 100]
                        }
                    ]
                };

                var radarOptions = {
                    scaleShowLine: true,
                    angleShowLineOut: true,
                    scaleShowLabels: false,
                    scaleBeginAtZero: true,
                    angleLineColor: "rgba(0,0,0,.1)",
                    angleLineWidth: 1,
                    pointLabelFontStyle: "normal",
                    pointLabelFontSize: 10,
                    pointLabelFontColor: "#666",
                    pointDot: true,
                    pointDotRadius: 3,
                    pointDotStrokeWidth: 1,
                    pointHitDetectionRadius: 20,
                    datasetStroke: true,
                    datasetStrokeWidth: 2,
                    datasetFill: true,
                    responsive: true
                };

                var ctx = document.getElementById("radarChart").getContext("2d");
                var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

                var data = [{
                        label: "Sales 1",
                        data: 21,
                        color: "#d3d3d3"
                    }, {
                        label: "Sales 2",
                        data: 3,
                        color: "#bababa"
                    }, {
                        label: "Sales 3",
                        data: 15,
                        color: "#79d2c0"
                    }, {
                        label: "Sales 4",
                        data: 52,
                        color: "#f7b03e"
                    }];

                var doughnutData = [
                    {
                        value: 300,
                        color: "#d53d2f",
                        highlight: "#ba8036",
                        label: "Chorme"
                    },
                    {
                        value: 150,
                        color: "#dedede",
                        highlight: "#ba8036",
                        label: "Mozilla"
                    },
                    {
                        value: 130,
                        color: "#03a679",
                        highlight: "#ba8036",
                        label: "Safari"
                    }
                ];

                var doughnutOptions = {
                    segmentShowStroke: true,
                    segmentStrokeColor: "#272a31",
                    segmentStrokeWidth: 4,
                    percentageInnerCutout: 45, // This is 0 for Pie charts
                    animationSteps: 100,
                    animationEasing: "easeOutBounce",
                    animateRotate: true,
                    animateScale: false,
                    responsive: true
                };


                var ctx = document.getElementById("doughnutChart").getContext("2d");
                var myNewChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

//line chart
                Morris.Line({
                    element: 'morris-line-chart',
                    data: [{y: '2006', a: 0, b: 10},
                        {y: '2007', a: 25, b: 35},
                        {y: '2008', a: 30, b: 40},
                        {y: '2009', a: 20, b: 25},
                        {y: '2010', a: 37, b: 40}],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['Series A', 'Series B'],
                    hideHover: 'auto',
                    resize: true,
                    lineColors: ['#ddcc36', '#f7b03e']
                });


            });
        </script>
    </body>

<!-- Mirrored from html.designstream.co.in/pink-desh/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:40:58 GMT -->
</html>
