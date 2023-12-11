<?php
// Pastikan parameter employee_code ada dan tidak kosong
if (!isset($_GET['employee_code']) || empty($_GET['employee_code'])) {
    die("Parameter employee_code tidak valid.");
}

$employeeCode = $_GET['employee_code'];

// Hubungkan ke database Anda (sesuaikan dengan kredensial Anda)
$koneksi = new mysqli("localhost", "root", "", "simpeg");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Pastikan untuk menghindari SQL injection
$employeeCode = $koneksi->real_escape_string($employeeCode);

// Ambil path foto dari database
$sql = "SELECT foto_path FROM freelance WHERE code = '$employeeCode'";
$result = $koneksi->query($sql);

if (!$result) {
    die("Error: " . $koneksi->error);
}

$row_freelance = $result->fetch_assoc();

if (!$row_freelance) {
    die("Data freelance tidak ditemukan.");
}

// Ambil path foto dari hasil query
$photoPath = 'uploads/' . $employeeCode . '_' . basename($row_freelance['foto_path']);

// Periksa apakah file foto ada sebelum dihapus
if (file_exists($photoPath)) {
    // Hapus file foto dari server
    if (!unlink($photoPath)) {
        die("Error: Tidak dapat menghapus file foto.");
    }
}

// Perbarui database untuk menghapus path foto
$sqlUpdate = "UPDATE freelance SET foto_path = NULL WHERE code = '$employeeCode'";
$hasilUpdate = $koneksi->query($sqlUpdate);

// Periksa apakah query update berhasil
if (!$hasilUpdate) {
    die("Error: " . $koneksi->error);
}

// Tutup koneksi database
$koneksi->close();

// Tambahkan skrip JavaScript untuk melakukan reload halaman setelah 2 detik
echo '<script>
        setTimeout(function() {
            history.go(-1);
        }, 2000);
      </script>';
exit;

?>


