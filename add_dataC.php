<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เพิ่มข้อมูล</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./login.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap/style.css">
</head>
<body>
    <div ><br><br>
        <div class="card">
            <div class="card-footer">
                <div class="table-responsive">
                <form action="chk_addC.php" method="post" enctype="multipart/form-data">
                        <h1>เพิ่มข้อมูล</h1>
                        <table class="table table-hover">
                            <tr>
                                <td><input type="text" name="name" placeholder="ชื่อร้าน"></td>
                                <td><input type="text" name="address" placeholder="ที่อยู่"></td>
                                <td> <input type="text" name="phone" placeholder="เบอร์โทร"></td>
                                <td> <input type="text" name="menu" placeholder="เมนู"></td>
                            </tr>
                            <tr>
                                <td> <input type="file" name="image" placeholder="รูปภาพ"></td>
                                <td> <input type="file" name="photo" placeholder="รูปภาพ"></td>
                                <td><input type="file" name="photo1" placeholder="รูปภาพ"></td>
                            </tr>
                            <tr>
                                <td><input type="file" name="photo2" placeholder="รูปภาพ"></td>
                                <td><input type="file" name="photo3" placeholder="รูปภาพ"></td>
                            </tr>
                        </table>
                        
                        <input class="btn btn-success" type="submit" value="บันทึกข้อมูล">&nbsp;<a class="btn btn-success" href="menu.php">กลับ</a> 
                    </form>
                </div>
            </div>
        </div>
    </div>

    
   


    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
</body>
</html>