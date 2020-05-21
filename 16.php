
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jquery use json data</title>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="ajax.js" ></script>
</head>

<body onload="Add();"><?php session_start(); ?>
<html lang="en">
<head>
  <title>หน้าหลัก</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>
    @import url('https://fonts.googleapis.com/css?family=Kanit');
    *,h4,h1,h2,h3,h5,h6{
      font-family: 'Kanit', sans-serif;
    }
    </style>

</head>



<body>
  <style>
   body{
     background-color:#FFEFD5;
     font color:#FFA07A;
   }
  </style>
 
 <div class="container-fluid" style="background-image: url(/project_aran/img/2.gif), url(/project_aran/img/22.jpg);color:#fff;height:300px;">

  <center>



  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

   
  <h1>ระบบจองคิวทำใบขับขี่ออนไลน์</h1>
  <h3></h3>
  <p></p>
  <p><strong></strong></p
    </center>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <ul class="nav navbar-nav">
      <li><a href="nvabar.php">หน้าหลัก</a></li>

      
      <li><a href="16.php">จองคิวออนใลน์</a></li>

      <li class=""><a class="" data-toggle="" href="show_co.php">ประวัติการจอง</a>
      <li><a href="logout.php">ออกจากระบบ</a></li>
      <li>
      </li>
    </ul>
  </div>
</nav>
<center>
<form action="chk_addC.php" method="post" enctype="multipart/form-data">
<div class="dropdown">

<select name="booking">
      <option >รอบที่จอง</option>
      <option >รอบเช้า</option>
      <option >รอบบ่าย</option>
     
</select>


<select name="category">
      <option >เลือก ประเภท</option>
      <option >ชำระภาษี</option>
      <option >ขอรับใบอนุญาติสอบใหม่</option>
      <option >ใบอนุญาติขับรถระหว่างประเทศ</option>
      <option >ต่ออายุใบอนุญาติ(5ปีเป็น5ปี)</option>  
      

     
</select>
<input type="text" name="province" placeholder="จังหวัด">


<input name="dd_yyyy" type="date">
<p>
  <p>
    <p>

</div>
<input class="btn btn-success" type="submit" value="บันทึกข้อมูล">
</form>
</center>
</P>
</body>
</html>