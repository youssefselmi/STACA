


<?php 
$to = "somebody@example.com";
$subject = "STACA";


$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

$message=

mail($to,$subject,$message,$headers);
 ?>