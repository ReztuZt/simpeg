<?php
	
	// CLASS MODEL PENDUDUK
	class model_proyek extends database {
		// DIGUNAKAN UNTUK MENJADI OBJEK SAAT INSTANSIASI DI SINI
			
		
		// METHOD
		// FUNCTION __CONSTRUCT UNTUK MENANGANI INSTANSIASI CLASS DARI MODEL 
			function __construct() {
				// INSTANSIASI CLASS KONEKSI 
				parent::__construct();	

			}
			
		// QUERY UNTUK MENAMPILKAN DATA (SELECT)
			function dataproyek() {
				$koneksi = $this->koneksi;
				// SQL
				$query			= "SELECT * FROM proyek";
				
				$sql			= mysqli_query($koneksi,$query);
				
				return $sql;
			}
        }
        ?>