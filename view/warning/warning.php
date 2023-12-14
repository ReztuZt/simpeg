<title><?php echo $row_data['nama']; ?> | Data Pelanggaran</title>
<?php
$row_pelanggaran = mysqli_fetch_array($data_pelanggaran);
?>

<!-- INI UNTUK JUDUL -->
<section class="content-header">
    <h1>
        Pelanggaran Pegawai
    </h1>
    <ol class="breadcrumb">
        <li><a href="?controller=sistem&method=home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Sanksi</li>
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
                        <label class="label" style="font-size: 15px;"> Pegawai : <?php echo $row_pelanggaran['nip']; ?>
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
                                    <center>jenis Pelanggaran</center>
                                </th>
                                <th width="30%">
                                    <center>keterangan</center>
                                </th>
                                <th width="15%">
                                    <center>Status</center>
                                </th>
                                <th width="10%">
                                    <center>Masa Berlaku</center>
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

                            if (isset($data_pelanggaran)) {
                                while ($row_pelanggaran = mysqli_fetch_array($data_pelanggaran)) {
                            ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $nomor; ?></td>
                                        <td><?php echo $row_pelanggaran['jenis_pelanggaran']; ?></td>
                                        <td><?php echo $row_pelanggaran['keterangan']; ?></td>
                                        <td><?php echo $row_pelanggaran['status']; ?></td>
                                        <td><?php echo $row_pelanggaran['masa_berlaku']; ?></td>

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
                                                                    <h4 class="modal-title">Edit Data Pelanggaran</h4>
                                                                </center>
                                                            </div>
                                                            <form role="form" method="POST" action="index.php?controller=warning&method=update_warning" enctype="multipart/form-data">
                                                                <table width="100%" class="modal-body">
                                                                    <tr>
                                                                        <td>
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label>Jenis Pelanggaran</label>
                                                                                    <input type="hidden" name="nip" value="<?php echo $row_detail['nip']; ?>"></input>
                                                                                    <input type="hidden" name="id" value="<?php echo $row_pelanggaran['id']; ?>"></input>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="modal-body">
                                                                                <select name="jenis_pelanggaran" id="jenis_pelanggaran" class="form-control" required oninvalid="this.setCustomValidity('Pilih Jenis Pelanggaran')" oninput="setCustomValidity('')" autocomplete="off">
                                                                                    <option value="" disabled selected>Pilih Jenis Pelanggaran</option>
                                                                                    <option value="SP1">SP1</option>
                                                                                    <option value="SP2">SP2</option>
                                                                                    <option value="SP3">SP3</option>
                                                                                </select>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label>Keterangan</label>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="modal-body">
                                                                                <input type="text" name="keterangan" value="<?php echo $row_pelanggaran['keterangan']; ?>" class="form-control" placeholder="Keterangan" required>
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
                                                                                <input type="text" name="status" value="<?php echo $row_pelanggaran['status']; ?>" class="form-control" placeholder="Status" required>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label>Masa Berlaku</label>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="modal-body">
                                                                                <input type="text" name="masa_berlaku" value="<?php echo $row_pelanggaran['masa_berlaku']; ?>" class="form-control" placeholder="Masa Berlaku" required>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <input type="hidden" name="id" value="<?php echo $row_pelanggaran['id']; ?>" class="form-control" required>
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

<!-- Formulir Tambah Data -->
<div class="modal modal-primary fade" id="modal-danger">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <center>
                    <h4 class="modal-title">Tambah Data Pelanggaran</h4>
                </center>
            </div>
            <form role="form" method="POST" action="index.php?controller=warning&method=insert_warning" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>NIP</label>
                        <!-- Input untuk NIP, pengguna bisa mengisinya -->
                        <input type="text" name="nip" id="nip" class="form-control" placeholder="NIP" required oninvalid="this.setCustomValidity('Masukkan NIP')" oninput="setCustomValidity('')" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Jenis Pelanggaran</label>
                        <input type="text" name="jenis_pelanggaran" id="jenis_pelanggaran" class="form-control" placeholder="Jenis Pelanggaran" required oninvalid="this.setCustomValidity('Masukkan Jenis Pelanggaran')" oninput="setCustomValidity('')" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan" required oninvalid="this.setCustomValidity('Masukkan Keterangan')" oninput="setCustomValidity('')" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" name="status" id="status" class="form-control" placeholder="Status" required oninvalid="this.setCustomValidity('Masukkan Status')" oninput="setCustomValidity('')" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Masa Berlaku</label>
                        <input type="text" name="masa_berlaku" id="masa_berlaku" class="form-control" placeholder="Masa Berlaku" required oninvalid="this.setCustomValidity('Masukkan Masa Berlaku')" oninput="setCustomValidity('')" autocomplete="off">
                    </div>
                </div>
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