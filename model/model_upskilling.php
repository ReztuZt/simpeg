<?php

// CLASS MODEL PENDUDUK
class model_upskilling extends database
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
    function dataupskill($nip)
    {
        $koneksi = $this->koneksi;
        // SQL
        $query            = "SELECT * FROM upskill WHERE nip ='$nip'";
        $sql            = mysqli_query($koneksi, $query);

        return $sql;
    }
    //jika error ini yang 

    // function dataDetail($nip)
    // {
    //     $koneksi = $this->koneksi;
    //     // SQL
    //     $query            = "SELECT * FROM upskill WHERE nip ='$nip'";

    //     $sql            = mysqli_query($koneksi, $query);

    //     return $sql;
    // }

    // QUERY UNTUK MEMASUKKAN DATA (INSERT)
    function dataInsert_freelance($nama, $email, $no_telp, $keterangan, $code)
    {
        $koneksi = $this->koneksi;

        // SQL
        $query = "INSERT INTO freelance (nama, email, no_telp, keterangan, code) VALUES ('$nama', '$email', '$no_telp', '$keterangan','$code')";

        $sql        = mysqli_query($koneksi, $query);

        // CEK SQL
        if ($sql == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }



    // QUERY UNTUK MEMASUKKAN DATA (INSERT)
    function dataUbahUpskilling($id, $nip, $nama_keterampilan, $tanggal_mulai, $status, $penyedia)
    {
        $koneksi = $this->koneksi;

        $query = "UPDATE upskill SET
						
								nama_keterampilan = '$nama_keterampilan',
								tanggal_mulai = '$tanggal_mulai',
								status = '$status',
								penyedia = '$penyedia'
							 WHERE id = '$id'";

        $sql = mysqli_query($koneksi, $query);

        return $sql;
    }


    //tambah data untuk upskilling
    function tambahDataUpskilling($nip, $nama_keterampilan, $tanggal_mulai, $status, $penyedia)
    {
        $query = "INSERT INTO upskill (nip, nama_keterampilan, tanggal_mulai, status, penyedia) 
						  VALUES ('$nip', '$nama_keterampilan', '$tanggal_mulai', '$status', '$penyedia')";

        $sql = mysqli_query($this->koneksi, $query);

        return $sql;
    }

    // QUERY UNTUK MENGHAPUS DATA (DELETE)
    function dataDeleteUpskilling($id)
    {
        $koneksi = $this->koneksi;
        // SQL
        $query        = "DELETE FROM upskill
							   WHERE id = '$id'";

        $sql        = mysqli_query($koneksi, $query);

        // CEK SQL
        if ($sql == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }



    // QUERY UNTUK MENGHAPUS DATA (DELETE

}
