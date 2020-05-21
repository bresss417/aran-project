<?php

    include "conf.php";

    $txtking  = mysqli_real_escape_string($conn, $_POST['booking']);
    $txtcat= mysqli_real_escape_string($conn, $_POST['category']);
    $txtpro = mysqli_real_escape_string($conn, $_POST['province']);
    $txtdd = mysqli_real_escape_string($conn, $_POST['dd_yyyy']);

    $sql = "INSERT INTO reservations (booking,category, province, dd_yyyy)
    VALUES('$txtking','$txtcat','$txtpro','$txtdd')";
$query = mysqli_query($conn, $sql);


    if(!$query){
        echo "<h1 style='color: red;'>ไม่สามารถเพิ่มข้อมูลได้</h1>";
        echo "<meta http-equiv='refresh' content='3; url=16.php'>";
    }else{
        echo "<h1 style='color: green;'>เพิ่มการจองแล้วกรุณารอสักครู่...</h1>";
        echo "<meta http-equiv='refresh' content='3; url=show_co.php'>";
    }

?>