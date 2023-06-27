<?php
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Điện thoại</title>
    <!-- <script src="//code.tidio.co/zeboamphee7kpin3fkjaec57il5fcyjn.js" async></script> -->
    <script src="//code.tidio.co/zeboamphee7kpin3fkjaec57il5fcyjn.js" async></script>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>


    <!-- menu ngang -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)"><img src="logoWeb.png" alt="" height="50px" width="200px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Trang chủ</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="gioHang1.php">Giỏ hàng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="danhGia.php">Đánh giá</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Mr.Phong-0320012004</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Bạn muốn tìm gì...?">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
      </nav>
  
<br><br>
      <form id="form1">
    
    
    <div id="dvContents" >
      <div class="container">

<!-- -------------- -->
      <?php
                        try {
                          if (isset($_GET['id'])) {
                            $id=$_GET['id'];
                            $sql = "SELECT * FROM `sanph1` WHERE sanPh_id = $id";
                            $result = mysqli_query($conn,$sql);
                            if (!$result) {
                               die("invalid query!");
                            } 
                            while ( $row = mysqli_fetch_assoc($result)) {                              
                                $id2=$row['sanPh_id'];
                                $name=$row['name'];
                                $gia=$row['gia'];
                                $img=$row['img'];
                                $soluong=$row['soluong'];
                                echo '
                          <div class="row">
                              <div class="col-sm-4">
                                <img src="image/'.$img.'"  style="width:70%; height:70%">
                              </div>
                              <div class="col-sm-8">
                                <p class="td"  style="font-size: 25px;"><b>'.$name.'</b></p>
                            <p style="color: red">GIÁ:<strike> 32.990.000<sup>đ</sup></strike></p> <p>GIÁ KHUYẾN MÃI:'.$gia.'<sup>đ</sup></p>
                                  <hr>
                              </div>
                            </div>
                            <center ><a class="btn btn-danger" name="mua" href="gioHang.php?spid='.$id.'">Mua Ngay</a></center>
                              ';
                            }}
                        } catch (\Throwable $th) {
                        }               
                        ?>
<!-- --------------------- -->

 
<hr>
<div class="row">
    <div class="col-sm-4">
        <h5>Cấu hình điện thoại</h5>
    </div>
    <div class="col-sm-3">
      <p>  
      Màn hình:<br>
      Hệ điều hành: <br>
      Camera sau:<br>
      Camera trước: <br>
      Chip:<br>
      RAM:<br>
      Dung lượng lưu trữ: <br>
      SIM:<br>
      Pin, Sạc:
    </p> 
    </div>
    <div class="col-sm-5">
      <p>
        OLED6.7"Super Retina XDR <br>
        IOS 16 <br>
        Chính 48 MP & Phụ 12 MP, 12 MP <br>
        12 MP <br>
        Apple A16 Bionic  <br>
        6 GB <br>
        128 GB <br>
        1 Nano SIM & 1 eSIM, Hỗ trợ 5G  <br>
        4323 mAh, 20 W <br>
      </p>
    </div>
</div>
  <br><br>
  </div>     
    </div>
   </div>        
    </div>
    </form>


<!-- footer -->
      <footer class="site-footer">
        <div class="container">
          <hr>
          <div class="row">
            <div class="col-xs-4 col-md-4">
              <h5>Thông tin và chính sách</h5>
              <ul id="phong2" class="footer-links">
                <li><a href="index.php">Tra thông tin bảo hành</a></li>
                <li><a href="index.php">Chính sách bảo hành</a></li>
                <li><a href="index.php">Tìm hiểu về mua trả góp</a></li>
                <li><a href="index.php">Phản hồi</a></li>
                <li><a href="index.php">Liên hệ hợp tác kinh doanh</a></li>
              </ul>
            </div>
    
            <div class="col-xs-5 col-md-5">
              <h5>Tổng đài hỗ trợ miễn phí</h5>
              <ul class="footer-links">
                <li>Gọi mua hàng : <b>1800.2030</b>(7h30-22h00)</li>
                <li>Gọi khiếu nại: <b>1800.2131</b>(8h00-21h30)</li>
                <li>Gọi bảo hành : <b>1800.2001</b>(7h30-21h30)</li>
              </ul>
            </div>
            <div class="col-xs-3 col-md-3">
              <h5>Kết nối với chúng tôi</h5>
              <ul class="card-footer">
                <li><a href="https://www.facebook.com/profile.php?id=100042451724218"><img style="height: 50px; width: 50px;" src="image/faceb.jpg" alt=""></a></li>
                <li><a href="https://www.instagram.com/phongnguyen8761/" ><img style="height: 40px; width: 40px;" src="image/insta.jpg" alt=""></a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
    </footer>
    <div class="mt-5 p-4 bg-dark text-white text-center">
      <p>© 2023. Công ty cổ phần Thế Giới Điện Tử. <br>
        Địa chỉ: Khu đô thị Đại học Đà Nẵng, 470 Đ.Trần Đại Nghĩa, P.Hòa Quý, Q. Ngũ Hành Sơn, TP Đà Nẵng. Điện thoại: 028 3343960. Email: cskh@tgdtpdt.com. Chịu trách nhiệm nội dung: Nguyễn Văn Phong.</p>
    </div>
</body>
</html>


