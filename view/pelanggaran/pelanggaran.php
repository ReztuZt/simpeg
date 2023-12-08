<!-- Bagian Konten -->
<section class="content">
    <!-- Tombol Navigasi -->
    <a href="index.php?controller=pegawai&method=select" class="btn btn-md btn-success" data-toggle="tooltip" data-placement="top" title="Data Pegawai">
        <i class="fa fa-chevron-left fa-fw"></i> Back
    </a>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-pelanggaran">
        <i class="fa fa-plus"></i> Tambah Data Pelanggaran
    </button>

    <!-- Tombol Cetak -->
    <div class="pull-right">
        <form method="post" action="laporan/surat_keterangan.php" target="_blank">
            <!-- Konten tombol cetak di sini -->
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
                        <!-- <label class="label" style="font-size: 15px;"> Pegawai : <?php echo $row_detail['nama']; ?></label> -->
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
                                <th><center>Jenis Pelanggaran</center></th>
                                <th><center>Tanggal Pelanggaran</center></th>
                                <th><center>Keterangan</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <!-- Data dari Controller -->
                        <tbody>
                            <?php
                            $nomor = 1;
                            if (isset($data_pelanggaran)) :
                                while ($row_pelanggaran = mysqli_fetch_array($data_pelanggaran)) :
                            ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $nomor; ?></td>
                                        <td><?php echo $row_pelanggaran['jenis_pelanggaran']; ?></td>
                                        <td><?php echo $row_pelanggaran['tanggal_pelanggaran']; ?></td>
                                        <td><?php echo $row_pelanggaran['keterangan']; ?></td>
                                        <td>
                                            <!-- Tambahkan tombol untuk mengubah dan menghapus data -->
                                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#sk<?php echo $nomor; ?>">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <a href="index.php?controller=pelanggaran&method=delete_pelanggaran&id=<?php echo $row_pelanggaran['id']; ?>" class="btn btn-danger btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Delete" onClick="return confirm('Yakin hapus?')">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Modal untuk edit data pelanggaran -->
                                    <!-- Modal untuk edit data pelanggaran -->
<div class="modal modal-success fade" id="sk<?php echo $nomor; ?>">
    <!-- Konten modal untuk edit data pelanggaran di sini -->
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <center><h4 class="modal-title">Edit Data Pelanggaran</h4></center>
            </div>
            <form role="form" method="POST" action="index.php?controller=pelanggaran&method=update_pelanggaran" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Jenis Pelanggaran</label>
                        <input type="text" name="jenis_pelanggaran" class="form-control" placeholder="Jenis Pelanggaran" value="<?php echo $row_pelanggaran['jenis_pelanggaran']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pelanggaran</label>
                        <input type="date" name="tanggal_pelanggaran" class="form-control" value="<?php echo $row_pelanggaran['tanggal_pelanggaran']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo $row_pelanggaran['keterangan']; ?>" required>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $row_pelanggaran['id']; ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit" class="btn btn-outline btn-xl" value="Simpan" data-toggle="tooltip" data-placement="top" title="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>

                                    <div class="modal modal-success fade" id="sk<?php echo $nomor; ?>">
                                        <!-- Konten modal untuk edit data pelanggaran di sini -->
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <!-- Konten modal untuk edit data pelanggaran di sini -->
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                    $nomor++;
                                endwhile;
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal untuk tambah data pelanggaran -->
<div class="modal modal-primary fade" id="modal-pelanggaran">
    <!-- Konten modal untuk tambah data pelanggaran di sini -->
</div>
