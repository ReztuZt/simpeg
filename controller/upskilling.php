<?php
// INCLUDE KONEKSI DATABASE 
include("config/database.php");
// INCLUDE MODEL DARI FOLDER MODEL 
include("model/model_upskilling.php");
include("model/model_sistem.php");

// CLASS PENDUDUK
class upskilling
{
    // PROPERTY
    // DIGUNAKAN UNTUK MENJADI OBJEK SAAT INSTANSIASI DI SINI
    public $upskill;
    public $sistem;


    // METHOD
    // FUNCTION __CONSTRUCT UNTUK MENANGANI INSTANSIASI CLASS DARI MODEL 
    function __construct()
    {
        // INSTANSIASI CLASS MODEL PENDUDUK
        $this->upskill   = new model_upskilling();
        $this->sistem    = new model_sistem();
    }

    // FUNCTION UNTUK MENANGANI PROSES SELECT
    function upskilling()
    {
        $nip    = $_GET['nip'];
        // MODEL
        // MENGARAH KE METHOD DI CLASS MODEL AGAMA
        $data                    = $this->sistem->dataHome();
        $data_upskill           = $this->upskill->dataupskill($nip);


        // VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        include "view/dashboard.php";
    }
    //jika error ini yang dihapus
    // function detail()
    // {
    //     // DARI CONTROLLER
    //     // MENANGKAP NILAI NIK
    //     $nip            = $_GET['nip'];

    //     $data         = $this->sistem->dataHome();
    //     $data_upskilling = $this->upskill->dataDetail($nip);

    //     include "view/dashboard.php";
    // }

    //updatewarning
    function update_upskilling()
    {
        $id = $_POST['id'];
        // Anggap Anda memiliki $nip, mungkin perlu mengambilnya dari suatu tempat
        $nip = $_POST['nip'];
        $nama_keterampilan = $_POST['nama_keterampilan'];
        $tanggal_mulai = $_POST['tanggal_mulai'];
        $status = $_POST['status'];
        $penyedia = $_POST['penyedia'];

        $data_insert = $this->upskill->dataUbahUpskilling($id, $nip, $nama_keterampilan, $tanggal_mulai, $status, $penyedia);

        if ($data_insert == TRUE) {
            echo "<script>window.history.go(-1); location.reload();</script>";
        } else {
            echo "<script>alert('Proses Insert Gagal!'); window.history.go(-1); location.reload();</script>";
        }
    }


    // FUNCTION UNTUK MENANGANI PROSES INSERT KE TABEL
    function insert_upskilling()
    {
        // Ambil NIP dari sesi atau tempat lain sesuai kebutuhan
        $nip = $_POST['nip']; // Sesuaikan dengan cara Anda menyimpan NIP

        // Ambil data dari formulir
        $nama_keterampilan = $_POST['nama_keterampilan'];
        $tanggal_mulai = $_POST['tanggal_mulai'];
        $status = $_POST['status'];
        $penyedia = $_POST['penyedia'];

        // Panggil fungsi atau query untuk menyimpan data ke dalam tabel pelanggaran
        $data_insert = $this->upskill->tambahDataUpskilling($nip, $nama_keterampilan, $tanggal_mulai, $status, $penyedia);

        // Lakukan pengalihan atau tampilkan pesan sesuai dengan hasil operasi penyimpanan
        if ($data_insert) {
            echo "<script>window.history.go(-1); location.reload();</script>";
        } else {
            echo "<script>alert('Proses Insert Gagal!'); window.history.go(-1); location.reload();</script>";
        }
    }

    function delete_upskilling()
    {
        // DARI CONTROLLER
        // MENANGKAP NILAI NIK
        $id            = $_GET['id'];
        $nip        = $_GET['nip'];

        $data = $this->upskill->dataDeleteUpskilling($id);

        /// DARI VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES DELETE BERHASIL
        if ($data         == TRUE) {
            echo "<script>window.history.go(-1); location.reload();</script>";
        }
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES DELETE GAGAL
        else {
            echo "<script>alert('Proses Insert Gagal!'); window.history.go(-1); location.reload();</script>";
        }
    }


}
