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
	<div class="col-md-3 sidebar" >
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
	
	<form action="http://localhost:8888/BTL/trangchu.php?action=luu&method=bv" method="post">
		<h2>Thêm bài viết</h2>
		<form class="form-box">
   		<div class="form-group" style="width: 70%;">
      		<label >Tiêu đề:</label>
      		<input type="text" class="form-control" style="width: 63%; height: 30px;" name="tieude" id="tieude" placeholder="Tiêu đề của bài viết">
    	</div>
    	<div class="form-group">
			<input type="file" name="hinhanh">
		</div>		
		<div class="form-group">
			<select name="danhmuc">
				<option>Chọn danh mục</option>
				<option value="1">Du lịch</option>
				<option value="2">Thế giới</option>
				<option value="3">Thể thao</option>
				<option value="4">Giáo dục</option>
				<option value="5">Pháp luật</option>
				<option value="6">Kinh doanh</option>
				<option value="7">Văn hóa</option>
				<option value="8">Giải trí</option>
				<option value="9">Sức khỏe</option>
				<option value="10">Công nghệ</option>
			</select>
		</div>
		<div class="form-group" >
	     	<label>Sơ lược bài viết:</label><br>
	      	<textarea name="tomtat" style="height:100px;width: 500px" placeholder="Sơ lược nội dung bài viết"></textarea>
	    </div>
	    <div class="form-group" >
	      	<label>Nội dung:</label><br>
	      	<textarea name="noidung" style="height:200px;width: 500px" placeholder="Nhập văn bản"></textarea>
	    </div>
	    <button type="submit" class="btn btn-default" style="margin-left: 25%;">Thêm bài viết</button>
	</form>
		
	
	
<?php
  include "footer.php";
?>
</div>

</body> 
</html>
