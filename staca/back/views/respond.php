<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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

include "../core/reclamationC.php";
    $a2=new reclamationC();

    $liste=$a2->afficherreclamation();

?>


    <body class="fixed-left">
        <?php

if (isset($_GET['id'])){
    $reclamationC=new reclamationC();
    $result=$reclamationC->recupererreclamation($_GET['id']);
    foreach($result as $row){
        $email=$row['email'];
        $id=$row['id'];
        $objet=$row['objet'];
        $message=$row['message'];
        
         ?>
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
                <ul class="metismenu" id="menu">
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
                    <li>
                        <a href="#"><i class="fa fa-table"></i> <span>Product</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="table_basic.html">Products</a></li>
                            <li><a href="table_data_tables.html">Delivery</a></li>
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
                                        <li class="">
                                                <a href="empty_page.html"><i class="fa fa-truck"></i> <span>Shipping</span><span class="fa arrow"></span></a>

                                                <ul class="nav nav-second-level collapse">
                            <li><a href="reclamation.php">Delivery</a></li>
                            <li><a href="livreur.php">Delivery_Man</a></li>
                           
                        </ul>
                    </li>
                             <li class="active">
                                                <a href="reclamation.php"><i class="fas fa-ban"></i> <span>Reclamation</span><span></span></a>

                       
                    </li>
                    </li>
                </ul>

        

          
            </div>
            <!--left menu end-->
            <div class="content-page  equal-height">
                <div class="content">
                    <div class="container">
                        <div class="page-title">
                            <h3>Delivery</h3>
                            <a href="ajouterreclamation.php"><i class="fa fa-plus"></i> Add Delivery</a>
          
                        </div><!--end page title-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel-box">
                                    <div class="table-responsive">
                                                    

                                          <table id="basic-datatables" class="table" cellspacing="0" width="100%">
                                              <thead>
                                            <tr>
                                                      <th>Email</th>
                                                <th>ID</th>
                                                <th>Object</th>
                                            

                                            
                                                <th>Action</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               <th>Email</th>
                                                <th>ID</th>
                                                <th>Object</th>
                                                 
                                            
                                                <th>Action</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                         
                                                                                    <?php foreach ($liste as $row) 
{
?>
                                            <tr>

                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['objet']; ?></td>
                                                
                                               
                                                    <td><button disabled> <a href="read.php?id=<?PHP echo $row['id']; ?>" style="float:left; color: #7b777a; ">Read  </a></button>
                                                  <button disabled><a href="respond.php?id=<?PHP echo $row['id']; ?>" style="float:left; color: #7b777a; "> Respond</a></td></button>
                                                                          <td>   <form method="POST" action="supprimerreclamation.php">

 <button type="submit" name="supprimer" style="float:left;">Delete</button>
                                                 <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                             </form>

                                           <?php } ?>
                                       
                                     
                                  </td>
                              </tr>
                          </table>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div><!--content-->     
                    <div>
                        <!-- houuunii -->

    <form method="post">






  <div class="col-md-9 compose_form">
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="To:" readonly="" value="<?PHP echo $row['email']; ?>" >
                                </div>
                              
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="objet" placeholder="Subject:">
                                </div>
                                <div class="form-group">
                                    <textarea id="wysiwyg" placeholder="Your message here..." class="form-control" rows="20" name="message" ></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-theme btn-lg" name="send">Send</button>    
                                </div>
                            </form>
                        </div>







</form>

                    </div>          
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
                        <button type="button" class=" btn btn-theme btn-lg" name="send">Send</button>
                        <td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>

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
        <?php } }
?>



    </body>

<?php
/*
//ini_set("SMTP", "smtp.gmail.com");
$to       = 'samibelhajhassine@hotmail.fr';
$subject  = 'Testing sendmail.exe';
$message  = 'Hi, you just received an email using sendmail!';
$headers  = 'From: sami.belhajhassine@esprit.tn' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";*/


    /////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////
    
       if(isset($_POST['send'])) {
            require '../send/PHPMailerAutoload.php';
            require '../send/credential.php';

            $mail = new PHPMailer;

            //$mail->SMTPDebug = 4;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = EMAIL;                 // SMTP username
            $mail->Password = PASS;                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom(EMAIL, 'STACA');
            $mail->addAddress('samibelhajhassine@hotmail.fr');     // Add a recipient

            $mail->addReplyTo(EMAIL);
            // print_r($_FILES['file']); exit;
            /*for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
                $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
            }*/
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = $_POST['objet'];
            $mail->Body    = $_POST['message'];

            

            $mail->AltBody = ' thanks for ordering &transaction id=';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo ' </br> commande confirmation Message has been sent </br>';
            }
        
}

    ///////////////////////////////////////////////////////
?>

<!-- Mirrored from html.designstream.co.in/pink-desh/dark/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 01:41:45 GMT -->
</html>