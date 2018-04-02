<?php
	class Database {
		private $host = "localhost";
		private $db = "btl";
		private $user = "root";
		private $password = "";
		public $conn;

		public function __construct() {
			$this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db);
			mysqli_set_charset($this->conn, 'UTF8');
			if(!$this->conn) {
				die("Khong the ket noi Database");
			}
		}
		public function trangChu() {
			return mysqli_query($this->conn, "SELECT id, tieu_de, tom_tat, ngay_dang, hinh_anh FROM baiviet ORDER BY thu_tu ASC LIMIT 10");
		}

		public function chiTietLoaiTin() {
	 		return mysqli_query ($this->conn, "SELECT id, tieu_de, tom_tat, ngay_dang, hinh_anh FROM baiviet WHERE id_dm=$_GET[id_dm]");
	 	}

	 	public function chiTietTin() {
	 		return mysqli_query ($this->conn, "SELECT * FROM baiviet WHERE id=$_GET[id]");
	 	}

	 	public function getAll() {
			return mysqli_query($this->conn, "SELECT * FROM baiviet");
		}

		public function ex_query($query = "") {
			if($query != "") {
				return mysqli_query($this->conn, $query);
			}
			else return -1;
		} 
	} 
?>