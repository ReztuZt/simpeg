<title><?php echo $row_data['nama']; ?> | Data Upskill</title>
<?php
$row_upskill = mysqli_fetch_array($data_upskill);

?>

<!-- INI UNTUK JUDUL -->
<section class="content-header">
    <h1>
        Upskill Pegawai
    </h1>
    <ol class="breadcrumb">
        <li><a href="?controller=sistem&method=home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Upskilling</li>
    </ol>
</section>
<section class="content">
    <a href="javascript:history.back()" class="btn btn-md btn-success" data-toggle="tooltip" data-placement="top" title="Kembali"><i class="fa fa-chevron-left fa-fw"></i>Back</a>

    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-danger">
        <li class="fa fa-plus"></li> Tambah Data
    </button>

    <br>
    <br>
    <!-- INI UNTUK ISI -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
                <!-- INI BAGIAN ISI UNTUK JUDUL TABEL -->
                <div class="panel-heading bg-aqua">
                    <i class="fa fa-exclamation-triangle"></i> Pelanggaran
                    <div class="pull-right">
                        <label class="label" style="font-size: 15px;"> Pegawai : <?php echo $row_upskill['nip']; ?>
                   
                            </label>
                    </div>
                </div>

                <!-- INI BAGIAN ISI UTAMA -->
                <div class="panel-body table-responsive">
                    <!-- INI BAGIAN TABEL -->
                    <table width="100%" id="tabel" class="table table-bordered table-hover">
                        <thead>
                            <tr class="odd bg-gray">
                                <th width="1%">
                                    <center>No</center>
                                </th>
                                <th width="18%">
                                    <center>Nama Keterampilan</center>
                                </th>
                                <th width="30%">
                                    <center>Tanggal Mulai</center>
                                </th>
                                <th width="15%">
                                    <center>Status</center>
                                </th>
                                <th width="10%">
                                    <center>Penyedia</center>
                                </th>

                                <th width="10%">
                                    <center>Aksi</center>
                                </th>
                            </tr>
                        </thead>
                        <!-- INI UNTUK MENERIMA DATA DARI CONTROLLER -->
                        <tbody>
                            <?php
                            $nomor = 1;

                            if (isset($data_upskill)) {
                                mysqli_data_seek($data_upskill, 0); // Set pointer ke baris pertama
                                while ($row_upskill = mysqli_fetch_array($data_upskill)) {
                            ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $nomor; ?></td>
                                        <td><?php echo $row_upskill['nama_keterampilan']; ?></td>
                                        <td><?php echo $row_upskill['tanggal_mulai']; ?></td>
                                        <td><?php echo $row_upskill['status']; ?></td>
                                        <td><?php echo $row_upskill['penyedia']; ?></td>

                                        <td>
                                            <center>
                                                <a type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#pelanggaran<?php echo $nomor; ?>" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-edit fa-fw"></i></a>

                                                <a href="index.php?controller=warning&method=delete_warning&id=<?php echo $row_pelanggaran['id']; ?>" class="btn btn-danger btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Delete" onClick="return confirm('Yakin hapus data <?php echo $row_pelanggaran['keterangan']; ?>?')"> <i class="fa fa-trash fa-fw"></i> </a>
                                                <div class="modal modal-success fade" id="pelanggaran<?php echo $nomor; ?>">
                                                    <div class="modal-dialog modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span></button>
                                                                <center>
                                                                    <h4 class="modal-title">Edit Data Keterampilan</h4>
                                                                </center>

                                                                <form role="form" method="POST" action="index.php?controller=upskilling&method=update_upskilling" enctype="multipart/form-data">
                                                                    <table width="100%" class="modal-body">
                                                                        <tr>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label>Nama Keterampilan</label>
                                                                                        <input type="hidden" name="nip" value="<?php echo $row_detail['nip']; ?>">
                                                                                        <input type="hidden" name="id" value="<?php echo $row_pelanggaran['id']; ?>">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <select name="nama_keterampilan" id="nama_keterampilan" class="form-control" required oninvalid="this.setCustomValidity('Pilih Nama Keterampilan')" oninput="setCustomValidity('')" autocomplete="off">
                                                                                        <option value="" disabled selected>Pilih Nama Keterampilan</option>
                                                                                        <option value="Animasi 2D">Animasi 2D</option>
                                                                                        <option value="Teknik 3D Modeling">Teknik 3D Modeling</option>
                                                                                        <option value="Teknik Sound Design">Teknik Sound Design</option>
                                                                                        <!-- Add more options as needed -->
                                                                                    </select>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label>Tanggal Mulai</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <input type="text" name="tanggal_mulai" value="<?php echo $row_upskill['tanggal_mulai']; ?>" class="form-control" placeholder="Tanggal Mulai" required>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label>Status</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <input type="text" name="status" value="<?php echo $row_upskill['status']; ?>" class="form-control" placeholder="Status" required>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label>Penyedia</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <input type="text" name="penyedia" value="<?php echo $row_upskill['penyedia']; ?>" class="form-control" placeholder="Penyedia" required>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <input type="hidden" name="id" value="<?php echo $row_upskill['id']; ?>" class="form-control" required>
                                                                    </table>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-outline btn-xl" data-toggle="tooltip" data-placement="top" title="Simpan">Simpan</button>
                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                            </center>
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

<!-- Formulir Tambah Data Keterampilan -->
<div class="modal modal-primary fade" id="modal-danger">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <center>
                    <h4 class="modal-title">Tambah Data Keterampilan</h4>
                </center>
            </div>
            <form role="form" method="POST" action="index.php?controller=upskilling&method=insert_upskilling" enctype="multipart/form-data">
                <table width="100%" class="modal-body">
                    <tr>
                        <td>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>NIP</label>
                                    <input type="hidden" name="nip" id="nip" class="form-control" placeholder="NIP" required oninvalid="this.setCustomValidity('Masukkan NIP')" oninput="setCustomValidity('')" autocomplete="off">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Keterampilan</label>
                                    <input type="text" name="nama_keterampilan" id="nama_keterampilan" class="form-control" placeholder="Nama Keterampilan" required oninvalid="this.setCustomValidity('Masukkan Nama Keterampilan')" oninput="setCustomValidity('')" autocomplete="off">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Tanggal Mulai</label>
                                    <input type="text" name="tanggal_mulai" id="tanggal_mulai" class="form-control" placeholder="Tanggal Mulai" required oninvalid="this.setCustomValidity('Masukkan Tanggal Mulai')" oninput="setCustomValidity('')" autocomplete="off">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" name="status" id="status" class="form-control" placeholder="Status" required oninvalid="this.setCustomValidity('Masukkan Status')" oninput="setCustomValidity('')" autocomplete="off">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Penyedia</label>
                                    <input type="text" name="penyedia" id="penyedia" class="form-control" placeholder="Penyedia" required oninvalid="this.setCustomValidity('Masukkan Penyedia')" oninput="setCustomValidity('')" autocomplete="off">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- ... (Tambah data lainnya) ... -->
                </table>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <input id="button" type="submit" name="submit" class="btn btn-outline btn-xl" value="Simpan" data-toggle="tooltip" data-placement="top" title="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>


<?php

?>