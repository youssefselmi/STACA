<?php 
include "categoriec.php";
$categoriec=new categoriec();
?>
<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'staca');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query('SELECT * FROM categorie')->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 3;

// Number of results to show on each page.
$num_results_on_page = 1;

if ($stmt = $mysqli->prepare('SELECT * FROM categorie ORDER BY id_cat LIMIT ?,?')) {
    // Calculate the page to get the results we need from our table.
    $calc_page = ($page - 2) * $num_results_on_page;
    $stmt->bind_param('ii', $calc_page, $num_results_on_page);
    $stmt->execute(); 
    // Get the results...
    $result = $stmt->get_result();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
<!-- Mirrored from html.designstream.co.in/pink-desh/dark/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:41:41 GMT -->
<head>
     <style>
        table {
    border-collapse: collapse;
    width: 500px;
}
td, th {
    padding: 10px;
}
th {
    background-color: #54585d;
    color: #ffffff;
    font-weight: bold;
    font-size: 13px;
    border: 1px solid #54585d;
}
td {
    color: #636363;
    border: 1px solid #dddfe1;
}
tr {
    background-color: #f9fafb;
}
tr:nth-child(odd) {
    background-color: #ffffff;
}
.table_data_tables {
    list-style-type: none;
    padding: 10px 0;
    display: inline-flex;
    justify-content: space-between;
    box-sizing: border-box;
}
.table_data_tables li {
    box-sizing: border-box;
    padding-right: 10px;
}
.table_data_tables li a {
    box-sizing: border-box;
    background-color: #e2e6e6;
    padding: 8px;
    text-decoration: none;
    font-size: 12px;
    font-weight: bold;
    color: #616872;
    border-radius: 4px;
}
.table_data_tables li a:hover {
    background-color: #d4dada;
}
.table_data_tables .next a, .table_data_tables .prev a {
    text-transform: uppercase;
    font-size: 12px;
}
.table_data_tables .currentpage a {
    background-color: #518acb;
    color: #fff;
}
.table_data_tables .currentpage a:hover {
    background-color: #518acb;
}
</style>
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
                    <li><a href="index.html"><i class="fa fa-home"></i>  <span>Dashboard</span></a></li>                       
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span>Graphs</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="graph_flot.html">Flot Charts</a></li>
                            <li><a href="graph_morris.html">Morris.js Charts</a></li>
                            <li><a href="graph_chartjs.html">Chart.js</a></li>
                            <li><a href="graph_chartist.html">Chartist</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope"></i> <span>Mailbox </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="mailbox.html">Inbox</a></li>
                            <li><a href="mail_detail.html">Email view</a></li>
                            <li><a href="mail_compose.html">Compose email</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span>Forms</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="form_basic.html">Basic form</a></li>
                            <li><a href="form_wizard.html">Wizard</a></li>
                            <li><a href="form_file_upload.html">File Upload</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href=""><i class="fa fa-table"></i> <span>Product</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="table_basic.php">Products</a></li>
                            <li><a href="table_data_tables.php">categirie</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o"></i> <span>Other Pages</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="lockscreen.html">Lockscreen</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="empty_page.html">Empty page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="video.html">Video</a></li>
                            <li><a href="tabs.html">Tabs</a></li>
                        </ul>
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
                            <h3>categorie</h3>
                            <a href="http://127.0.0.1/categorie/categorie.html"><i class="fa fa-plus"></i> Add categorie</a>
                            <a href="http://127.0.0.1/web/supprimercategorie.php"><i class="fa fa-share"></i> supprimer cat</a>
                            <a href="envoi.php"><i class="fa fa-envelope"></i> Email</a>
                        </div><!--end page title-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel-box">
                                    <div class="table-responsive">
                                          <table id="basic-datatables" class="table" cellspacing="0" width="100%">
 <?php


try
{
 $bdd = new PDO("mysql:host=localhost;dbname=web", "root", "");
 $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
  die("Une érreur a été trouvé : " . $e->getMessage());
}
$bdd->query("SET NAMES UTF8");

if (isset($_GET['s']) AND $_GET["s"] == "Search")
{
  
 $_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les intrusions html
 $terme = $_GET['terme'];
 

 if (isset($terme))
 {

  $terme = strtolower($terme);
  $select_terme = $bdd->prepare("SELECT id_cat,nom FROM categorie WHERE id_cat LIKE ? OR nom LIKE ?");
  $select_terme->execute(array("%".$terme."%", "%".$terme."%"));

 }
 else
 {
  $message = "Vous devez entrer votre requete dans la barre de recherche";
 }
}
else
{
  $select_terme = $bdd->prepare("SELECT * FROM categorie ");
  $select_terme->execute(array("%","%","%","%","%","%","%"));
 
}
?>















                                            <div class="col-md-6">
                            <div class="header-search">
                                <form action="recherchercategorie.php" method="GET">
                                    <select class="input-select">
                                        <!--<select class="input-select">
                                        <option value="0">All Categories</option>
                                        <option value="1">Category 01</option>
                                        <option value="1">Category 02</option>
                                    </select>-->
                                    <input class="input" placeholder="Search here" name="terme">
                                    <input type="submit" name="s" value="Search" class="search-btn">
                                </form>
                            </div>
                        </div>
<?PHP
$categorie1c=new categoriec();
$listecategories=$categorie1c->affichercategorie();
?>
 <thead>
    <?php while ($row = $result->fetch_assoc()): ?>
                                            <tr>
 
                                                <th>id_cat  </th>
                                                <th>nom</th>
                                                 
                                            
                                            </tr>
                                             
                                            <?php endwhile; ?>
                                        </thead>
                                        <?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
            
                <?php if ($page > 2): ?>
                <li class="prev"><a href="table_data_tables.php?page=<?php echo $page-1 ?>">Previous</a></li>
                <?php endif; ?>

                <?php if ($page > 3): ?>
                <li class="start"><a href="table_data_tables.php?page=1">1</a></li>
                <li class="dots">...</li>
                <?php endif; ?>

                <?php if ($page-1 > 0): ?><li class="page"><a href="table_data_tables.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
                <?php if ($page-1 > 0): ?><li class="page"><a href="table_data_tables.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

                <li class="currentpage"><a href="table_data_tables.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

                <?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="table_data_tables.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
                <?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="table_data_tables.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

                <?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
                <li class="dots">...</li>
                <li class="end"><a href="table_data_tables.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
                <?php endif; ?>
                 </div>
             </select>
         </form>
     </div>
<?PHP
foreach($listecategories as $row){
    $id_cat=$row['id_cat'];

    ?>

    <tr>
    <td><?PHP echo $row['id_cat'];?></td>  
    <td><?PHP echo $row['nom']; ?></td>
      


                                       
                                         <?PHP
}
?>

                                      
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
        <!-- DATATABLES-->
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.colVis.js"></script>
        <script src="js/dataTables.bootstrap.js"></script>
        <script src="js/demo-datatable.js"></script>
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
    </ul>
    <?php endif; ?>
    </body>

<!-- Mirrored from html.designstream.co.in/pink-desh/dark/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:41:45 GMT -->
</html>
<?php
    $stmt->close();

}
?>
