<title><?php echo $row_data['nama']; ?> | freelance </title>
<?php
if ($_SESSION['level_simpeg'] == "admin") {
?>

    <!-- INI UNTUK JUDUL -->
    <section class="content-header">
        <h1>
            Data Freelance
        </h1>
        <ol class="breadcrumb">
            <li><a href="?controller=sistem&method=home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Data Freelance</li>
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
                        <i class="fa fa-sitemap fa-fw"></i> Data Freelance
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
                                    <th width="30%">
                                        <center>nama</center>
                                    </th>
                                    <th width="30%">
                                        <center>Email</center>
                                    </th>
                                    <th width="20%">
                                        <center>Nomor Telepon</center>
                                    </th>
                                    <th width="40%">
                                        <center>Keterangan</center>
                                    </th>
                                    <th width="10%">
                                        <center>code</center>
                                    </th>
                                    <th width="25%">
                                        <center>Aksi</center>
                                    </th>
                                </tr>
                            </thead>
                            <!-- INI UNTUK MENERIMA DATA DARI CONTROLLER -->
                            <tbody>
                                <?php
                                // SET NOMOR URUT DATA
                                $nomor          =   1;

                                // CEK DATA YANG DITERIMA
                                if (isset($data_freelance)) {
                                    while ($row_freelance  = mysqli_fetch_array($data_freelance)) {
                                ?>

                                        <tr class="odd gradeX">
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $row_freelance['nama']; ?></td>
                                            <td><?php echo $row_freelance['email']; ?></td>
                                            <td><?php echo $row_freelance['no_telp']; ?></td>
                                            <td><?php echo $row_freelance['keterangan']; ?></td>
                                            <td><?php echo $row_freelance['code']; ?></td>
                                            <td>
                                                <center>
                                                    <a type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#freelance<?php echo $nomor; ?>" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-edit fa-fw"></i></a>
                                                    <a href="index.php?controller=freelance&method=detail&code=<?php echo $row_freelance['code']; ?>" class="btn btn-primary btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Detail"> <i class="fa fa-info fa-fw"></i> </a>
                                                    <a href="index.php?controller=freelance&method=delete_freelance&id=<?php echo $row_freelance['id']; ?>" class="btn btn-danger btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Delete" onClick="return confirm('Yakin hapus data <?php echo $row_freelance['keterangan']; ?>?')"> <i class="fa fa-trash fa-fw"></i> </a>
                                                    <div class="modal modal-success fade" id="freelance<?php echo $nomor; ?>">
                                                        <div class="modal-dialog modal-md">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span></button>
                                                                    <center>
                                                                        <h4 class="modal-title">Edit Data Freelance</h4>
                                                                    </center>
                                                                </div>
                                                                <form role="form" method="POST" action="index.php?controller=freelance&method=update_freelance" enctype="multipart/form-data">
                                                                    <table width="100%" class="modal-body">
                                                                        <tr>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label>Nama</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <input type="text" name="nama" value="<?php echo $row_freelance['nama']; ?>" class="form-control" placeholder="Nama" required>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label>Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <input type="email" name="email" value="<?php echo $row_freelance['email']; ?>" class="form-control" placeholder="Email" required>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label>No Telepon</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <input type="tel" name="no_telp" value="<?php echo $row_freelance['no_telp']; ?>" class="form-control" placeholder="Nomor Telepon" required>
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
                                                                                    <input type="text" name="keterangan" value="<?php echo $row_freelance['keterangan']; ?>" class="form-control" placeholder="Keterangan" required oninvalid="this.setCustomValidity('Masukan Keterangan')" oninput="setCustomValidity('')" autocomplete="off">
                                                                                    <input type="hidden" name="id" value="<?php echo $row_freelance['id']; ?>" class="form-control" required>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label>code</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="modal-body">
                                                                                    <input type="tel" name="code" value="<?php echo $row_freelance['code']; ?>" class="form-control" placeholder="code" required>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                                                        <input type="submit" name="submit" class="btn btn-outline btn-xl" value="Simpan" data-toggle="tooltip" data-placement="top" title="Simpan">
                                                                    </div>
                                                                </form>

                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->

                  
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


    <!-- tambah data nama-->
    <div class="modal modal-primary fade" id="modal-nama">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <center>
                        <h4 class="modal-title">Tambah Data Freelance</h4>
                    </center>
                </div>
                <form role="form" method="POST" action="index.php?controller=freelance&method=tambahData" enctype="multipart/form-data">
                    <table width="100%" class="modal-body">
                        <tr>
                            <td>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>nama</label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="modal-body">
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="nama" required oninvalid="this.setCustomValidity('Masukan nama')" oninput="setCustomValidity('')" autocomplete="off">
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
        </div>
    </div>




    <!--Modal Untuk Tambah Data -->
    <div class="modal modal-primary fade" id="modal-danger">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <center>
                        <h4 class="modal-title">Tambah Data Freelance</h4>
                    </center>
                </div>
                <form role="form" method="POST" action="index.php?controller=freelance&method=insertData" enctype="multipart/form-data">
                    <table width="100%" class="modal-body">
                        <tr>
                            <td>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="hidden" name="code" value="<?php echo $row_freelance['id']; ?>"></input>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="modal-body">
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required oninvalid="this.setCustomValidity('Masukkan Nama')" oninput="setCustomValidity('')" autocomplete="off">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Email</label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="modal-body">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required oninvalid="this.setCustomValidity('Masukkan Email yang valid')" oninput="setCustomValidity('')" autocomplete="off">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>No. Telp</label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="modal-body">
                                    <input type="tel" name="no_telp" id="no_telp" class="form-control" placeholder="No. Telp" required oninvalid="this.setCustomValidity('Masukkan No. Telp')" oninput="setCustomValidity('')" autocomplete="off">
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
                                    <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan" required oninvalid="this.setCustomValidity('Masukkan Keterangan')" oninput="setCustomValidity('')" autocomplete="off">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>code</label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="modal-body">
                                    <input type="text" name="code" id="code" class="form-control" placeholder="code" required oninvalid="this.setCustomValidity('Masukkan code')" oninput="setCustomValidity('')" autocomplete="off">
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

<?php
} else {
    echo "<script>window.history.back(); </script>";
}
?>