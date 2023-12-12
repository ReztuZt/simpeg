<?php
	
	// CLASS MODEL PENDUDUK
	class model_warning extends database {
		// DIGUNAKAN UNTUK MENJADI OBJEK SAAT INSTANSIASI DI SINI
			
		
		// METHOD
		// FUNCTION __CONSTRUCT UNTUK MENANGANI INSTANSIASI CLASS DARI MODEL 
			function __construct() {
				// INSTANSIASI CLASS KONEKSI 
				parent::__construct();	

			}
			
		// QUERY UNTUK MENAMPILKAN DATA (SELECT)
			function datapelanggaran($nip) {
				$koneksi = $this->koneksi;
				// SQL
                $query			= "SELECT * FROM pelanggaran WHERE nip ='$nip'";
				
				$sql			= mysqli_query($koneksi,$query);
				
				return $sql;
			}
//jika error ini yang 

			function datawarning($nip) {
				$koneksi = $this->koneksi;
				// SQL
				$query			= "SELECT * FROM pelanggaran WHERE nip ='$nip'";
				
				$sql			= mysqli_query($koneksi,$query);
				
				return $sql;
			}


				// QUERY UNTUK MEMASUKKAN DATA (INSERT)
				function dataUbahWarning($id, $nip, $jenis_pelanggaran, $keterangan, $status, $masa_berlaku) {
					$koneksi = $this->koneksi;
				
					$query = "UPDATE pelanggaran SET
						
								jenis_pelanggaran = '$jenis_pelanggaran',
								keterangan = '$keterangan',
								status = '$status',
								masa_berlaku = '$masa_berlaku'
							 WHERE id = '$id'";
				
					$sql = mysqli_query($koneksi, $query);
				
					return $sql;
				}
				
				
				

    }
    ?>