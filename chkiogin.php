<?php

     header("Access-Control-Allow-Origin: *");
     header("Content-Type: application/json; charset=UTF-8");
    
     $h = 'localhost';
     $u = 'root';
     $p = '';
     $db = 'users';

     $conn = new mysqli($h,$u,$p,$db);
     if($conn->connect_error){
         die("connect error" .$conn->connect_error);
     }
/*
     
*/
     $email = $_POST['email'];
     $password = $_POST['password'];

     $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password' ";
     $result = mysqli_query($conn,$sql);
     $numrow = mysqli_num_rows($result);

     if($numrow == 1){
         header("Refresh:1; url=navbar.php");
        
         //mysqli_close($conn);
     }else{
         echo "login fales";
         header("Refresh:3; url=login.php");
     }

?>