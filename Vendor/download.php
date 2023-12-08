<?php
if (isset($_GET['file']) && !empty($_GET['file'])) {
    $file = $_GET['file'];
    $file_path = 'path_to_your_files_directory/' . $file; // Ganti dengan path direktori file Anda

    if (file_exists($file_path)) {
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $file . '"');
        readfile($file_path);
        exit;
    } else {
        echo 'File not found.';
    }
}
?>
