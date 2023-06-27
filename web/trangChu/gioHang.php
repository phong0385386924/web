<?php
      require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thanh toán</title>
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
            <div class="row">
              <div class="col-sm-4">
        <?php
        try {
          if (isset($_GET['spid'])) {
            $id=$_GET['spid'];
           $sql = "SELECT * FROM `sanph1` WHERE sanPh_id = $id";
            $result = mysqli_query($conn,$sql);
              
            while ( $row = mysqli_fetch_assoc($result)) {                              

                $name=$row['name'];
                $gia=$row['gia'];
                $img=$row['img'];
                $soluong=$row['soluong'];
                echo '
                <img src="image/'.$img.'" style="width:70%; height:70%">
              </div>
              <div class="col-sm-8">
                <p class="td"  style="font-size: 25px;"><b>'.$name.'</b></p>
            <p style="color: red">GIÁ:<strike >32.000.000<sup>đ</sup></strike></p>   <p>GIÁ KHUYẾN MÃI:'.$gia.'<sup>đ</sup></p>
                              
                ';
            }
            if(isset($_POST['thanhtoan'])){
              $hoten = $_POST['hoten'];
              $sdt=$_POST['sdt'];
              $soluongDat=$_POST['soluongdat'];
              $tinh=$_POST['tinh'];
              $huyen=$_POST['huyen'];
              $xa=$_POST['xa'];
              $sonha=$_POST['sonha'];
           
              $insert = "INSERT INTO `donhang1`(`id`,`tenMay`, `soLuong`, `img`, `hoTen`, `sdt`, `tinh`, `huyen`, `xa`, `sonha`) VALUES
               ('$id','$name','$soluongDat','$img','$hoten','$sdt','$tinh','$huyen','$xa','$sonha')";
               mysqli_query($conn, $insert);
               header('location:gioHang1.php');
              }
          }; 
        } catch (\Throwable $th) {
        }               
        ?>
         </div>
              </div>
            </div>
        </div>          
    </form>
    <br>
    <form method="POST"   action="">
<div class="container">
  <div class="row">
    <div class="col-sm-3">

    </div>
    <div id="cot6Thanhtoan" class="col-sm-6">
      <div class="td">
        <br>
       </div>
         <h4>Thông tin khách hàng </h4>
        <div><br>
      <div id="ttkh" class="col-sm-12">
           <div class="row">
             <div class="col-sm-4">
               <label for="fname">Họ Và Tên:</label>
             </div>
             <div class="col-sm-8 form-group">
               <input class="form-control" name="hoten" placeholder="nhập họ và tên">
             </div>
                   <div class="col-sm-4">
               <label for="fname">Số Điện Thoại:</label>
             </div>
             <div class="col-sm-8 form-group">
               <input class="form-control"  name="sdt" placeholder="nhập số điện thoại">
             </div>
            
                 <div class="col-sm-4">
                 <label for="cars">Số Lượng</label>
             </div>
             <div class="col-sm-8 form-group">
             <input type="number"  name="soluongdat" min="1" max="99">
             </div>

           </div>
         </div>
       </div>     
     <hr>
       <div class="td">
         <h4>Địa chỉ giao hàng</h4>
        </div>
        <div class="container">
          <div class="adress">
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-4">
                  <label for="fname">Tỉnh:</label>
                </div>
                <div class="col-sm-8 form-group">
                  <input class="form-control" placeholder="nhập tỉnh:" name="tinh">
                </div>
                      <div class="col-sm-4">
                  <label for="fname">Huyện:</label>
                </div>
                <div class="col-sm-8 form-group">
                  <input class="form-control" placeholder="nhập huyện" name="huyen">
                </div>
                        <div class="col-sm-4">
                  <label for="fname">Xã:</label>
                </div>
                
                <div class="col-sm-8 form-group">
                  <input class="form-control" placeholder="nhập xã:" name="xa">
                </div>
                <div class="col-sm-4">
                  <label for="fname">Địa chỉ cụ thể/số nhà:</label>
                </div>
                <div class="col-sm-8 form-group">
                  <input class="form-control"  placeholder="nhập số nhà(nếu có)" name="sonha">
                </div>
              </div>             
            </div>
          </div>
        </div>
        <br>
        <center><button name="thanhtoan" class="btn btn-success">Thanh toán</button></center>
        <br>
    </div>
    <div class="col-sm-3">
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