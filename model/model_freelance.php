<?php
	
	// CLASS MODEL PENDUDUK
	class model_freelance extends database {
		// DIGUNAKAN UNTUK MENJADI OBJEK SAAT INSTANSIASI DI SINI
			
		
		// METHOD
		// FUNCTION __CONSTRUCT UNTUK MENANGANI INSTANSIASI CLASS DARI MODEL 
			function __construct() {
				// INSTANSIASI CLASS KONEKSI 
				parent::__construct();	

			}
			
		// QUERY UNTUK MENAMPILKAN DATA (SELECT)
			function datafreelance() {
				$koneksi = $this->koneksi;
				// SQL
				$query			= "SELECT * FROM freelance";
				
				$sql			= mysqli_query($koneksi,$query);
				
				return $sql;
			}
//jika error ini yang 

			function dataDetail($code) {
				$koneksi = $this->koneksi;
				// SQL
				$query			= "SELECT * FROM freelance WHERE code ='$code'";
				
				$sql			= mysqli_query($koneksi,$query);
				
				return $sql;
			}
		
		// QUERY UNTUK MEMASUKKAN DATA (INSERT)
			function dataInsert_freelance($nama, $email, $no_telp, $keterangan) {
				$koneksi = $this->koneksi;

				// SQL
				$query = "INSERT INTO freelance (nama, email, no_telp, keterangan) VALUES ('$nama', '$email', '$no_telp', '$keterangan')";

				$sql		= mysqli_query($koneksi,$query);
				
				// CEK SQL
				if($sql == TRUE) {
					return TRUE;
				} 
				else {
					return FALSE;
				}
			}
			
			//tamabhdata

			function tambahData($nama) {
				$koneksi = $this->koneksi;

				// SQL
				$query		= "INSERT INTO freelance VALUES
							   ('','$nama')";
				
				$sql		= mysqli_query($koneksi,$query);
				
				// CEK SQL
				if($sql == TRUE) {
					return TRUE;
				} 
				else {
					return FALSE;
				}
			}
		// QUERY UNTUK MENGUBAH DATA (UPDATE)
			function dataUpdate_freelance($id, $nama, $email, $no_telp, $keterangan,$code) {
				$koneksi = $this->koneksi;
		
				// SQL
				$query = "UPDATE freelance SET
							nama        = '$nama',
							email       = '$email',
							no_telp  = '$no_telp',
							keterangan  = '$keterangan',
							code		='$code'
						  WHERE id       = '$id'";
				
				$sql		= mysqli_query($koneksi,$query);
				
				// CEK SQL
				if($sql == TRUE) {
					return TRUE;
				} 
				else {
					return FALSE;
				}
			}
		
		// QUERY UNTUK MENGHAPUS DATA (DELETE)
			function dataDeletefreelance($id) {
				$koneksi = $this->koneksi;
				// SQL
				$query		= "DELETE FROM freelance
							   WHERE id= '$id'";
				
				$sql		= mysqli_query($koneksi,$query);
				
				// CEK SQL
				if($sql == TRUE) {
					return TRUE;
				} 
				else {
					return FALSE;
				}
			}


	}
?>