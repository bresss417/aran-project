<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $database ="aran";

    $conn = mysqli_connect($server,$user,$pass,$database );
    mysqli_set_charset($conn, "utf8");

    if (!$conn){
         die("ไม่สามารถเชื่อมต่อได้" . mysql_conect_error());
    }

?>