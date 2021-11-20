<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="software-engineering-project";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

//now check the connection

if(!$conn)
{
    die("Connection failed:" .mysqli_connect_error());

}

if(isset($_POST['save']))
{
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $username1=$_POST['username'];
    $pass=$_POST['password'];

    if(!$first_name  or !$last_name or !$email or !$username1 or !$pass){
        echo"Error: Please fill all the fields\n";
    
    } else{





    $sql_query = "INSERT INTO signup (first_name,last_name,email,username,pass) VALUES ('$first_name', '$last_name','$email', '$username1', '$pass')";

    if(mysqli_query($conn,$sql_query))
    {
        echo "New Sign-Up Was Done Successfully!";
        header( "location:signup-confirm.html");
    }
    else
    {
        echo "Error:" . "" . mysqli_error($conn); 
       }
       mysqli_close($conn);
    }

}




?>