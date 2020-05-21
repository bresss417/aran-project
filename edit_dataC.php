<?php

    include "conf.php";

    $txtID = $_GET["id"];
    $sql = "SELECT * FROM cafe WHERE id = '".$txtID."' ";
    $query = mysqli_query($conn,$sql);
    $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>แก้ไขข้อมูล</title>
</head>
<body>

    <form action="chk_editC.php" method="post">
        
        <h1>แก้ไขข้อมูล</h1>
        
        <input type="hidden"    name="id"           value="<?php echo $result["id"];?>">
        <input type="text"      name="name"         placeholder="ชื่อสถานที่"   value="<?php echo $result["name"];?>">
        <input type="text"      name="address"   placeholder="ข้อมูล/ที่มา"  value="<?php echo $result["address"];?>">
        <input type="text"      name="phone"   placeholder="ข้อมูล/ที่มา"  value="<?php echo $result["phone"];?>">
        <input type="text"      name="menu"          placeholder="รูปภาพ"     value="<?php echo $result["menu"];?>">
        <input type="text"      name="image"         placeholder="รูปภาพ"     value="<?php echo $result["image"];?>">
        <input type="text"      name="photo"         placeholder="รูปภาพ"     value="<?php echo $result["photo"];?>">
        <input type="text"      name="photo1"          placeholder="เส้นทาง"    value="<?php echo $result["photo1"];?>">
        <input type="text"      name="photo2"         placeholder="รูปภาพ"     value="<?php echo $result["photo2"];?>">
        <input type="text"      name="photo3"          placeholder="เส้นทาง"    value="<?php echo $result["photo3"];?>">
        <input type="submit"    value="บันทึกข้อมูล">
    </form>
   
</body>
</html>