<?php 
$to_email ="smmunna703@gmail.com";
$subject = "Simple Mail using PHP";
$body = "Maybe It will work";
$header = "From: minhazulabedinmunna@gmail.com";
if(mail($to_email,$subject,$body,$header))
{
    echo'Email sent successfully to '.$to_email;
}
else{
    echo 'No mail sent..';
}
?>