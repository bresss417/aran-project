<?php

    include "conf.php";

    $sql = "SELECT * FROM cafe";
    $query = mysqli_query($conn, $sql);
   
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=cetial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ร้าน Cafe</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./login.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap/style.css">
</head>
<body>

        <div class="card">
            <div class="card-footer">
                <h1>ร้าน  Cafe</h1>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr class="text-center">
                            <th width="20%">ชื่อ</th>
                            <th scope="col" width="70%">ที่อยู่</th>
                            <th width="10%">เบอร์โทร</th>
                            <th  scope="col">เมนู</th>
                            <th  scope="col">โลโก้</th>
                            <th  scope="col">รุปภาพ1</th>
                            <th  scope="col">รุปภาพ2</th>
                            <th  scope="col">รุปภาพ3</th>
                            <th  scope="col">รุปภาพ4</th>
                            <th colspan="2">ACTION</th>
                            
                        </tr>
                        <?php
                            while($result = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td>
                                <?php echo $result['name']; ?>
                            </td>
                            <td>
                                <?php echo $result['address']; ?>
                            </td>
                            <td>
                                <?php echo $result['phone']; ?>
                            </td>
                            <td>
                                <?php echo $result['menu']; ?>
                            </td>
                            <td>
                                <?php echo $result['image']; ?>
                            </td>
                            <td>
                                <?php echo $result['photo']; ?>
                            </td>
                            <td>
                                <?php echo $result['photo1']; ?>
                            </td>
                            <td>
                                <?php echo $result['photo2']; ?>
                            </td>
                            <td>
                                <?php echo $result['photo3']; ?>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="edit_dataC.php?id=<?php echo $result["id"];?>">
                                    แก้ไข
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='del_dataC.php?id=<?php echo $result["id"];?>';}">
                                    ลบ
                                </a>
                            </td>
                        </tr>
                        <?php 
                            }
                        ?>
                        </tbody>
     
                    </table> 
                    <a class="btn btn-success" href="home.php">กลับ</a> 
                </div>
                
            </div>
        </div>
    </div>


    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>

</body>
</html>

