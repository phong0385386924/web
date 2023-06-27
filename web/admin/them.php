<?php
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
if(isset($_POST['submit'])){
  $name=$_POST['name1'];
  $gia=$_POST['gia'];
  $img=$_POST['img'];
  $soluong=$_POST['soluong'];
      $insert = "INSERT INTO `sanph1`( `name`, `gia`, `img`, `soluong`) VALUES
       ('$name','$gia','$img','$soluong')";
      mysqli_query($conn, $insert);
      header('location:admin.php');
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container" style="padding-top:50px;">
    <h2 style="padding: 40px 40px 70px 450px;">Thêm Sản Phẩm</h2>
    <form method="post" action="" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
    <input type="text" class="form-control" name="name1" placeholder="Nhập tên sản phẩm">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Giá sản phẩm</label>
    <input type="text" class="form-control" name="gia" placeholder="Nhập giá sản phẩm">
    
    <div class="mb-3">
  <label for="formFile" class="form-label">Ảnh sản phẩm</label>
  <input class="form-control" type="file" name="img" >
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Số lượng</label>
    <input type="text" class="form-control" name="soluong" placeholder="Nhập số lượng sản phẩm">
    
  <br><br>
  <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
</form>
    </div>

</body>
</html>