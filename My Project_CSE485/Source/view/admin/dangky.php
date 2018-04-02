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
 </style>
</head>
<body>

<div class="container">
<?php
  include "header.php";
?>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="http://localhost:8888/BTL/trangchu.php?action=dangnhap"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
  </ul>
  <h2>Register</h2>
  <form action="http://localhost:8888/BTL/trangchu.php?action=luu&method=tk" method="POST">
    <div class="form-group">
       <label for="fullname">Họ tên:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
    </div>
     <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Mật khẩu:</label>
      <input type="password" class="form-control" id="password" name="password1" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-default" name="btnSubmit" id="btnDangky" value="Đăng ký">Đăng ký</button>
  </form>
</div>

<?php 
  include "footer.php";
?>

</body> 
</html>
