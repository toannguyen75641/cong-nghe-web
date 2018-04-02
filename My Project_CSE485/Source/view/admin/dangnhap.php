<?php
  require_once "config/database.php";
  if(isset($_POST['btnDangNhap'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $query = "SELECT email, pass FROM thanhvien WHERE email = '$email' AND pass = '$pass'";
    $c = new Database();
    $rs = mysqli_query($c->conn, $query);
    $row = mysqli_num_rows($rs);
    if($row==1) {
     echo "<script>
          alert('Đăng nhập thành công');
          window.location.href='http://localhost:8888/BTL/trangchu.php?action=list';
          </script>";
    }
    else {
      echo "<script>
          alert('Đăng nhập không thành công. Tài khoản hoặc mật khẩu không đúng');
          window.location.href='http://localhost:8888/BTL/trangchu.php?action=dangnhap';
          </script>";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
  <style type="text/css">
    .header {
      padding: 30px;
      color: white;text-align:center; 
      background-image: url('http://3.bp.blogspot.com/-V5I9jtweBQA/UkVNAkCfPuI/AAAAAAAAVac/URMR0GYtZWA/s1600/tong-hop-cover-facebook+(29).jpg');
    }

    .footer {
    overflow: hidden;
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
    font-size: 10px;
  }

  .form-box {
    width:500px;
  }
</style>
</head>

<body>
  <div class="container">
<?php
include "header.php";
?>
<ul class="nav navbar-nav navbar-right">
  <li><a href="http://localhost:8888/BTL/trangchu.php?action=them&method=tk"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
</ul>
<h2>Đăng nhập</h2>
  <form class="form-box" action="http://localhost:8888/BTL/trangchu.php?action=dangnhap" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
      <button type="submit" class="btn btn-default" name="btnDangNhap">Submit</button>
    </form>
  </div>

<?php
  include "footer.php";
?>
</body> 
</html>
