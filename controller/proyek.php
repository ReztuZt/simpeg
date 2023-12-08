<?php
	// INCLUDE KONEKSI DATABASE 
	include ("config/database.php");
	// INCLUDE MODEL DARI FOLDER MODEL 
	include ("model/model_proyek.php");
	include ("model/model_sistem.php");
	
	// CLASS PENDUDUK
	class proyek {
		// PROPERTY
		// DIGUNAKAN UNTUK MENJADI OBJEK SAAT INSTANSIASI DI SINI
			public $proyek;
			public $sistem;
			
			
		// METHOD
		// FUNCTION __CONSTRUCT UNTUK MENANGANI INSTANSIASI CLASS DARI MODEL 
			function __construct() {
				// INSTANSIASI CLASS MODEL PENDUDUK
				$this->proyek	= new model_proyek();
				$this->sistem	= new model_sistem();
				
				
			}
		
			// FUNCTION UNTUK MENANGANI PROSES SELECT
			function proyek() {
				// MODEL
				// MENGARAH KE METHOD DI CLASS MODEL AGAMA
				$data			        = $this->sistem->dataHome();
				$data_proyek			= $this->proyek->dataproyek();

				
				// VIEW
				// MENGARAHKAN KE FILE VIEW/SELECT.PHP
				include "view/dashboard.php";
			}
        }
        ?>