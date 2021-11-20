<?php

$host="linux.ubishops.ca";
$user="mnirou";
$pass="new@17:55";
$db="mnirou";
$con= pg_connect("host=$host dbname=$db user=$user password=$pass") or die("could not connect to the server\n");

if(!$con){
    echo"Error: unable to open database\n";

} else{
    $name=$_POST['username'];
    $password=$_POST['password'];

    $query = "INSERT INTO register (name, password) VALUES ('$name','$password')";
    $result=pg_query($con,$query);
    header("Location:index.html");
}

pg_close($con);
?>

