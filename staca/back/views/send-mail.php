<?php
$to       = 'sami.belhajhassine@esprit.tn';
$subject  = 'Testing sendmail.exe';
$message  = 'Hi, you just received an email using sendmail!';
$headers  = 'From: samibhh1998@gmail.com';
       
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
?>
