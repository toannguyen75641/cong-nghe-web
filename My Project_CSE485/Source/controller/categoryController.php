<?php
	require_once "model/category.php";

	class categoryController 
	{		
		public function trangChu() {
			$c = new Category();
			$list = $c->trangChu();
			include "view/docgia/chitietloaitin.php";
		}

		public function chiTietLoaiTin() {
			$c = new Category();
			$list = $c->chiTietLoaiTin();
			include "view/docgia/chitietloaitin.php";
		}

		public function chiTietTin() {
			$c = new Category();
			$list = $c->chitiettin();
			include "view/docgia/chitiettin.php";
		}

		public function getAll() {
			$c = new Category();
			$list = $c->getAll();
			include "view/admin/list.php";
		}

		public function themBV() {
			include "view/admin/them.php";
		}

		public function luuBV() {
			$data = $_POST;
			if(!$data['tieude'] || !$data['tomtat'] || !$data['noidung'] || !$data['hinhanh'] || !$data['danhmuc']) {
				echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
				exit(); 			
   			} else {
   				$c = new Category();
				$c->themBV($data);
				echo "<script>
		          alert('Thêm bài viết thành công');
		          window.location.href='http://localhost:8888/BTL/trangchu.php?action=list';
		          </script>";
				exit();
   			}
		}

		public function xoaBV($id) {
			$c = new Category();
			$c->xoaBV($id);
			header("location: http://localhost:8888/BTL/trangchu.php?action=list");
			exit();
		}

		public function suaBV($id) {
			$c = new Category();
			$cate = $c->suaBV($id);
			include "view/admin/sua.php";
		}

		public function capnhatBV($id) {
			$data = $_POST;
			if(!$data['tieude'] || !$data['tomtat'] || !$data['noidung'] || !$data['hinhanh'] || !$data['danhmuc']) {
				echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        		exit();
   			} else {
				$c = new Category();
				$cate = $c->capnhatBV($id, $data);
				echo "<script>
		          alert('Sửa bài viết thành công');
		          window.location.href='http://localhost:8888/BTL/trangchu.php?action=list';
		          </script>";
				exit();
			}
		}

		public function dangky() {
			include "view/admin/dangky.php";
		}

		public function luuTK() {
			$data = $_POST;
			$data['password1'] = md5($data['password1']);
			if(!$data['name'] || !$data['email'] || !$data['password1']) {
				echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        		exit();
   			} else {
   				$c = new Category();
				$c->themTK($data);
				echo "<script>
		          alert('Đăng ký tài khoản thành công');
		          window.location.href='http://localhost:8888/BTL/trangchu.php';
		          </script>";
				exit();
   			}
		}
		public function dangnhap() {
			include "view/admin/dangnhap.php";
		}
	}
	
?>
