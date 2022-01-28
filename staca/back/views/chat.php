<?php 
session_start();

 ?>



<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=staca;charset=utf8", "root", "");



if(isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo']) AND !empty($_POST['message']) )

{
    $pseudo = htmlspecialchars($_POST['pseudo'] );
    $message = htmlspecialchars($_POST['message'] );
$date = date("d-m-Y");
$heure = date("H:i");
    $insertmsg = $bdd->prepare('INSERT INTO Chat(pseudo, message) VALUES(?, ?)');
    $insertmsg->execute(array($pseudo, $message));
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
                            <h3>CHAT ROOM FOR ADMINS</h3>
                            <a href="#"><i class="fa fa-plus"></i> Add Widget</a>
                            <a href="#"><i class="fa fa-share"></i> Share</a>
                            <a href="#"><i class="fa fa-envelope"></i> Email</a>
                        </div><!--end page title-->

                             <p class="promo" align="center" class="text-center text-info">Chat Room</p>





                             <form method="post" action="">
                                 <table align="center">
                                      <tr>
        <td height="46" width="35%">
            <h4> PSEUDO</h4>
        </td>
        <td width="63%" height="46"><input type="text" name="pseudo" class="form-control" placeholder="PSEUDO" value="<?php if(isset($pseudo)) {echo $pseudo;}  ?>"></td>
    </tr>


                                     <tr>
        <td width="35%">
            <h4>MESSAGE</h4>
        </td>
        <td width="63%"><textarea  name="message" class="form-control"  placeholder="Message" ></textarea></td>
    </tr>



                                    <tr>
                                        <td></td>
        <td ><input type="submit" class="btn btn-primary btn-block" value="ENVOYER MESSAGE"></td>
    </tr>




                                 </table>



                             </form>
                             <br><br>

                             <table align="center">

<td>
                             <?php 
              
                               $allmsg = $bdd->query('SELECT * FROM Chat ORDER BY id DESC');

                               while ($msg = $allmsg->fetch()) 
                                {
                                   
                               
                              ?>
                              <b> <?php echo $msg['pseudo']; ?>:  </b><?php echo $msg['message']; ?> <br>
                              <?php 
                              }

                               ?>
                           </td>
                           <td></td>



</table>







































                    <!--content-->               
                </div><!--content page-->
            </div><!--end wrapper-->
        </div>
      
    </body>

<!-- Mirrored from html.designstream.co.in/pink-desh/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:40:58 GMT -->
</html>
