<?PHP
           include "../core/clientC.php";
           $client1C=new clientC();
           
           $listeCartes2=$client1C->afficherClientsAdr();
           
           ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
<!-- Mirrored from html.designstream.co.in/pink-desh/dark/../views/affichageclient.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:41:41 GMT -->
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
                                <img src="../../images/user.png" alt="" class="pull-left">
                                <span>Angila Deo <br><em>Admin</em></span>                            
                            </a>
                            <ul class="dropdown-menu profile-drop">
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                   <li class=""><a href="index.php"><i class="fa fa-home"></i>  <span>Dashboard</span></a></li>  

                    <li class="">
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
                            <li ><i class="fa fa-bar-chart-o"></i> <span>CUSTOMERS STATS</span><span class="fa arrow"></span></li><!-- graph morris-->
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
      
                    <li class="active">
                        <a href="affichageclient1.php"><i class="fa fa-edit"></i> <span>CUSTOMERS</span><span class="fa arrow"></span></a>
                        
                    </li>
                    <li class="">
                        <a href="../../../web/table_basic.php"><i class="fa fa-table"></i> <span>Products</span><span class="fa arrow"></span></a>
                      
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
                            <h3>Customers</h3>
                            <a href="#"><i class="fa fa-plus"></i> Add Widget</a>
                            <a href="#"><i class="fa fa-share"></i> Share</a>
                            <a href="#"><i class="fa fa-envelope"></i> Email</a>

                        </div><!--end page title-->
                        <div class="row">
   
       
                            <div class="col-sm-12">
                                <div class="panel-box">
                               <div class="table-responsive">

                                       <table class="table table-striped table-hover" id="">
                                       <thead>
                                
   <select class="input-select" size="1" onChange="location = this.options[this.selectedIndex].value;" class="form-control">
										<option value="affichageclient.php?affichageclient=1">Default</option>
										<option value="affichageclient.php?clientTriesqteDESC=1">ID <-</option>
										<option value="affichageclient.php?clientTriesqteASC=1">ID -></option>
										<option value="affichageclient.php?clientTriesA=1"> A-Z</option>
										<option value="affichageclient.php?clientTriesZ=1">Z-A</option>
									</select>
                                   </tr>
                                   </thead>
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

<br>

</div><!--content-->               
                </div><!--content page-->
            </div><!--end wrapper-->
        </div>
      
</br>
<div class="row">
                            <div class="col-sm-12">
                                <div class="panel-box">
                                    <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="myTable">
                                        <thead>                                        <tr><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Adress.." title="Type in a name" class="form-control"></tr>

                                            <tr>
                                            <th>ID</th>
                                                <th>Adress</th>
                                                <th>Postal code</th>
                                                <th>City</th>
                                               
                                            
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?PHP
          foreach( $listeCartes2 as $row2){

?>
<td><?PHP echo $row2['id'];?></td>
<td><?PHP echo $row2['adr'];?></td>
<td><?PHP echo $row2['postal'];?></td>
<td><?PHP echo $row2['city'];?></td>

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
     <!--   <div align="center"> 

<input type="submit" id="impression" name="impression" onclick="imprimer_page()" value="imprimer la page" class=" btn btn-theme btn-lg">
</div>
<script type="text/javascript">
function imprimer_page(){
    window.print();
}
</script> -->
     

          
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="../../js/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/jquery.slimscroll.js"></script>
        <script src="../../js/metisMenu.js"></script>
         <script src="../../js/core.js"></script>
        <script src="../../js/mediaquery.js"></script>
        <script src="../../js/equalize.js"></script>
        <script src="../../js/app.js"></script>
        <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
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
    </body>

<!-- Mirrored from html.designstream.co.in/pink-desh/dark/affichageclient.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:41:41 GMT -->
</html>
