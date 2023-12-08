<?php

// CLASS MODEL PENDUDUK
class model_upskill extends database
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
    function dataupskill()
    {
        $koneksi = $this->koneksi;
        // SQL
        $query            = "SELECT * FROM upskill";

        $sql            = mysqli_query($koneksi, $query);

        return $sql;
    }

    

    // QUERY UNTUK MEMASUKKAN DATupsA (INSERT)
    function dataInsert_Keterangan($keterangan)
    {
        $koneksi = $this->koneksi;

        // SQL
        $query = "INSERT INTO upskill (jenis_pelanggaran, keterangan) VALUES ('$keterangan')";

        $sql = mysqli_query($koneksi, $query);

        // CEK SQL
        if ($sql) {
            return TRUE;
        } else {
            echo mysqli_error($koneksi); // Menampilkan pesan kesalahan SQL
            return FALSE;
        }
    }


    // QUERY UNTUK MENGUBAH DATA (UPDATE)
    function dataUpdate_upskill($id, $keterangan)
    {
        $koneksi = $this->koneksi;
        // SQL
        $query        = "UPDATE upskill SET
								keterangan 		= '$keterangan'
							   WHERE id 	= '$id'
							   ";

        $sql        = mysqli_query($koneksi, $query);

        // CEK SQL
        if ($sql == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }



    // QUERY UNTUK MENGUBAH DATA (UPDATE)
    function dataUpdate_upskill2($id, $keterangan, $nip)
    {
        $koneksi = $this->koneksi;
        // SQL
        $query        = "UPDATE upskill SET
                             keterangan 		= '$keterangan'
                            WHERE id 	= '$id'
                            ";

        $sql        = mysqli_query($koneksi, $query);

        // CEK SQL
        if ($sql == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }



    function dataUpdate($id, $keterangan, $nip)
    {
        $koneksi = $this->koneksi;
        // SQL
        $query        = "UPDATE upskill SET
        keterangan 		= '$keterangan'
       WHERE id 	= '$id'
       ";

        $sql        = mysqli_query($koneksi, $query);

        // CEK SQL
        if ($sql == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // QUERY UNTUK MENGHAPUS DATA (DELETE)
    function dataDelete_upskill($id)
    {
        $koneksi = $this->koneksi;
        // SQL
        $query        = "DELETE FROM upskill
							   WHERE id= '$id'";

        $sql        = mysqli_query($koneksi, $query);

        // CEK SQL
        if ($sql == TRUE) {
            return TRUE;
        } else {
            return FALSE;


            
        }
    }

    function dataInsert_upskill2($jenis_upskill, $keterangan)
    {
        $koneksi = $this->koneksi;
        // SQL
        $q1     = mysqli_query($koneksi, "SELECT * FROM upskill ORDER BY id DESC");
        $dt     = mysqli_fetch_array($q1);
        $id        = $dt['id'] + 1;

        $query        = "INSERT INTO upskill VALUES
							   ('$jenis_upskill','$keterangan')";

        $sql        = mysqli_query($koneksi, $query);

        // CEK SQL
        if ($sql == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }


    function dataDelete_upskill2($id, $nip)
    {
        $koneksi = $this->koneksi;
        // SQL
        $query        = "DELETE FROM upskill
							   WHERE id= '$id'";

        $sql        = mysqli_query($koneksi, $query);

        // CEK SQL
        if ($sql == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }


    // QUERY UNTUK MEMASUKKAN DATupsA (INSERT)
    function dataInsert_Keterangan2($keterangan, $nip)
    {
        $koneksi = $this->koneksi;

        // SQL
        $query = "INSERT INTO upskill (keterangan, nip) VALUES ('$keterangan', '$nip')";

        $sql = mysqli_query($koneksi, $query);

        // CEK SQL
        if ($sql) {
            return TRUE;
        } else {
            echo mysqli_error($koneksi); // Menampilkan pesan kesalahan SQL
            return FALSE;
        }
    }

    // QUERY UNTUK MEMASUKKAN DATupsA (INSERT)
    function dataInsert_History($keterangan, $nip, $pelanggaran)
    {
       $koneksi = $this->koneksi;

// SQL
$query = "INSERT INTO pelanggaran (pelanggaran, nip, keterangan) VALUES ('$pelanggaran', '$nip', '$keterangan')";

$sql = mysqli_query($koneksi, $query);


        // CEK SQL
        if ($sql) {
            return TRUE;
        } else {
            echo mysqli_error($koneksi); // Menampilkan pesan kesalahan SQL
            return FALSE;
        }
    }

    function dataDelete_history($id, $nip)
    {
        $koneksi = $this->koneksi;
        // SQL
        $query        = "DELETE FROM pelanggaran
							   WHERE id= '$id'";

        $sql        = mysqli_query($koneksi, $query);

        // CEK SQL
        if ($sql == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
