<?php
	// INCLUDE KONEKSI DATABASE 
	include ("config/database.php");
	// INCLUDE MODEL DARI FOLDER MODEL 
	include ("model/model_warning.php");
	include ("model/model_sistem.php");
	
	// CLASS PENDUDUK
	class warning {
		// PROPERTY
		// DIGUNAKAN UNTUK MENJADI OBJEK SAAT INSTANSIASI DI SINI
			public $pelanggaran;
			public $sistem;
			
			
		// METHOD
		// FUNCTION __CONSTRUCT UNTUK MENANGANI INSTANSIASI CLASS DARI MODEL 
			function __construct() {
				// INSTANSIASI CLASS MODEL PENDUDUK
				$this->pelanggaran	= new model_warning();
				$this->sistem	= new model_sistem();
				
				
			}
		
			// FUNCTION UNTUK MENANGANI PROSES SELECT
			function warning() {

					$nip			= $_GET['nip'];
				// MODEL
				// MENGARAH KE METHOD DI CLASS MODEL AGAMA
				$data			        = $this->sistem->dataHome();
				$data_pelanggaran			= $this->pelanggaran->datapelanggaran($nip);

				
				// VIEW
				// MENGARAHKAN KE FILE VIEW/SELECT.PHP
				include "view/dashboard.php";
			}
//jika error ini yang dihapus
			function detail() {
				// DARI CONTROLLER
				// MENANGKAP NILAI NIK
				$nip			= $_GET['nip'];

				$data		 = $this->sistem->dataHome();
				$data_warning = $this->pelanggaran->datawarning($nip);
			
				include "view/dashboard.php";
			}
        
		//updatewarning
		function update_warning() {
			$id = $_POST['id'];
			// Anggap Anda memiliki $nip, mungkin perlu mengambilnya dari suatu tempat
			$nip = $_POST['nip'];
			$jenis_pelanggaran = $_POST['jenis_pelanggaran'];
			$keterangan = $_POST['keterangan'];
			$status = $_POST['status'];
			$masa_berlaku = $_POST['masa_berlaku'];
		
			$data_insert = $this->pelanggaran->dataUbahWarning($id, $nip, $jenis_pelanggaran, $keterangan, $status, $masa_berlaku);
		
			if ($data_insert == TRUE) {
				echo "<script>window.location = 'index.php?controller=warning&method=warning&nip=$nip';</script>";
			} else {
				echo "<script>alert('Proses Update Gagal!');window.location = 'index.php?controller=warning&method=warning&nip=$nip';</script>";
			}
		}


		// FUNCTION UNTUK MENANGANI PROSES INSERT KE TABEL
		 function insert_warning() {
        // Ambil NIP dari sesi atau tempat lain sesuai kebutuhan
		$nip = $_POST['nip']; // Sesuaikan dengan cara Anda menyimpan NIP

        // Ambil data dari formulir
        $jenis_pelanggaran = $_POST['jenis_pelanggaran'];
        $keterangan = $_POST['keterangan'];
        $status = $_POST['status'];
        $masa_berlaku = $_POST['masa_berlaku'];

        // Panggil fungsi atau query untuk menyimpan data ke dalam tabel pelanggaran
        $data_insert = $this->pelanggaran->tambahDataPelanggaran($nip, $jenis_pelanggaran, $keterangan, $status, $masa_berlaku);

        // Lakukan pengalihan atau tampilkan pesan sesuai dengan hasil operasi penyimpanan
        if ($data_insert) {
			echo "<script>window.history.go(-1); location.reload();</script>";
        } else {
			echo "<script>alert('Proses Insert Gagal!'); window.history.go(-1); location.reload();</script>";
        }
		
	}


	//

	function delete_warning() {
		// DARI CONTROLLER
		// MENANGKAP NILAI NIK
		$id			= $_GET['id'];
		$nip		= $_GET['nip'];

		$data = $this->pelanggaran->dataDeleteWarning($id);
	
		/// DARI VIEW
		// MENGARAHKAN KE FILE VIEW/SELECT.PHP
		// JIKA HASIL PROSES DELETE BERHASIL
		if($data 		== TRUE) {
			echo "<script>window.history.go(-1); location.reload();</script>";
		} 
		// MENGARAHKAN KE FILE VIEW/SELECT.PHP
		// JIKA HASIL PROSES DELETE GAGAL
		else {
			echo "<script>alert('Proses Insert Gagal!'); window.history.go(-1); location.reload();</script>";
		}
	}
		
		
		}
        ?>