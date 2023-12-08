<?php

// CLASS MODEL PENDUDUK
class model_pelanggaran extends database
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
    function datapelanggaran()
    {
        $koneksi = $this->koneksi;
        // SQL
        $query            = "SELECT * FROM pelanggaran";

        $sql            = mysqli_query($koneksi, $query);

        return $sql;
    }


    // QUERY UNTUK MEMASUKKAN DATA (INSERT)
    function dataInsert_pelanggaran($keterangan)
    {
        $koneksi = $this->koneksi;

        // SQL
        $query = "INSERT INTO pelanggaran (keterangan) VALUES ('$keterangan')";

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
    function dataUpdate_pelanggaran($id, $keterangan)
    {
        $koneksi = $this->koneksi;
        // SQL
        $query        = "UPDATE pelanggaran SET
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



    function dataUpdate_pelanggaran2($id, $keterangan, $nip, $pelanggaran)
    {
        $koneksi = $this->koneksi;
        // SQL
        $query        = "UPDATE pelanggaran SET
        keterangan 		= '$keterangan',
       WHERE id	= '$id'
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
    function dataDelete_pelanggaran2($id)
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

    function insert_pelanggaran($jenis_pelanggaran, $tanggal_pelanggaran, $keterangan)
    {
        $koneksi = $this->koneksi;

        // SQL
        $query = "INSERT INTO pelanggaran  VALUES ('$jenis_pelanggaran','$tanggal_pelanggaran','$keterangan')";

        $sql = mysqli_query($koneksi, $query);

        // CEK SQL
        if ($sql) {
            return TRUE;
        } else {
            echo mysqli_error($koneksi); // Menampilkan pesan kesalahan SQL
            return FALSE;
        }
    }
    // QUERY UNTUK MENGHAPUS DATA (DELETE)
    function delete_pelanggaran($id)
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

    // QUERY UNTUK MEMASUKKAN DATupsA (INSERT)
    function dataInsert_Keterangan2($keterangan, $nip)
    {
        $koneksi = $this->koneksi;

        // SQL
        $query = "INSERT INTO pelanggaran (keterangan) VALUES ('$keterangan')";

        $sql = mysqli_query($koneksi, $query);

        // CEK SQL
        if ($sql) {
            return TRUE;
        } else {
            echo mysqli_error($koneksi); // Menampilkan pesan kesalahan SQL
            return FALSE;
        }
    }
    function update_pelanggaran($id, $jenis_pelanggaran, $tanggal_pelanggaran, $keterangan)
    {
        $koneksi = $this->koneksi;
        // SQL
        $query        = "UPDATE sk SET
           WHERE id 	= '$id'
           jenis pelanggaran ='$jenis_pelanggaran'
                       tanggal pelanggaran ='$tanggal_pelanggaran'
                        keterangan 		= '$keterangan'";

        $sql        = mysqli_query($koneksi, $query);

        // CEK SQL
        if ($sql == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
