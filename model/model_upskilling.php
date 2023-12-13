<?php
	
	// CLASS MODEL PENDUDUK
	class model_upskilling extends database {
		// DIGUNAKAN UNTUK MENJADI OBJEK SAAT INSTANSIASI DI SINI
			
		
		// METHOD
		// FUNCTION __CONSTRUCT UNTUK MENANGANI INSTANSIASI CLASS DARI MODEL 
			function __construct() {
				// INSTANSIASI CLASS KONEKSI 
				parent::__construct();	

			}
			
		// QUERY UNTUK MENAMPILKAN DATA (SELECT)
			function dataupskilling() {
				$koneksi = $this->koneksi;
				// SQL
				$query			= "SELECT * FROM upskill";
				
				$sql			= mysqli_query($koneksi,$query);
				
				return $sql;
			}
//jika error ini yang 

			function dataDetail($code) {
				$koneksi = $this->koneksi;
				// SQL
				$query			= "SELECT * FROM upskill WHERE nip ='$nip'";
				
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

        }
        ?>