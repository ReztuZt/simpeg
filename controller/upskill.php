<?php
// INCLUDE KONEKSI DATABASE 
include("config/database.php");
// INCLUDE MODEL DARI FOLDER MODEL 
include("model/model_upskill.php");
include("model/model_sistem.php");

// CLASS PENDUDUK
class upskill
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
        $this->upskill    = new model_upskill();
        $this->sistem    = new model_sistem();
    }

    // FUNCTION UNTUK MENANGANI PROSES SELECT
    function upskill()
    {
        // MODEL
        // MENGARAH KE METHOD DI CLASS MODEL AGAMA
        $data                    = $this->sistem->dataHome();
        $data_upskill           = $this->upskill->dataupskill();


        // VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        include "view/dashboard.php";
    }

    // FUNCTION UNTUK MENANGANI PROSES INSERT KE TABEL
    // FUNCTION UNTUK MENANGANI PROSES INSERT KE TABEL
    // FUNCTION UNTUK MENANGANI PROSES INSERT KE TABEL
    function insert_upskill()
    {
        // DARI VIEW
        // MENAMPUNG DATA YANG DIINPUTKAN
        $keterangan        = $_POST['keterangan'];
   


        // DARI MODEL
        // MENGARAH KE METHOD DI CLASS MODEL PENDUDUK
        $data            = $this->upskill->dataInsert_Keterangan($keterangan);

        // DARI VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES INSERT BERHASIL
        if ($data         == TRUE) {
            echo "<script>
              window.location = 'index.php?controller=upskill&method=upskill'; 
              </script>";
        }
        // MENGARAHKAN KE FILE VIEW/INSERT.PHP
        // JIKA HASIL PROSES INSERT GAGAL
        else {
            echo "<script> 
              alert('Proses Insert Gagal!');
              window.location = 'index.php?controller=upskill&method=upskill'; 
              </script>";
        }
    }
    // FUNCTION UNTUK MENANGANI PROSES INSERT KE TABEL
    function dataupdate_upskill()
    {
        // DARI CONTROLLER
        // MENAMPUNG DATA YANG DIUBAH
        $id        = $_POST['id'];
        $keterangan     = $_POST['keterangan'];
        $nip     = $_POST['nip'];



        // DARI MODEL
        // MENGARAH KE METHOD DI CLASS MODEL PENDUDUK
        $data            = $this->upskill->dataUpdate_upskill($id, $keterangan);

        // DARI VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES UPDATE BERHASIL
        if ($data         == TRUE) {
            echo "<script> 
						  window.location = 'index.php?controller=upskill&method=upskill'; 
						  </script>";
        }
        // MENGARAHKAN KE FILE VIEW/UPDATE.PHP
        // JIKA HASIL PROSES UPDATE GAGAL
        else {
            echo "<script> 
						  alert('Proses Update Gagal!');
						  window.location = 'index.php?controller=upskill&method=upskill'; 
						  </script>";
        }
    }



    // FUNCTION UNTUK MENANGANI PROSES INSERT KE TABEL
    function dataupdate_upskill2()
    {
        // DARI CONTROLLER
        // MENAMPUNG DATA YANG DIUBAH
        $id        = $_POST['id'];
        $keterangan     = $_POST['keterangan'];
        $nip     = $_POST['nip'];



        // DARI MODEL
        // MENGARAH KE METHOD DI CLASS MODEL PENDUDUK
        $data            = $this->upskill->dataUpdate_upskill2($id, $keterangan, $nip);

        // DARI VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES UPDATE BERHASIL
        if ($data         == TRUE) {
            echo "<script> 
                              window.location = 'index.php?controller=pegawai&method=upskill'; 
                              </script>";
        }
        // MENGARAHKAN KE FILE VIEW/UPDATE.PHP
        // JIKA HASIL PROSES UPDATE GAGAL
        else {
            echo "<script> 
                              alert('Proses Update Gagal!');
                              window.location = 'index.php?controller=pegawai&method=upskill'; 
                              </script>";
        }
    }



    function dataUpdate()
    {
        // DARI CONTROLLER
        // MENAMPUNG DATA YANG DIUBAH
        $id        = $_POST['id'];
        $keterangan     = $_POST['keterangan'];
        $nip     = $_POST['nip'];



        // DARI MODEL
        // MENGARAH KE METHOD DI CLASS MODEL PENDUDUK
        $data            = $this->upskill->dataUpdate($id, $keterangan, $nip);

        // DARI VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES UPDATE BERHASIL
        if ($data         == TRUE) {
            echo "<script> 
						  window.location = 'index.php?controller=upskill&method=upskill'; 
						  </script>";
        }
        // MENGARAHKAN KE FILE VIEW/UPDATE.PHP
        // JIKA HASIL PROSES UPDATE GAGAL
        else {
            echo "<script> 
						  alert('Proses Update Gagal!');
						  window.location = 'index.php?controller=upskill&method=upskill'; 
						  </script>";
        }
    }


    function ubah_berkas()
    {
        // DARI CONTROLLER
        // MENAMPUNG DATA YANG DIUBAH
        $id        = $_POST['id'];
        $nip        = $_POST['nip'];
        $keterangan     = $_POST['keterangan'];


        // DARI MODEL
        // MENGARAH KE METHOD DI CLASS MODEL PENDUDUK
        $data            = $this->upskill->dataUpdate($id, $keterangan, $nip);

        // DARI VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES UPDATE BERHASIL
        if ($data         == TRUE) {
            echo "<script> 
            window.location = 'index.php?controller=pegawai&method=upskill&nip=$nip';
						  </script>";
        }
        // MENGARAHKAN KE FILE VIEW/UPDATE.PHP
        // JIKA HASIL PROSES UPDATE GAGAL
        else {
            echo "<script> 
						  alert('Proses Update Gagal!');
						  window.location = 'index.php?controller=upskill&method=dataUbahBerkas'; 
						  </script>";
        }
    }



    // FUNCTION UNTUK MENANGANI PROSES DELETE
    function datadeleteupskill()
    {
        // DARI CONTROLLER
        // MENANGKAP NILAI NIK
        $id        = $_GET['id'];

        $data = $this->upskill->dataDelete_upskill($id);

        /// DARI VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES DELETE BERHASIL
        if ($data         == TRUE) {
            echo "<script> 
						  alert('Proses Delete Berhasil!');
						  window.location=history.go(-1);
						  </script>";
        }
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES DELETE GAGAL
        else {
            echo "<script>
							alert('Proses Delete Gagal!'); 
						  window.location = 'index.php?controller=upskill&method=upskill'; 
						  </script>";
        }
    }

    function datainsert_upskill2()
    {
        // DARI VIEW
        // MENAMPUNG DATA YANG DIINPUTKAN
        $jenis_upskill     = $_POST['jenis_upskill'];
        $keterangan     = $_POST['keterangan'];
        $nip            = $_POST['nip'];

        //upskill&nip=$nip
        // DARI MODEL
        // MENGARAH KE METHOD DI CLASS MODEL PENDUDUK
        $data            = $this->upskill->dataInsert_upskill2($jenis_upskill, $keterangan, $nip);

        // DARI VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES INSERT BERHASIL
        if ($data         == TRUE) {
            echo "<script>
						  window.location = 'index.php?controller=upskill&method=upskill&nip=$nip'; 
						  </script>";
        }
        // MENGARAHKAN KE FILE VIEW/INSERT.PHP
        // JIKA HASIL PROSES INSERT GAGAL
        else {
            echo "<script> 
						  alert('Proses Insert Gagal!');
						  window.location = 'index.php?controller=pegawai&method=upskill&nip=$nip'; 
						  </script>";
        }
    }

    function datadeleteupskill2()
    {
        // DARI CONTROLLER
        // MENANGKAP NILAI NIK
        $id        = $_GET['id'];
        $nip        = $_GET['nip'];



        $data = $this->upskill->dataDelete_upskill2($id, $nip);

        /// DARI VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES DELETE BERHASIL
        if ($data         == TRUE) {
            echo"<script> 
            alert('Proses Delete Berhasil!');
            window.location=history.go(-1);
            </script>";
        }
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES DELETE GAGAL
        else {
            echo "<script>
							alert('Proses Delete Gagal!'); 
						  window.location = 'index.php?controller=pegawai&method=upskill&nip=$nip';
						  </script>";
        }
    }

    function insert_upskill2()
{
    // Mengambil nilai keterangan dan nip dari form
    $keterangan = $_POST['keterangan'];
    $nip = $_POST['nip'];

    // Memanggil metode dataInsert_Keterangan2 di model Upskill
    $result = $this->upskill->dataInsert_Keterangan2($keterangan, $nip);

    // Redirect ke halaman pegawai&method=upskill dengan nip sebagai parameter
    if ($result) {
        header("Location: index.php?controller=pegawai&method=upskill&nip=$nip");
    } else {
        echo "<script>alert('Proses Insert Gagal!');</script>";
        header("Location: index.php?controller=pegawai&method=upskill&nip=$nip");
    }
}


function insert_history()
{
    // Mengambil nilai keterangan dan nip dari form
    $keterangan = $_POST['keterangan'];
    $nip = $_POST['nip'];
    $pelanggaran = $_POST['pelanggaran'];

    // Memanggil metode dataInsert_Keterangan2 di model Upskill
    $result = $this->upskill->dataInsert_History($keterangan, $nip, $pelanggaran);

    // Redirect ke halaman pegawai&method=upskill dengan nip sebagai parameter
    if ($result) {
        header("Location: index.php?controller=pegawai&method=HistoryPelanggaran&nip=$nip");
    } else {
        echo "<script>alert('Proses Insert Gagal!');</script>";
        header("Location: index.php?controller=pegawai&method=HistoryPelanggaran&nip=$nip");
    }
}

function datadeletehistory()
{
    // DARI CONTROLLER
    // MENANGKAP NILAI NIK
    $id        = $_GET['id'];
    $nip        = $_GET['nip'];



    $data = $this->upskill->dataDelete_history($id, $nip);

    /// DARI VIEW
    // MENGARAHKAN KE FILE VIEW/SELECT.PHP
    // JIKA HASIL PROSES DELETE BERHASIL
    if ($data == TRUE) {
        echo "<script> 
                  alert('Proses Delete Berhasil!');
                  history.back(); // Kembali ke halaman sebelumnya setelah berhasil delete
              </script>";
    } else {
        echo "<script>
                  alert('Proses Delete Gagal!'); 
                  history.back(); // Kembali ke halaman sebelumnya setelah gagal delete
              </script>";
    }
    
    
}

}
