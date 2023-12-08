<title><?php echo $row_data['nama'];?> | pelanggaran </title>
<?php
if ($_SESSION['level_simpeg']=="admin") {
?>

            <!-- INI UNTUK JUDUL -->
            <section class="content-header">
              <h1>
                Data Pelanggaran
              </h1>
              <ol class="breadcrumb">
                <li><a href="?controller=sistem&method=home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Data Pelanggaran</li>
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
                                        <th width="30%"><center>jenis pelanggaran</center></th>
                                        <th width="30%"><center>tanggal_pelanggaran</center></th>
                                        <th width="20%"><center>keterangan</center></th>
                                        <th width="19%"><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <!-- INI UNTUK MENERIMA DATA DARI CONTROLLER -->
                                <tbody>
                                <?php
                                    // SET NOMOR URUT DATA
                                    $nomor          =   1;
                                    
                                    // CEK DATA YANG DITERIMA
                                    if(isset($data_pelanggaran)) {
                                        while($row_pelanggaran  = mysqli_fetch_array($data_pelanggaran)) {
                                ?>
                                
                                    <tr class="odd gradeX">
                                        <td><?php echo $nomor; ?></td>
                                        <td><?php echo $row_pelanggaran['jenis_pelanggaran']; ?></td>
                                        <td><?php echo $row_pelanggaran['tanggal_pelanggaran']; ?></td>
                                        <td><?php echo $row_pelanggaran['keterangan']; ?></td>
                                        <td><center>
                                            <a type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#pelanggaran<?php echo $nomor; ?>" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-edit fa-fw"></i></a>
                                           
                 <div class="modal modal-success fade" id="pelanggaran<?php echo $nomor; ?>">
                            <div class="modal-dialog modal-md">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                 <center> <h4 class="modal-title">Edit Data Pelanggaran</h4> </center>
                                </div>
                                <form role="form" method="POST" action="index.php?controller=pelanggaran&method=update_pelanggaran" enctype="multipart/form-data">
    <table width="100%" class="modal-body">
        <tr>
            <td>
                <div class="modal-body">
                    <div class="form-group">
                        <label>jenis pelanggaran</label>
                    </div>
                </div>
            </td>
            <td>
                <div class="modal-body">
                    <input type="text" name="jenis_pelanggaran" value="<?php echo $row_pelanggaran['jenis_pelanggaran']; ?>" class="form-control" placeholder="Nama" required>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="modal-body">
                    <div class="form-group">
                        <label>tanggal_pelanggaran</label>
                    </div>
                </div>
            </td>
            <td>
                <div class="modal-body">
                    <input type="tanggal_pelanggaran" name="tanggal_pelanggaran" value="<?php echo $row_pelanggaran['tanggal_pelanggaran']; ?>" class="form-control" placeholder="tanggal pelanggaran" required>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="modal-body">
                    <div class="form-group">
                        <label>keterangan</label>
                    </div>
                </div>
            </td>
            <td>
                <div class="modal-body">
                    <input type="text" name="keterangan" value="<?php echo $row_pelanggaran['keterangan']; ?>" class="form-control" placeholder="keterangan" required>
                    <input type="hidden" name="id" value="<?php echo $row_pelanggaran['id']; ?>" class="form-control" required>
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

                                            <a href="index.php?controller=pelanggaran&method=delete_pelanggaran&id=<?php echo $row_pelanggaran['id']; ?>" class="btn btn-danger btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Delete" onClick="return confirm('Yakin hapus data <?php echo $row_pelanggaran['keterangan'];?>?')"> <i class="fa fa-trash fa-fw"></i> </a>
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
                  <span aria-hidden="true">&times;</span></button>
                <center><h4 class="modal-title">Tambah Data Pelanggaran</h4></center>
              </div>
              <form role="form" method="POST" action="index.php?controller=pelanggaran&method=insert_pelanggaran" enctype="multipart/form-data">
    <table width="100%" class="modal-body">
        <tr>
            <td>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Jenis Pelanggaran</label>
                        <input type="hidden" name="code" value="<?php echo $row_pelanggaran['id'];?>"></input>
                    </div>
                </div>
            </td>
            <td>
                <div class="modal-body">
                    <input type="text" name="jenis_pelanggaran" id="jenis_pelanggaran" class="form-control" placeholder="Nama" required oninvalid="this.setCustomValidity('Masukkan Jenis Pelanggaran')" oninput="setCustomValidity('')" autocomplete="off">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="modal-body">
                    <div class="form-group">
                        <label>tanggal_pelanggaran</label>
                    </div>
                </div>
            </td>
            <td>
                <div class="modal-body">
                    <input type="text" name="tanggal_pelanggaran" id="tanggal_pelanggaran" class="form-control" placeholder="tannggal pelanggaran" required oninvalid="this.setCustomValidity('Masukkan tanggal pelanggaran ')" oninput="setCustomValidity('')" autocomplete="off">
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
                    <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder=" keterangan" required oninvalid="this.setCustomValidity('Masukkan keterangan')" oninput="setCustomValidity('')" autocomplete="off">
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
}
else
{
    echo "<script>window.history.back(); </script>";
}
?>