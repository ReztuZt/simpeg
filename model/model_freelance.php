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
			function dataInsert_freelance($nama, $email, $no_telp, $keterangan,$code) {
				$koneksi = $this->koneksi;

				// SQL
				$query = "INSERT INTO freelance (nama, email, no_telp, keterangan, code) VALUES ('$nama', '$email', '$no_telp', '$keterangan','$code')";

				$sql		= mysqli_query($koneksi,$query);
				
				// CEK SQL
				if($sql == TRUE) {
					return TRUE;
				} 
				else {
					return FALSE;
				}
			}


		// add photo

		function uploadPhoto($freelanceCode, $photoFile) {
			// Implementasikan logika untuk mengunggah foto ke server Anda
			// Perbarui kolom 'photo' dalam database dengan jalur file yang baru
	
			// Contoh:
			$targetDirectory = "uploads/";
			$targetFile = $targetDirectory . basename($photoFile["name"]);
	
			if (move_uploaded_file($photoFile["tmp_name"], $targetFile)) {
				// Perbarui kolom 'photo' dalam database dengan $targetFile
				$this->updatePhotoPath($freelanceCode, $targetFile);
				return true;
			} else {
				return false;
			}
		}
	
		// Fungsi untuk menghapus foto
		public function deletePhoto($freelanceCode) {
			// Implementasikan logika untuk menghapus foto dari server Anda
			// Perbarui kolom 'photo' dalam database menjadi NULL atau string kosong
	
			// Contoh:
			$this->updatePhotoPath($freelanceCode, null);
			return true;
		}
	
		// Fungsi untuk memperbarui jalur foto dalam database
		private function updatePhotoPath($freelanceCode, $photoPath) {
			// Implementasikan logika untuk memperbarui kolom 'photo' dalam database
			// Contoh (menggunakan MySQLi):
			$query = "UPDATE freelances SET photo = ? WHERE code = ?";
			$stmt = $this->conn->prepare($query);
			$stmt->bind_param("ss", $photoPath, $freelanceCode);
			$stmt->execute();
			$stmt->close();
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
			function dataUpdate_freelance($id, $nama, $email, $no_telp, $keterangan, $code) {
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