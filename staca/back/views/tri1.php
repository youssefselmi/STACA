<?php
include('../core/commandeC.php');

?>
<script type="text/javascript">
 
function printpage()
  {
  window.print()   // ATTENTION : imprime la page courante !
  }
function impression() 
{
window.frames[0].print();
}
 window.name = 'main';
 
</script>
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
                <form class="pull-left app-search hidden-xs" action="rechercher.php" method="post">
                    <input type="text" class="form-control" name="rechercher" placeholder="Search here...">
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
                                <img src="images/user.jpg" alt="" class="pull-left">
                                <span>Ben Amor Inès<br><em>Admin</em></span>                            
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
                    <li><a href="index.html"><i class="fa fa-home"></i>  <span>Dashboard</span></a></li>                       
                    <li>
                        <a href="#"><i class="fa fa-envelope"></i> <span>Commande</span><span class="fa arrow"></span></a>
                       
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i> <span>Panier</span><span class="fa arrow"></span></a>
                        
                    </li>
                    <li>
                       <div class="trash" id="google_translate_element">

</div> 
                    </li>
                  
                
                  
                </ul>
                  <div class="nav-bottom clearfix">
                    <a href="#" style="border-right: 0px;"><i class="fa fa-lock"></i></a>
                    <a href="#" style="border-right: 0px;"><i class="fa fa-download"></i></a>
                    <a href="#" style="border-right: 0px;"><i class="fa fa-globe"></i></a>
                    <a href="#" style="border-right: 0px;"><i class="fa fa-phone"></i></a>
                </div>
            </div>
            <style type="text/css">
                .row td
                {
                   color:#F4A460; 
                }
                
            </style>
            <!--left menu end-->
            <div class="content-page  equal-height">
                <div class="content">
                    <div class="container">
                      
                <div class="content">
                    <div class="container">
                        <div class="page-title">
                            <h3><i class="fa fa-tasks"></i>Gérer commande</h3>
                            <a href="#"><i class="fa fa-plus"></i> Add Widget</a>
                            <a href="#"><i class="fa fa-sharée"></i> Share</a>
                            <a href="#"><i class="fa fa-envelope"></i> Email</a>
                             <th><a href="tri.php" class="btn btn-theme" value="trier">Tri par id</a></th>
                                                    <th><a href="tri1.php" class="btn btn-theme" value="trier">Tri par prix</a></th>
                                                     <th><a href="tri2.php" class="btn btn-theme" value="trier">Tri par date</a></th>
                                                     <th>
<iframe id="fichierpdf" src="commande.php" name="commande.php" style="height:0px; width:0px; border: 0px;"></iframe>
<input class="btn btn-theme"  type="button" name="commande.php" value="Print this page" onclick="impression()" /></th>
                        </div><!--end page title-->
                        <div class="row">
                            <div class="col-sm-16">
                                <div class="panel-box">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                  
                                                    <td><strong ><i class="fa fa-lock"></i> ID</strong></td>
                                                    <td><strong><i class="fa fa-envelope-o "></i> EMAIL</strong></td>
                                                    <td><strong><i class="fa fa-globe"></i> Adresse</strong></td>
                                                    <td><strong><i class="fa fa-phone"></i> Telephone</strong></td>
                                                    <td><strong><i class="fa fa-search"></i> Nom des produits</strong></td>
                                                     <td><strong><i class="fa fa-search"></i> Date de commande</strong></td>
                                                    <td><strong> $ Prix</strong></td>
                                                     <th><a href="ajoutercommande.html" class="btn btn-theme" value="Ajouter">Ajouter</a></th>
                                                   <form action="pagination.php" method="post">
                                            
                                                    <th>
                                                       <select name="pager" class="btn btn-theme">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                </th>
                                                   <th> <input class="btn btn-theme" type="submit" value="paginer" name="page"></th>
                                                    </form>
                                                   

                                                </tr>
                                  <?php

$hello=new commande();
$hello->triparprix();
                         ?>         
                                       
                                        </table>
                                    </div>
                                </div>
                            </div>

                 
        </div>
                        </div><!--end page title-->

                      
                    </div><!--content-->               
                </div><!--content page-->
            </div><!--end wrapper-->
        </div>
        <div class="sidebar">
            <div class='nicescroll'>
                <h4>Quick Support</h4>
                <p>
                	<style type="text/css">
                                                    	.trash
                                                    	{
                                                     border:none;
                                                     background: transparent;
                                                    	}
                                                    </style>
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
