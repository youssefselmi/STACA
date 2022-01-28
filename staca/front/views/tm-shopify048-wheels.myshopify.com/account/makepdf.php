<?php
session_start();

include "../../../entities/client.php";
include "../../../core/compteC.php";
require_once __DIR__ . '/vendor/autoload.php';

$id_c=$_SESSION['id_session'];
$nom_c=$_SESSION['nom_session'];
$prenom_c= $_SESSION['prenom_session'];
$telephone_c=$_SESSION['telephone_session'];
$email_c=$_SESSION['email_session'];
$adr_c=$_SESSION['adr'];
$postal_c=$_SESSION['postal'];
$city_c=$_SESSION['city'];
 
//create new PDF instance
$mpdf = new \Mpdf\Mpdf();

//create our PDF
$data = '';
$data.='<h1>Your Details </h1>';

//add data
$data.='<strong> ID : </strong>' . $id_c . '<br/>';
$data.='<strong> First Name : </strong>' . $nom_c . '<br/>';
$data.='<strong> Last Name : </strong>' . $prenom_c . '<br/>';
$data.='<strong> Phone : </strong>' . $telephone_c . '<br/>';
$data.='<strong> Email Adress : </strong>' . $email_c . '<br/>';
$data.='<strong> Adress : </strong>' . $adr_c . '<br/>';
$data.='<strong> Postal code : </strong>' . $postal_c . '<br/>';
$data.='<strong> City : </strong>' . $city_c . '<br/>';

// write PDF
$mpdf->WriteHTML($data);
 //output to browser
 $mpdf->Output('mypdf.pdf','D');
 ?>