<?php
//if(isset( $_POST['name']))
/*$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];


$content="From: $name";
$recipient = "mohammad.niroujazi1390@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";*/
?>

<?php
if(isset( $_POST['name']))
$name = $_POST['name'];


if(isset( $_POST['email']))
$email = $_POST['email'];

if(isset( $_POST['phonenumber']))
$phonenumber = $_POST['phonenumber'];

if(isset( $_POST['message']))
$message = $_POST['message'];



if(isset( $_POST['email-sub']))
$emailsub = $_POST['email-sub'];

if(isset( $_POST['contact-pref']))
$contactpref = $_POST['contact-pref'];

if(isset( $_POST['contact-pref1']))
$contactpref1 = $_POST['contact-pref1'];

if(isset( $_POST['county']))
$county = $_POST['county'];

if(!$name  or !$email or !$phonenumber or !$message or !$county){
    echo"Error: Please fill all the fields\n";

} else{

$content=$name."\n".$email."\n".$phonenumber."\n".$message."\n".$emailsub."\n".$contactpref."\n"."\n".$contactpref1."\n".$county;
$recipient = "m.niroujazi@gmail.com";
$subject = "Contact us Form: $name";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
header( "location://osiris.ubishops.ca/mnirou/confirmation.html");
}
?>