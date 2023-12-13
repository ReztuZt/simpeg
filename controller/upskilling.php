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
    public $upskilling;
    public $sistem;


    // METHOD
    // FUNCTION __CONSTRUCT UNTUK MENANGANI INSTANSIASI CLASS DARI MODEL 
    function __construct()
    {
        // INSTANSIASI CLASS MODEL PENDUDUK
        $this->upskilling    = new model_upskilling();
        $this->sistem    = new model_sistem();
    }

    // FUNCTION UNTUK MENANGANI PROSES SELECT
    function upskilling()
    {
        // MODEL
        // MENGARAH KE METHOD DI CLASS MODEL AGAMA
        $data                    = $this->sistem->dataHome();
        $data_upskilling           = $this->upskilling->dataupskilling();


        // VIEW
        // MENGARAHKAN KE FILE VIEW/SELECT.PHP
        include "view/dashboard.php";
    }
    //jika error ini yang dihapus
    function detail()
    {
        // DARI CONTROLLER
        // MENANGKAP NILAI NIK
        $code            = $_GET['code'];

        $data         = $this->sistem->dataHome();
        $data_upskilling = $this->upskilling->dataDetail($code);

        include "view/dashboard.php";
    }
}
?>