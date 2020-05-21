<?php

    include "conf.php";

    $sql = "SELECT * FROM data_user";
    $query = mysqli_query($conn, $sql);
   
    
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=cetial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ข้อมูลลูกค้า</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

        <div class="card">
            <div class="card-body">
                <h1>ข้อมูลลูกค้า</h1>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>   
                            <tr class="text-center">
                            <th  scope="col">หมายเลขห้อง</th>  
                            <th  scope="col">ชื่อ</th>
                            <th  scope="col">ที่อยู่</th>
                            <th  scope="col">เบอร์</th>
                            <th  scope="col">เช็คอิน</th>
                            <th  scope="col">เช็คเอาท์</th>
                            <th colspan="2">ACTION</th>

                            
                        </tr>
                        <?php
                            while($result = mysqli_fetch_array($query)){
                        ?>
                        <tr> 
                        <td>
                                <?php echo $result['id_room']; ?>
                            </td>
                            <td>
                                <?php echo $result['name']; ?>
                            </td>
                            <td>
                                <?php echo $result['address']; ?>
                            </td>
                            <td>
                                <?php echo $result['number']; ?>
                            </td>
                            <td>
                                <?php echo $result['check_in']; ?>
                            </td>
                            <td>
                                <?php echo $result['check_out']; ?>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="edit_dataB.php?id=<?php echo $result["id"];?>">
                                    แก้ไข
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='del_dataB.php?id=<?php echo $result["id"];?>';}">
                                    ลบ
                                </a>
                            </td>

                        </tr> 
                        <?php 
                            }
                        ?>
                        </tbody>
     
                    </table> 
                    <a class="btn btn-success" href="home1.php">กลับ</a> 
                </div>
                
            </div>
        </div>
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</body>
</html>

