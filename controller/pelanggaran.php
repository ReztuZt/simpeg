<?php
// INCLUDE KONEKSI DATABASE 
include("config/database.php");
// INCLUDE MODEL DARI FOLDER MODEL 
include("model/model_pelanggaran.php");
include("model/model_sistem.php");

// CLASS PENDUDUK
class pelanggaran
{
    // PROPERTY
    // DIGUNAKAN UNTUK MENJADI OBJEK SAAT INSTANSIASI DI SINI
    public $pelanggaran;
    public $sistem;

    // METHOD
    // FUNCTION __CONSTRUCT UNTUK MENANGANI INSTANSIASI CLASS DARI MODEL 
    function __construct()
    {
        // INSTANSIASI CLASS MODEL PENDUDUK
        $this->pelanggaran    = new model_pelanggaran();
        $this->sistem    = new model_sistem();
    }

    // FUNCTION UNTUK MENANGANI PROSES SELECT
    function pelanggaran()
    {
        // MODEL
        // MENGARAH KE METHOD DI CLASS MODEL AGAMA
        $data                    = $this->sistem->dataHome();
        $data_pelanggaran            = $this->pelanggaran->datapelanggaran();


        // VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        include "view/dashboard.php";
    }




    // FUNCTION UNTUK MENANGANI PROSES INSERT KE TABEL
    function insert_pelanggaran()
    {
        // DARI VIEW
        // MENAMPUNG DATA YANG DIINPUTKAN
        $jenis_pelanggaran  = $_POST['jenis_pelanggaran'];
        $tanggal_pelanggaran    = $_POST['tanggal_pelanggaran'];
        $keterangan     = $_POST['keterangan'];


        // DARI MODEL
        // MENGARAH KE METHOD DI CLASS MODEL PENDUDUK
        $data            = $this->pelanggaran->insert_pelanggaran($jenis_pelanggaran, $tanggal_pelanggaran, $keterangan);

        // DARI VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES INSERT BERHASIL
        if ($data         == TRUE) {
            echo "<script>
                  window.location = 'index.php?controller=pelanggaran&method=pelanggaran'; 
                  </script>";
        }
        // MENGARAHKAN KE FILE VIEW/INSERT.PHP
        // JIKA HASIL PROSES INSERT GAGAL
        else {
            echo "<script> 
                  alert('Proses Insert Gagal!');
                  window.location = 'index.php?controller=pelanggaran&method=pelanggaran'; 
                  </script>";
        }
    }

    // FUNCTION UNTUK MENANGANI PROSES INSERT KE TABEL
    function dataUpdate_pelanggaran()
    {
        // DARI CONTROLLER
        // MENAMPUNG DATA YANG DIUBAH
        $id        = $_POST['id'];
        $keterangan     = $_POST['keterangan'];


        // DARI MODEL
        // MENGARAH KE METHOD DI CLASS MODEL PENDUDUK
        $data            = $this->pelanggaran->dataUpdate_pelanggaran($id, $keterangan);

        // DARI VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES UPDATE BERHASIL
        if ($data         == TRUE) {
            echo "<script> 
						  window.location = 'index.php?controller=pelanggaran&method=pelanggaran'; 
						  </script>";
        }
        // MENGARAHKAN KE FILE VIEW/UPDATE.PHP
        // JIKA HASIL PROSES UPDATE GAGAL
        else {
            echo "<script> 
						  alert('Proses Update Gagal!');
						  window.location = 'index.php?controller=pelanggaran&method=pelanggaran'; 
						  </script>";
        }
    }


    function dataUpdate_pelanggaran2()
    {
        // DARI CONTROLLER
        // MENAMPUNG DATA YANG DIUBAH
        $id        = $_POST['id'];
        $keterangan     = $_POST['keterangan'];
        $pelanggaran    = $_POST['pelanggaran'];
        $nip            = $_POST['nip'];


        // DARI MODEL
        // MENGARAH KE METHOD DI CLASS MODEL PENDUDUK
        $data            = $this->pelanggaran->dataUpdate_pelanggaran($id, $keterangan, $pelanggaran, $nip);

        // DARI VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES UPDATE BERHASIL
        if ($data         == TRUE) {
            echo "<script> 
						  window.location = 'index.php?controller=pegawai&method=pelanggaran&nip'; 
						  </script>";
        }
        // MENGARAHKAN KE FILE VIEW/UPDATE.PHP
        // JIKA HASIL PROSES UPDATE GAGAL
        else {
            echo "<script> 
						  alert('Proses Update Gagal!');
						  window.location = 'index.php?controller=pegawai&method=pelanggaran&nip'; 
						  </script>";
        }
    }


    // FUNCTION UNTUK MENANGANI PROSES DELETE
    function delete_pelanggaran()
    {
        // DARI CONTROLLER
        // MENANGKAP NILAI NIK
        $id        = $_GET['id'];

        $data = $this->pelanggaran->delete_pelanggaran($id);

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
                      window.location = 'index.php?controller=pelanggaran&method=pelanggaran'; 
                      </script>";
        }
    }
    function insert_pelanggaran2()
    {
        // Mengambil nilai keterangan dan nip dari form
        $keterangan = $_POST['keterangan'];
        $nip = $_POST['nip'];

        // Memanggil metode dataInsert_pelanggaran2 di model Pelanggaran
        $result = $this->pelanggaran->dataInsert_pelanggaran2($keterangan, $nip);

        // Redirect ke halaman pegawai&method=pelanggaran dengan nip sebagai parameter
        if ($result) {
            header("Location: index.php?controller=pegawai&method=pelanggaran&nip=$nip");
            exit();
        } else {
            echo "<script>alert('Proses Insert Gagal!'); window.location.href = 'index.php?controller=pegawai&method=pelanggaran&nip=$nip';</script>";
            exit();
        }
    }

    // FUNCTION UNTUK MENANGANI PROSES DELETE
    function datadeletepelangggaran()
    {
        // DARI CONTROLLER
        // MENANGKAP NILAI NIK
        $id        = $_GET['id'];

        $data = $this->pelanggaran->dataDelete_pelanggaran2($id);

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
                      window.location = 'index.php?controller=pelanggaran&method=pelanggaran'; 
                      </script>";
        }
    }




    

    function insert_upskill()
    {
        // Mengambil nilai keterangan dan nip dari form
        $keterangan = $_POST['keterangan'];
        $nip = $_POST['nip'];

        // Memanggil metode dataInsert_Keterangan2 di model Upskill
        $result = $this->pelanggaran->dataInsert_Keterangan2($keterangan, $nip);

        // Redirect ke halaman pegawai&method=upskill dengan nip sebagai parameter
        if ($result         == TRUE) {
            echo "<script> 
                      alert('Proses Insert Berhasil!');
                      window.location=history.go(-1);
                      </script>";
        }
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        // JIKA HASIL PROSES DELETE GAGAL
        else {
            echo "<script> 
            alert('Proses Insert Gagal!');
            window.location=history.go(-1);
            </script>";
        }
    }
    	// FUNCTION UNTUK MENANGANI PROSES INSERT KE TABEL
        function update_pelanggaran() {
            // DARI CONTROLLER
            // MENAMPUNG DATA YANG DIUBAH
            $id		= $_POST['id'];
            $jenis_pelanggaran	= $_POST['jenis_pelanggaran'];
            $tanggal_pelanggaran	= $_POST['tanggal_pelanggaran'];
            $keterangan 	= $_POST['keterangan'];

            

            
            // DARI MODEL
            // MENGARAH KE METHOD DI CLASS MODEL PENDUDUK
            $data			= $this->pelanggaran->dataUpdate_pelanggaran($id,$jenis_pelanggaran,$tanggal_pelanggaran,$keterangan);
            
            // DARI VIEW
            // MENGARAHKAN KE FILE VIEW/SELECT.PHP
            // JIKA HASIL PROSES UPDATE BERHASIL
            if($data 		== TRUE) {
                echo "<script> 
                      window.location = 'index.php?controller=pelanggaran&method=pelanggaran'; 
                      </script>";
            
            } 
            // MENGARAHKAN KE FILE VIEW/UPDATE.PHP
            // JIKA HASIL PROSES UPDATE GAGAL
            else {
                echo "<script> 
                      alert('Proses Update Gagal!');
                      window.location = 'index.php?controller=pelanggaran&method=pelanggaran'; 
                      </script>";
            }
        }
		
}
