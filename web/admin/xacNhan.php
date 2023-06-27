
 <?php
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
if (isset($_GET['xacnhanid'])) {
     $id=$_GET['xacnhanid'];
        $sql = "UPDATE `donhang1` 
        SET `trangthaigiao`='Đã xác nhận' 
        WHERE id=$id";
        mysqli_query($conn, $sql);                 
        header('location:admin.php');
  };
?>