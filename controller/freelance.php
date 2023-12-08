<?php
	// INCLUDE KONEKSI DATABASE 
	include ("config/database.php");
	// INCLUDE MODEL DARI FOLDER MODEL 
	include ("model/model_freelance.php");
	include ("model/model_sistem.php");
	
	// CLASS PENDUDUK
	class freelance {
		// PROPERTY
		// DIGUNAKAN UNTUK MENJADI OBJEK SAAT INSTANSIASI DI SINI
			public $freelance;
			public $sistem;
			
			
		// METHOD
		// FUNCTION __CONSTRUCT UNTUK MENANGANI INSTANSIASI CLASS DARI MODEL 
			function __construct() {
				// INSTANSIASI CLASS MODEL PENDUDUK
				$this->freelance	= new model_freelance();
				$this->sistem	= new model_sistem();
				
				
			}
		
			// FUNCTION UNTUK MENANGANI PROSES SELECT
			function freelance() {
				// MODEL
				// MENGARAH KE METHOD DI CLASS MODEL AGAMA
				$data			        = $this->sistem->dataHome();
				$data_freelance			= $this->freelance->datafreelance();

				
				// VIEW
				// MENGARAHKAN KE FILE VIEW/SELECT.PHP
				include "view/dashboard.php";
			}
//jika error ini yang dihapus
			function detail() {
				// DARI CONTROLLER
				// MENANGKAP NILAI NIK
				$code			= $_GET['code'];

				$data		 = $this->sistem->dataHome();
				$data_freelance = $this->freelance->dataDetail($code);
			
				include "view/dashboard.php";
			}

		// FUNCTION UNTUK MENANGANI PROSES INSERT KE TABEL
		function insertData() {
			// DARI VIEW
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$no_telp = $_POST['no_telp'];
			$keterangan = $_POST['keterangan'];
			$code = $_POST['code'];
	
			// DARI MODEL
			$data = $this->freelance->dataInsert_freelance($nama, $email, $no_telp, $keterangan, $code);
	
			// DARI VIEW
			if ($data == TRUE) {
				echo "<script>
					  window.location = 'index.php?controller=freelance&method=freelance'; 
					  </script>";
			} else {
				echo "<script> 
					  alert('Proses Insert Gagal!');
					  window.location = 'index.php?controller=freelance&method=freelance'; 
					  </script>";
			}
		}


//nama tambah
function tambahData() {
	// DARI VIEW
	$nama = $_POST['nama'];


	// DARI MODEL
	$data = $this->freelance->tambahData($nama);

	// DARI VIEW
	if ($data == TRUE) {
		echo "<script>
			  window.location = 'index.php?controller=freelance&method=freelance'; 
			  </script>";
	} else {
		echo "<script> 
			  alert('Proses Insert Gagal!');
			  window.location = 'index.php?controller=freelance&method=freelance'; 
			  </script>";
	}
}






		// FUNCTION UNTUK MENANGANI PROSES INSERT KE TABEL
			function update_freelance() {
				// DARI CONTROLLER
				// MENAMPUNG DATA YANG DIUBAH
				$id		= $_POST['id'];
				$nama	= $_POST['nama'];
				$email	= $_POST['email'];
				$no_telp	= $_POST['no_telp'];
				$keterangan 	= $_POST['keterangan'];
				$code 	= $_POST['code'];
				

				
				// DARI MODEL
				// MENGARAH KE METHOD DI CLASS MODEL PENDUDUK
				$data			= $this->freelance->dataUpdate_freelance($id,$nama,$email,$no_telp,$keterangan,$code);
				
				// DARI VIEW
				// MENGARAHKAN KE FILE VIEW/SELECT.PHP
				// JIKA HASIL PROSES UPDATE BERHASIL
				if($data 		== TRUE) {
					echo "<script> 
						  window.location = 'index.php?controller=freelance&method=freelance'; 
						  </script>";
				
				} 
				// MENGARAHKAN KE FILE VIEW/UPDATE.PHP
				// JIKA HASIL PROSES UPDATE GAGAL
				else {
					echo "<script> 
						  alert('Proses Update Gagal!');
						  window.location = 'index.php?controller=freelance&method=freelance'; 
						  </script>";
				}
			}

//addphoto
function uploadPhoto($freelanceCode, $photoFile) {
	if ($this->model_freelance->uploadPhoto($freelanceCode, $photoFile)) {
		// Foto diunggah dengan sukses
		// Redirect atau tampilkan pesan sukses
		header("Location: index.php?controller=your_controller&method=your_method");
	} else {
		// Tangani kasus ketika pengunggahan gagal
		// Redirect atau tampilkan pesan error
		echo "Pengunggahan gagal!";
	}
}




		
		// FUNCTION UNTUK MENANGANI PROSES DELETE
			function delete_freelance() {
				// DARI CONTROLLER
				// MENANGKAP NILAI NIK
				$id		= $_GET['id'];

				$data = $this->freelance->dataDeletefreelance($id);
			
				/// DARI VIEW
				// MENGARAHKAN KE FILE VIEW/SELECT.PHP
				// JIKA HASIL PROSES DELETE BERHASIL
				if($data 		== TRUE) {
					echo "<script> 
						  alert('Proses Delete Berhasil!');
						  window.location = 'index.php?controller=sk&method=sk'; 
						  </script>";
				
				} 
				// MENGARAHKAN KE FILE VIEW/SELECT.PHP
				// JIKA HASIL PROSES DELETE GAGAL
				else {
					echo "<script>
							alert('Proses Delete Gagal!'); 
						  window.location = 'index.php?controller=sk&method=sk'; 
						  </script>";
				}
			}
		}
	
?>