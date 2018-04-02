<?php
	 require_once "config/database.php";

	 class Category extends Database
	 {
	 	public function trangChu()
	 	{
	 		$rs = parent::trangChu();
	 		$result = [];
	 		while ($row = mysqli_fetch_array($rs)) {
	 			$result[] = [
	 				'id' => $row['id'],
	 				'tieu_de' => $row['tieu_de'],
	 				'tom_tat' => $row['tom_tat'],
	 				'hinh_anh' => $row['hinh_anh'],
	 				'ngay_dang' => $row['ngay_dang']
	 			];
	 		}
	 		return $result;
	 	}

	 	public function chiTietLoaiTin() {
	 		$rs = parent::chiTietLoaiTin();
	 		$result = [];
	 		while ($row = mysqli_fetch_array($rs)) {
	 			$result[] = [
	 				'id' => $row['id'],
	 				'tieu_de' => $row['tieu_de'],
	 				'tom_tat' => $row['tom_tat'],
	 				'hinh_anh' => $row['hinh_anh'],
	 				'ngay_dang' => $row['ngay_dang']
	 			]; 
	 		}
	 		return $result;
	 	}
	 	public function chiTietTin() {
	 		$rs = parent::chiTietTin();
	 		$result = [];
	 		while ($row = mysqli_fetch_array($rs)) {
	 			$result[] = [
	 				'id' => $row['id'],
	 				'tieu_de' => $row['tieu_de'],
	 				'tom_tat' => $row['tom_tat'],
	 				'noi_dung' => $row['noi_dung'],
	 				'hinh_anh' => $row['hinh_anh'],
	 				'ngay_dang' => $row['ngay_dang'],
	 				'thu_tu' => $row['thu_tu'],
	 				'id_dm' => $row['id_dm']
	 			]; 
	 		}
	 		return $result;
	 	}

	 	public function getAll()
	 	{
	 		$rs = parent::getAll();
	 		$result = [];
	 		while ($row = mysqli_fetch_array($rs)) {
	 			$result[] = [
	 				'id' => $row['id'],
	 				'tieu_de' => $row['tieu_de'],
	 				'tom_tat' => $row['tom_tat'],
	 				'noi_dung' => $row['noi_dung'],
	 				'hinh_anh' => $row['hinh_anh'],
	 				'ngay_dang' => $row['ngay_dang'],
	 				'thu_tu' => $row['thu_tu'],
	 				'id_dm' => $row['id_dm']
	 			];
	 		}
	 		return $result;
	 	}
	 	public function themTK($data = []) {
	 		$query = "INSERT INTO thanhvien (name, email, pass) VALUES ('".$data['name']."','".$data['email']."','".$data['password1']."')";
	 		return parent::ex_query($query);
	 	}

	 	public function themBV($data = []) {
	 		$query = "INSERT INTO baiviet (tieu_de, tom_tat, noi_dung, hinh_anh, id_dm) VALUES ('".$data['tieude']."','".$data['tomtat']."','".$data['noidung']."','img/". $data['hinhanh'] ."','". $data['danhmuc'] ."')";
	 		return parent::ex_query($query);
	 	}

	 	public function xoaBV($id) {
	 		$query = "DELETE FROM baiviet WHERE id = ".$id;
	 		return parent::ex_query($query);
	 	}

	 	public function suaBV($id) {
	 		$query = "SELECT * FROM baiviet WHERE id = ".$id;
	 		$rs = parent::ex_query($query);
	 		$row = mysqli_fetch_array($rs); 
	 		$result['id'] = $row['id'];
	 		$result['tieu_de'] = $row['tieu_de'];
	 		$result['tom_tat'] = $row['tom_tat'];
	 		$result['noi_dung'] = $row['noi_dung'];
	 		$result['hinh_anh'] = $row['hinh_anh'];
	 		$result['ngay_dang'] = $row['ngay_dang'];
	 		$result['thu_tu'] = $row['thu_tu'];
	 		$result['id_dm'] = $row['id_dm'];
	 		return $result;
	 	}

	 	public function capnhatBV($id, $data) {
            $query = "UPDATE baiviet SET tieu_de = '".$data['tieude']."', hinh_anh = 'img/".$data['hinhanh'] ."', tom_tat = '".$data['tomtat']."', id_dm = ".$data['danhmuc'].", noi_dung = '".$data['noidung']."' where id = ".$id;
            return parent::ex_query($query);
    	}

    	public function loidangky() {
    		$query = "SELECT email FROM thanhvien WHERE email= '" .$_POST["email"]. "'";
    		return parent::ex_query($query);
    	}
	}
?>