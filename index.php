<?php
 // Include loginserv for checking username and password
?>
<html>
<head>

<font color="FFFFFF">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>หน้าหลัก</title>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <body>



  <BODY background="img/7.jpg"></BODY>

  <div class="container">

    <div class="row">

       <center><h1>ระบบจองคิวทำใบขับขี่ออนไลน์</h1> </center>
      <div class="col-md-12">
        <br><br><br><br><br><br><br><br><br>

      <h3 align="center">เข้าสู่ระบบ </h3>
      <br>
       <form action="nvabar.php">
          <center>
                <div class="row">
                <label class="col-md-4" style="text-align:right">ชื่อผู้ใช้ </label>
                  <div class="col-md-4">
                  <input type="text"  name="email" class="form-control" required placeholder="username" />
                  </div>
                  </div>


                <div class="row">
                <br>
                <label class="col-md-4" style="text-align:right"> รหัสผ่าน </label>
                  <div class="col-md-4">
                       <input type="password" name="password" class="form-control" required placeholder="password" />
              </div>
                </div>


                <div class="row">
                <div class="col-md-4"> </div>
                <div class="col-md-4">
                 
              </div>
                  <div class="col-md-4"> </div>
                &nbsp; &nbsp; &nbsp; <br />
                <div class="col-md-12">
                <p align="center">


                
                <input type="submit" value ="เข้าสู่ระบบ" class="btn btn-primary btn-sm" id="btn">
                <button type="submit" class="btn btn-primary btn-sm" id="btn" value="cancle"> ยกเลิก </button>

                </p>
                </div>
                <br>
                <a href="./register.php.">สมัคสมาชิก</a>

              </form>
               </center>
</body>
</html>
