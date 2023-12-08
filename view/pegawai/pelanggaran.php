<!-- File: application/views/pegawai/data_pelanggaran.php -->

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $row_data['nama']; ?> | Data Pelanggaran</title>
    <!-- Tambahkan link CSS atau file eksternal yang dibutuhkan -->
    <link rel="stylesheet" href="path/to/your/css/file.css">
</head>

<body>

    <!-- Bagian Header -->
    <section class="content-header">
        <h1>Data Detail Pegawai (Data Pelanggaran)</h1>
        <ol class="breadcrumb">
            <li><a href="index.php?controller=sistem&method=home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Data Pegawai</li>
        </ol>
    </section>

    <!-- Bagian Konten -->
    <section class="content">
        <!-- Tombol Navigasi -->
        <a href="index.php?controller=pegawai&method=select" class="btn btn-md btn-success" data-toggle="tooltip" data-placement="top" title="Data Pegawai">
            <i class="fa fa-chevron-left fa-fw"></i> Back
        </a>

        <!-- Tambahkan tombol navigasi lainnya sesuai kebutuhan -->

        <!-- Tombol Cetak -->
        <div class="pull-right">
            <form method="post" action="laporan/surat_keterangan.php" target="_blank">
                <input name="pencetak" type="hidden" value="<?php echo $_SESSION['nama_simpeg']; ?>"></input>
                <input name="nip_cetak" type="hidden" value="<?php echo $row_data2['nip']; ?>"></input>
                <input name="nip" type="hidden" value="<?php echo $row_detail['nip']; ?>"></input>
                <button class="btn btn-md btn-primary" name="ctk" data-toggle="tooltip" data-placement="top" title="Data Pegawai">
                    <i class="fa fa-print fa-fw"></i> Cetak
                </button>
            </form>
        </div>

        <br><br>

        <!-- Tabel Data Pelanggaran -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- Judul Tabel -->
                    <div class="panel-heading bg-aqua">
                        <i class="fa fa-exclamation-triangle fa-fw"></i> Data Pelanggaran
                        <div class="pull-right">
                            <label class="label" style="font-size: 15px;"> Pegawai : <?php echo $row_detail['nama']; ?></label>
                        </div>
                    </div>

                    <!-- Isi Tabel -->
                    <div class="panel-body table-responsive">
                        <!-- Tambahkan tombol untuk menambahkan data pelanggaran -->
                        <button type="button" class="btn btn-warning btn-xs pull-right" data-toggle="modal" data-target="#modal-pelanggaran">
                            <i class="fa fa-plus"></i> Add
                        </button>
                        <br><br>

                        <!-- Tabel -->
                        <table width="100%" id="tabel" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr class="odd bg-gray">
                                    <th width="1%">No</th>
                                    <th>
                                        <center>Jenis Pelanggaran</center>
                                    </th>
                                    <th>
                                        <center>Tanggal Pelanggaran</center>
                                    </th>
                                    <th>
                                        <center>Keterangan</center>
                                    </th>
                                    <th>
                                        <center>Aksi</center>
                                    </th>
                                </tr>
                            </thead>
                            <!-- Data dari Controller -->
                            <tbody>
                                <?php
                                $nomor = 1;
                                if (isset($data_pelanggaran)) {
                                    while ($row_pelanggaran = mysqli_fetch_array($data_pelanggaran)) {
                                ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $row_pelanggaran['jenis_pelanggaran']; ?></td>
                                            <td><?php echo $row_pelanggaran['tanggal_pelanggaran']; ?></td>
                                            <td><?php echo $row_pelanggaran['keterangan']; ?></td>
                                            <td>
                                                <!-- Tambahkan tombol untuk mengubah dan menghapus data -->
                                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#ubah<?php echo $row_pelanggaran['id']; ?>">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <a href="index.php?controller=pegawai&method=delete_pelanggaran&id=<?php echo $row_pelanggaran['id']; ?>&nip=<?php echo $row_detail['nip']; ?>" class="btn btn-danger btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Delete" onClick="return confirm('Yakin hapus?')">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                        $nomor++;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Untuk Tambah Data -->
    <div class="modal modal-primary fade" id="modal-pelanggaran">
        <!-- Tambahkan form untuk menambahkan data pelanggaran -->
        <!-- Gunakan AJAX atau form submit sesuai kebutuhan -->
        <!-- Tambahkan validasi JavaScript jika diperlukan -->
    </div>

    <!-- Tambahkan script JavaScript atau link eksternal yang dibutuhkan -->
    <script src="path/to/your/js/file.js"></script>
</body>

</html>