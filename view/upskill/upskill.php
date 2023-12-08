<title><?php echo $row_data['nama']; ?> | Upskill</title>

<?php
if ($_SESSION['level_simpeg'] == "admin") {
?>

    <!-- INI UNTUK JUDUL -->
    <section class="content-header">
        <h1>
            Data Upskill
        </h1>
        <ol class="breadcrumb">
            <li><a href="?controller=sistem&method=home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Data Upskill</li>
        </ol>
    </section>
    <section class="content">
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
                        <i class="fa fa-sitemap fa-fw"></i> Data Upskill
                    </div>

                    <!-- INI BAGIAN ISI UTAMA -->
                    <div class="panel-body table-responsive">
                        <!-- INI BAGIAN TABEL -->
                        <table width="100%" id="tabel" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr class="odd bg-gray">
                                    <th width="1%">
                                        <center>No</center>
                                    </th>
                                    <th width="50%">
                                        <center>jenis upskilling</center>
                                    </th>
                                    <th width="50%">
                                        <center>keterangan</center>
                                    </th>
                                    <th width="5%">
                                        <center>Aksi</center>
                                    </th>
                                </tr>
                            </thead>
                            <!-- INI UNTUK MENERIMA DATA DARI CONTROLLER -->
                            <tbody>
                                <?php
                                // SET NOMOR URUT DATA
                                $nomor = 1;

                                // CEK DATA YANG DITERIMA
                                if (isset($data_upskill)) {
                                    while ($row_upskill = mysqli_fetch_array($data_upskill)) {
                                ?>

                                        <tr class="odd gradeX">
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $row_upskill['keterangan']; ?></td>
                                            <td>
                                                <center>
                                                    <a type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#upskill<?php echo $nomor; ?>" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-edit fa-fw"></i></a>

                                                    <div class="modal modal-success fade" id="upskill<?php echo $nomor; ?>">
                                                        <div class="modal-dialog modal-md">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span></button>
                                                                    <center>
                                                                        <h4 class="modal-title">Edit Data Upskill</h4>
                                                                    </center>
                                                                </div>
                                                                <form role="form" method="POST" action="index.php?controller=upskill&method=dataUpdate_upskill" enctype="multipart/form-data">
                                                                    <table width="100%" class="modal-body">
                                                                        <tr>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label>jenis upskilling</label>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                            </td>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <input type="text" name="keterangan" value="<?php echo $row_upskill['jenis_upskill']; ?>" id="nomor_kas" class="form-control" placeholder="Keterangan" required oninvalid="this.setCustomValidity('Masukkan Keterangan')" oninput="setCustomValidity('')" autocomplete="off">
                                                                                    <input type="hidden" name="id" id="nomor_kas" value="<?php echo $row_upskill['id']; ?>" class="form-control" placeholder="Masukkan upskill" required>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                        </tr>
                                                                    </table>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>

                                                                        <input id="button" type="submit" name="submit" class="btn btn-outline btn-xl" value="Simpan" data-toggle="tooltip" data-placement="top" title="Simpan">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->

                                                    <a href="index.php?controller=upskill&method=dataDeleteupskill&id=<?php echo $row_upskill['id']; ?>" class="btn btn-danger btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Delete" onClick="return confirm('Yakin hapus data <?php echo $row_upskill['keterangan']; ?>?')"> <i class="fa fa-trash fa-fw"></i> </a>
                                                </center>

                                            </td>
                                        </tr>

                                <?php
                                        // INCREMENT NOMOR URUT
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
        </div>
    </section>


    <!--Modal Untuk Tambah Data -->
    <div class="modal modal-primary fade" id="modal-danger">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <center>
                        <h4 class="modal-title">Tambah Data Upskill</h4>
                    </center>
                </div>
                <form role="form" method="POST" action="index.php?controller=upskill&method=insert_upskill" enctype="multipart/form-data">
                    <table width="100%" class="modal-body">
                        <tr>
                            <td>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>jenis upskilling</label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="modal-body">
                                    <input type="text" name="keterangan" id="nomor_kas" class="form-control" placeholder="Keterangan" required oninvalid="this.setCustomValidity('Masukkan jnei_upskilling')" oninput="setCustomValidity('')" autocomplete="off">
                                </div>
                                
                            </td>
                            <td>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>keterangan</label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="modal-body">
                                    <input type="text" name="keterangan" id="nomor_kas" class="form-control" placeholder="Keterangan" required oninvalid="this.setCustomValidity('Masukkan Keterangan')" oninput="setCustomValidity('')" autocomplete="off">
                                </div>
                                
                            </td>
                        </tr>
                    </table>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left
                        data-dismiss=" modal">Close</button>
                        <input id="button" type="submit" name="submit" class="btn btn-outline btn-xl" value="Simpan" data-toggle="tooltip" data-placement="top" title="Simpan">
                    </div>
                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

<?php
} else {
    echo "<script>window.history.back(); </script>";
}
?>