<?php 
session_start();
$adress=$_POST['adress'];
$tel=$_POST['telephone'];
$email=$_POST['email'];

$_SESSION['ad']=$adress;
$_SESSION['tl']=$tel;
$_SESSION['em']=$email;


$host='localhost';
$user2='root';
$pass='';
$db='staca';
$occ=0;
$prix=0;
$prixtot=0;
$nb=rand(100,900);
$co = new PDO("mysql:host=$host;dbname=$db",$user2,$pass);
$sql=" SELECT * FROM panier";
$query=$co->prepare($sql);
$query->execute();
$message='Vous avez commander  ';
while($data=$query->fetch())
{
$lol=$data['nomprod'];

$occ=$occ+$data['quantite'];
$prix=$data['quantite']*$data['prixtotale'];
$prixtot=$prixtot+$prix;
$date=date("Y/m/d");
$nb=rand(100000,999999);
$holy=" INSERT INTO commande (idc,adresse,email,telephone,nomproduit,Datecommande,prix) values ('$nb','$adress','$email','$tel','$lol','$date','$prix') ";
$query1=$co->prepare($holy);
$query1=$co->query($holy);


}


            require '../../send/PHPMailerAutoload.php';
            require '../../send/credential.php';

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

            $mail->Subject = 'Commande';
            $mail->Body    = 'Merci pour votre commande !! Dont le prix est  '.$prixtot.'  TND'.'Merci pour votre achat !';
            

            $mail->AltBody = ' thanks for ordering &transaction id=';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo ' </br> commande confirmation Message has been sent </br>';
            }
 
 header('location:cart2.php');

?>