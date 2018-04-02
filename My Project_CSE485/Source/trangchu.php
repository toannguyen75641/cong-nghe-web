<link rel="stylesheet" type="text/css" href="css/css.css">
<?php
	require_once "controller/categoryController.php";

	$c = new categoryController();
	if (isset($_GET['action'])) {		
		if($_GET['action'] == "xem") {
			if (isset($_GET['id_dm'])) {
				if(is_numeric($_GET['id_dm'])) {
					$c->chiTietLoaiTin();
				}
				else echo "Không tìm thấy trang yêu cầu";
			}
			if (isset($_GET['id'])) {
				if(is_numeric($_GET['id'])) {
					$c->chiTietTin();
				}
				else echo "Không tìm thấy trang yêu cầu";
			}
		}

		if ($_GET['action'] == "them") {
			if (isset($_GET['method']) && $_GET['method'] == "tk") {
				$c->dangky();
			}
			else if (isset($_GET['method']) && $_GET['method'] == "bv") {
				$c->themBV();
			} 
		}

		if ($_GET['action'] == "luu") {
			if (isset($_GET['method']) && $_GET['method'] == "tk") {
				$c->luuTK();
			}
			else if (isset($_GET['method']) && $_GET['method'] == "bv") {
				$c->luuBV();
			} 
		}

		if($_GET['action'] == "hscn") {
			include "view/admin/profile.php";
		}

		if($_GET['action'] == "list") {
			$c->getAll();
		}

		if($_GET['action'] == "xoa") {
			if(isset($_GET['id']) && $_GET['id'] != "") {
				$c->xoaBV($_GET['id']);
			}
		}

		if($_GET['action'] == "sua") {
			if(isset($_GET['id']) && $_GET['id'] != "") {
				$c->suaBV($_GET['id']);
			}
		}

		if($_GET['action'] == "capnhat") {
			if(isset($_GET['id']) && $_GET['id'] != "") {
				$c->capnhatBV($_GET['id']);
			}
		}

		if($_GET['action'] == "dangnhap") {
			$c->dangnhap();
		}
	}	
	else $c->trangChu(); 
	
?>