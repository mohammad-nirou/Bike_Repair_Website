<?php
 $user=$_POST['username'];
 $pass=$_POST['pass'];

 //database connection here
 if(!$user  or !$pass ){
    echo"Error: Please fill all the fields\n";

} else{


 
 $con = new mysqli("localhost", "root","", "software-engineering-project");

 if($con -> connect_error)
 {
     die("Failed to connect :" . $con -> connect_error);
 }else
 {
     $stmt = $con->prepare("select * from signup where username=?");
     $stmt->bind_param("s",$user);
     $stmt->execute();
     $stmt_result = $stmt->get_result();
     if($stmt_result->num_rows > 0)
     {
        $data = $stmt_result->fetch_assoc();
        if($data['pass'] === $pass){
            echo "<h2>Login Successfully</h2>";
            header( "location:signin-confirm.html");
        }else{
            echo "<h2>Invalid Email or Password1</h2>";

        }

     }else{
         echo "<h2>Invalid Email or Password2 </h2>";
     }
      
     

 }}



?>