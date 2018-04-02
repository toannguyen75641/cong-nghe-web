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
  }</style>
</head>
<body>

<div class="container">
<?php
  include "header.php";
?>
	<div class="col-md-3 sidebar">
	    <ul class="list-group"> 
	        <a class="list-group-item" href="http://localhost:8888/BTL/trangchu.php?action=them&method=bv">
	            <span class="glyphicon glyphicon-dashboard"></span> Bảng điều khiển
	        </a>
	        <a class="list-group-item" href="http://localhost:8888/BTL/trangchu.php?action=hscn">
	            <span class="glyphicon glyphicon-user"></span> Hồ sơ cá nhân
	        </a>
	        <a class="list-group-item" href="http://localhost:8888/BTL/trangchu.php?action=list">
	            <span class="glyphicon glyphicon-edit"></span> Bài viết
	        </a>
	        <a class="list-group-item" href="http://localhost:8888/BTL/trangchu.php?action=dangnhap">
	            <span class="glyphicon glyphicon-off"></span> Thoát
	        </a>
	    </ul>
	</div>
	

	
	
<?php
  include "footer.php";
?>

</body> 
</html>
