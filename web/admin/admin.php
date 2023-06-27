<?php
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class = "panel-heading">
            <center><h2>ADMIN</h2></center>
            </div>
            <div class="panel-body">
            
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th style="text-align: center;">Ảnh</th>
                            <th>Số lượng</th>
                            <th> <button type="button" class="btn btn-primary"><a style="color: #fff;" href="them.php">Thêm sản phẩm</a></button></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        try {
                            $sql = "select * from `sanph1`";
                            $result = mysqli_query($conn,$sql);
                            if (!$result) {
                               die("invalid query!");
                            } 
                            while ( $row = mysqli_fetch_assoc($result)) {                              
                                $id=$row['sanPh_id'];
                                $name=$row['name'];
                                $gia=$row['gia'];
                                $img=$row['img'];
                                $soluong=$row['soluong'];
                                echo '
                                <tr>
                                    <th scope="row" >'.$id.'</th>
                                    <td>'.$name.'</td>
                                    <td>'.$gia.'</td>
                                    <td style="width:40%; text-align: center; "><img style="height: 20%; width: 20%;" src="image/'.$img.'"></td>   
                                    <td>'.$soluong.'</td>
                                    <td>
                                    <button class="btn btn-success" ><a style="color: #fff;" href="sua.php?updateid='.$id.'">Edit</a></button>
                                    <button class="btn btn-danger" ><a style="color: #fff;" href="xoa.php?deleteid='.$id.'">Delete</a></button>
                                    </td>
                                </tr>
                                ';
                            }
                        } catch (\Throwable $th) {
                        }               
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <hr style="height:3px;border:none;color:#333;background-color:#333;" /><br>
        <br>
        <center><h4>Đơn Hàng</h4></center>
        <br>
        <table class="table table-bordered">
                <thead>
                       <tr>
                            <th>Thiết bị</th>
                            <th>Số lượng</th>
                            <th style="text-align: center;">Ảnh</th>
                            <th>Họ và tên</th>
                            <th>SDT</th>
                            <th>Tỉnh</th>
                            <th>Huyện</th>
                            <th>Xã</th>
                            <th>Số nhà(nếu có)</th>
                            <th>Trạng thái</th>
                            <th>Hủy đơn</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        try {
                            $sql = "SELECT * FROM `donhang1`";
                            $result = mysqli_query($conn,$sql);
                            
                            while ( $row = mysqli_fetch_assoc($result)) {  
                                $iddh=$row['id'];                            
                                $tenmay=$row['tenMay'];
                                $soluong=$row['soLuong'];                               
                                $img=$row['img'];
                                $hoten=$row['hoTen'];
                                $sdt=$row['sdt'];
                                $tinh=$row['tinh'];
                                $huyen=$row['huyen'];
                                $xa=$row['xa'];
                                $sonha=$row['sonha'];
                                $trangthai=$row['trangthaigiao'];
                                echo '
                                <tr>
                                    <td>'.$tenmay.'</td>
                                    <td>'.$soluong.'</td>
                                    <td style="width:40%; text-align: center; "><img style="height: 20%; width: 20%;" src="image/'.$img.'"></td>   
                                    <td>'.$hoten.'</td>
                                    <td>'.$sdt.'</td>
                                    <td>'.$tinh.'</td>
                                    <td>'.$huyen.'</td>
                                    <td>'.$xa.'</td>
                                    <td>'.$sonha.'</td>
                                    <td>'.$trangthai.'</td>
                                    <td>
                                    <button class="btn btn-success" ><a style="color: #fff;" href="xacNhan.php?xacnhanid='.$iddh.'">Xác nhận đơn hàng</a></button>
                                    </td>
                                </tr>
                                ';
                            }
                        } catch (\Throwable $th) {
                        }               
                        ?>
                    </tbody>
                </table>  
        <hr style="height:3px;border:none;color:#333;background-color:#333;" />
        <br>
        <a href="logout.php" class="btn btn-danger">Đăng xuất</a>
    </div>
   
</body>
</html>