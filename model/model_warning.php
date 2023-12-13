<?php

// CLASS MODEL PENDUDUK
class model_warning extends database
{
	// DIGUNAKAN UNTUK MENJADI OBJEK SAAT INSTANSIASI DI SINI


	// METHOD
	// FUNCTION __CONSTRUCT UNTUK MENANGANI INSTANSIASI CLASS DARI MODEL 
	function __construct()
	{
		// INSTANSIASI CLASS KONEKSI 
		parent::__construct();
	}

	// QUERY UNTUK MENAMPILKAN DATA (SELECT)
	function datapelanggaran($nip)
	{
		$koneksi = $this->koneksi;
		// SQL
		$query			= "SELECT * FROM pelanggaran WHERE nip ='$nip'";

		$sql			= mysqli_query($koneksi, $query);

		return $sql;
	}
	//jika error ini yang 

	function datawarning($nip)
	{
		$koneksi = $this->koneksi;
		// SQL
		$query			= "SELECT * FROM pelanggaran WHERE nip ='$nip'";

		$sql			= mysqli_query($koneksi, $query);

		return $sql;
	}


	// QUERY UNTUK MEMASUKKAN DATA (INSERT)
	function dataUbahWarning($id, $nip, $jenis_pelanggaran, $keterangan, $status, $masa_berlaku)
	{
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


	// QUERY UNTUK MEMASUKKAN DATA (INSERT)
	function dataInsertWarning($nip, $jenis_pelanggaran, $keterangan, $status, $masa_berlaku)
	{
		$koneksi = $this->koneksi;
		// SQL
		$q1 	= mysqli_query($koneksi, "SELECT * FROM pelanggaran ORDER BY id DESC");
		$dt 	= mysqli_fetch_array($q1);
		$id		= $dt['id'] + 1;

		$query		= "INSERT INTO pelanggaran VALUES
							   ('$id','$nip','$jenis_pelanggaran','$keterangan','$status','$masa_berlaku')";

		$sql		= mysqli_query($koneksi, $query);

		// CEK SQL
		if ($sql == TRUE) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	//
	function tambahDataPelanggaran($nip, $jenis_pelanggaran, $keterangan, $status, $masa_berlaku)
	{
		$query = "INSERT INTO pelanggaran (nip, jenis_pelanggaran, keterangan, status, masa_berlaku) 
						  VALUES ('$nip', '$jenis_pelanggaran', '$keterangan', '$status', '$masa_berlaku')";

		$sql = mysqli_query($this->koneksi, $query);

		return $sql;
	}


	// QUERY UNTUK MENGHAPUS DATA (DELETE)
	function dataDeleteWarning($id)
	{
		$koneksi = $this->koneksi;
		// SQL
		$query		= "DELETE FROM pelanggaran
							   WHERE id = '$id'";

		$sql		= mysqli_query($koneksi, $query);

		// CEK SQL
		if ($sql == TRUE) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}
