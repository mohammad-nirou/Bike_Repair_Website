<?php
if(isset( $_POST['name']))
$name = $_POST['name'];

if($name==6789){
    header( "location://osiris.ubishops.ca/mnirou/payment.html");
    
}else{
    //echo "invalid invoice number. please contact out customer service";
    header("location://osiris.ubishops.ca/mnirou/error.html");
}


?>