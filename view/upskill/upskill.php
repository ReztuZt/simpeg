<title><?php echo $row_data['nama'];?> | upskilll </title>
<?php
if ($_SESSION['level_simpeg']=="admin") {
?>

            <!-- INI UNTUK JUDUL -->
            <section class="content-header">
              <h1>
            Upskilling
              </h1>
              <ol class="breadcrumb">
                <li><a href="?controller=sistem&method=home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Data Upskill</li>
              </ol>
            </section>
            <section class="content">
             <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-danger"><li class="fa fa-plus"></li> Tambah Data</button>
   
             <br>
             <br>
            <!-- INI UNTUK ISI -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-default">
                        <!-- INI BAGIAN ISI UNTUK JUDUL TABEL -->
                        <div class="panel-heading bg-aqua">
                            <i class="fa fa-sitemap fa-fw"></i> Data Pelanggarn
                        </div>

                        <!-- INI BAGIAN ISI UTAMA -->
                        <div class="panel-body table-responsive">
                            <!-- INI BAGIAN TABEL -->
                    <table width="100%" id="tabel" class="table table-bordered table-hover">
                    <thead>
        <tr class="odd bg-gray">
            <th width="1%"><center>No</center></th>
            <th width="20%"><center>Nama Keterampilan</center></th>
            <th width="19%"><center>Tanggal Mulai</center></th>
            <th width="20%"><center>Penyedia</center></th>
            <th width="20%"><center>Status</center></th>
            <th width="20%"><center>Aksi</center></th>
        </tr>
    </thead>
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
                <td><?php echo $row_upskill['nama_keterampilan']; ?></td>
                <td><?php echo $row_upskill['tanggal_mulai']; ?></td>
                <td><?php echo $row_upskill['penyedia']; ?></td>
                <td><?php echo $row_upskill['status']; ?></td>
                <td> <center>
                                            <a type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#pelanggaran<?php echo $nomor; ?>" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-edit fa-fw"></i></a>
                                           
                 <div class="modal modal-success fade" id="pelanggaran<?php echo $nomor; ?>">
                 <div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <center><h4 class="modal-title">Edit Data Upskill</h4></center>
        </div>
        <form role="form" method="POST" action="index.php?controller=upskill&method=dataupdate_upskill" enctype="multipart/form-data">
            <table width="100%" class="modal-body">
                <tr>
                    <td>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Keterampilan</label>
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
                            <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" required oninvalid="this.setCustomValidity('Pilih Tanggal Mulai')" oninput="setCustomValidity('')" autocomplete="off">
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
                            <input type="text" name="penyedia" id="penyedia" class="form-control" placeholder="Penyedia" required oninvalid="this.setCustomValidity('Masukkan Penyedia')" oninput="setCustomValidity('')" autocomplete="off">
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
                            <input type="text" name="status" id="status" class="form-control" placeholder="Status" required oninvalid="this.setCustomValidity('Masukkan Status')" oninput="setCustomValidity('')" autocomplete="off">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="modal-body">
                            <div class="form-group">
                           
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="modal-body">
                            <input type="hidden" name="id" value="<?php echo $row_upskill['id']; ?>" class="form-control" required>
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
</div>

     
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->

                                            <a href="index.php?controller=upskill&method=datadeleteupskill&id=<?php echo $row_upskill['id']; ?>" class="btn btn-danger btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Delete" onClick="return confirm('Yakin hapus data <?php echo $row_pelanggaran['keterangan'];?>?')"> <i class="fa fa-trash fa-fw"></i> </a>
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
                <input id="button" type="submit" name="submit" class="btn btn-outline btn-xl"  value="Simpan" data-toggle="tooltip" data-placement="top" title="Simpan">
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
                    <span aria-hidden="true">&times;</span>
                </button>
                <center><h4 class="modal-title">Tambah Data Upskill</h4></center>
            </div>
            <form role="form" method="POST" action="index.php?controller=upskill&method=insert_upskill" enctype="multipart/form-data">
                <table width="100%" class="modal-body">
                    <tr>
                        <td>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Keterampilan</label>
                                    <input type="hidden" name="code" value="<?php echo $row_upskill['id']; ?>">
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
                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" required oninvalid="this.setCustomValidity('Pilih Tanggal Mulai')" oninput="setCustomValidity('')" autocomplete="off">
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
                                <input type="text" name="penyedia" id="penyedia" class="form-control" placeholder="Penyedia" required oninvalid="this.setCustomValidity('Masukkan Penyedia')" oninput="setCustomValidity('')" autocomplete="off">
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
                                <input type="text" name="status" id="status" class="form-control" placeholder="Status" required oninvalid="this.setCustomValidity('Masukkan Status')" oninput="setCustomValidity('')" autocomplete="off">
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


                       
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

<?php 
}
else
{
    echo "<script>window.history.back(); </script>";
}
?>