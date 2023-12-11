<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Periksa apakah formulir dikirim
    $employeeCode = $_POST['employee_code'];

    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . $employeeCode . '_' . basename($_FILES['photo']['name']);

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
        // Hubungkan ke database Anda (sesuaikan dengan kredensial Anda)
        $koneksi = new mysqli("localhost", "root", "", "simpeg");

        // Periksa koneksi
        if ($koneksi->connect_error) {
            die("Koneksi gagal: " . $koneksi->connect_error);
        }

        // Perbarui database dengan path foto baru
        $sql = "UPDATE freelance SET foto_path = '$uploadFile' WHERE code = '$employeeCode'";
        $hasil = $koneksi->query($sql);

        // Tutup koneksi database
        $koneksi->close();

      // Tambahkan skrip JavaScript untuk melakukan reload halaman setelah 2 detik
      echo '<script>
      setTimeout(function() {
          history.go(-1);
      }, 2000);
    </script>';
exit;

    } else {
        // Tangani kesalahan unggah
        echo 'Error uploading the file.';
    }
}
?>
