<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  <li><a href="http://localhost:8888/BTL/trangchu.php?action=them&method=tk"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
  <li><a href="http://localhost:8888/BTL/trangchu.php?action=dangnhap"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
</ul> 
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <?php if(isset($list)) { ?>
        <?php foreach($list as $item) { ?>
          <h2><?php echo $item['tieu_de']; ?></h2>
          <h5><?php echo $item['ngay_dang']; ?></h5></br>
          <p><?php echo $item['tom_tat']; ?></p>
          <div class="fakeimg" style="height: 387px; width: 52%; background-color: white">
            <img src=<?php echo $item['hinh_anh']; ?>></div>
            <p>(Flash News)</p>
            <p><?php echo $item['noi_dung']; ?></p>
        <?php } ?>
      <?php } ?>
    </div>
        <!-- <a href="#">Tin liên quan</a>
        <a href="#">Tin liên quan</a>
        <a href="#">Tin liên quan</a> -->
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Thăm dò ý kiến</h2>
      <p>Bạn có đồng tình với việc bỏ tập tục đốt vàng mã?</p>
      <form>
        <input type="radio" name=”radio” value=”Y” />Có<br />
        <input type="radio" name=”radio” value=”N” />Không<br />
        <input type="radio" name=”radio” value=”O” />Không quan tâm<br />
        <textarea name="message" rows="5" cols="30" placeholder="Ý kiến của bạn về việc này."></textarea>
  <br>
  <input type="submit">
        </form>
     <!--  <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p> -->
    </div>
    <div class="card">
      <h3>Bài viết phổ biến</h3>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
    </div>
    <div class="card">
      <h3>Phản hồi đến ban quản trị</h3>
      <form>
        <textarea name="report" rows="5,5" cols="30"></textarea>
        <br>
        <input type="submit">
      </form>
    </div>
  </div>
</div>
</div>
<?php
  include "footer.php";
?>


</body>
</html>
