// application/controllers/PegawaiController.php

class PegawaiController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pegawai_model'); // Load model pegawai
    }

    public function detail($nip)
    {
        $data['pegawai'] = $this->pegawai_model->getPegawaiByNip($nip);
        $data['foto_url'] = "lost/photo/" . $nip . ".jpg";
        $this->load->view('detail_pegawai', $data);
    }

    public function updateFoto()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file_foto'])) {
            $nip = $this->input->post('nip');
            // Proses upload dan simpan foto
            // Isi kode untuk proses upload dan penyimpanan foto di sini
            // setelah berhasil menyimpan foto, redirect kembali ke halaman detail pegawai
            redirect('pegawai/detail/' . $nip);
        }
    }
}
