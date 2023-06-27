<?php
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
try {
    if (isset($_GET['idhuy'])) {
        $id=$_GET['idhuy'];
        $sql= "DELETE FROM `donhang1` WHERE id = $id";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            header('location:gioHang1.php');

        }else {
            die(mysqli_error($conn));
        }
    }
} catch (\Throwable $th) {
    //throw $th;
}
?>