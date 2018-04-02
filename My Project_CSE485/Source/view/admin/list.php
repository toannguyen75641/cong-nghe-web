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
  
  * {
    box-sizing: border-box;
	}

	.column {
	    float: left;
	    width: 50%;
	    padding: 10px;
	}

	.row:after {
	    content: "";
	    display: table;
	    clear: both;
	}

	.btn {
	    border: none;
	    outline: none;
	    padding: 12px 16px;
	    background-color: #f1f1f1;
	    cursor: pointer;
	}

	.btn:hover {
	    background-color: #ddd;
	}

	.btn.active {
	    background-color: #666;
	    color: white;
	}
	.btnFooter{
			float: left;
	}
  </style>
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
 
 <h2>Danh sách bài viết</h2>

	</br>

	<div class="row">
	  <table border="1">
	  	<tr>
	        <th>Bài viết số</th>
	        <th>Tiêu đề</th>
	        <th>Danh mục</th>
	        <th>Hành động</th>
    	</tr>
    	<?php if(isset($list)) { ?>
	        <?php foreach ($list as $item) { ?>
	            <tr style="text-align: center;">
	                <td><?php echo $item['id']; ?></td>
	                <td><?php echo $item['tieu_de'];?></td>
	                <td><?php echo $item['id_dm'];?></td>
	                <td>
	                    <a href="http://localhost:8888/BTL/trangchu.php?action=sua&id=<?php echo $item['id'];?>">Edit</a>
	                    |
	                    <a href="http://localhost:8888/BTL/trangchu.php?action=xoa&id=<?php echo $item['id'];?>" onclick="return confirm('Ban chac chan muon xoa?');">Delete</a>
	                </td>
	            </tr>
	        <?php } ?>
	    <?php } ?>
	  </table>
	</div>	
<?php
  include "footer.php";
?>

</body> 
</html>
