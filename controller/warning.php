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
		
		
		
		}
        ?>