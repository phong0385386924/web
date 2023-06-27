
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<body>
    <br><br><br><br>
<main>
    <form action="" method="post">
        <h1>ĐĂNG NHẬP</h1>
        <?php
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
    if (isset($_POST['uname'])) {
        $uname=$_POST['uname'];
        $pass=$_POST['pass']; 
        $sql = "SELECT * FROM `users1` WHERE us_name = '$uname' AND us_pass='$pass'";
        $result= mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    if (!$row) {
        echo '<div class="alert alert-danger">username or password error!</div>';
    }else {
        if ($row["typeuser"]=="user") {
            header("location:../trangChu/index.php");
         }else if ($row["typeuser"]=="admin") {
             header("location:admin.php");
         } 
    }
    }   
?>
<div class="row">
    <div class="col-xs-2 col-md-2"></div>
<div class="col-xs-8 col-md-8">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="uname" id="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="pass" id="password">
        </div>
        <section>
            <button style="border-radius: 5px; type="submit">Đăng nhập</button>
            <a href="register.php">Đăng ký</a>
        </section>
</div>
<div class="col-xs-2 col-md-2"></div>
</div>
    </form>
</main>
</body>
</html>