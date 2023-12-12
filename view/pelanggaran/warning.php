<title><?php echo $row_data['nama'];?> | Data Pelanggaran</title>
<?php
    $row_detail  = mysqli_fetch_array($data_detail);
?>

<!-- INI UNTUK JUDUL -->
<section class="content-header">
    <h1>
        Data Detail Pegawai ( Data Istri / Suami )
    </h1>
    <ol class="breadcrumb">
        <li><a href="index.php?controller=sistem&method=home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Data Pegawai</li>
    </ol>
</section>

<section class="content">
    <a href="index.php?controller=pegawai&method=select" class="btn btn-md btn-success" data-toggle="tooltip"
        data-placement="top" title="Data Pegawai"><i class="fa fa-chevron-left fa-fw"></i>Back</a>

    <!-- Add other buttons as needed -->

    <div class="pull-right">
        <form method="post" action="laporan/surat_keterangan.php" target="_blank">
            <!-- Add form inputs as needed -->
            <button class="btn btn-md btn-primary" name="ctk" data-toggle="tooltip" data-placement="top"
                title="Data Pegawai"><i class="fa fa-print fa-fw"></i>Cetak</button>
        </form>
    </div>

    <br>
    <br>

    <!-- INI UNTUK ISI -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- INI BAGIAN ISI UNTUK JUDUL TABEL -->
                <div class="panel-heading bg-aqua">
                    <i class="fa fa-street-view fa-fw"></i> Data Istri/Suami
                    <div class="pull-right">
                        <label class="label" style="font-size: 15px;"> Pegawai : <?php echo $row_detail['nama'];?>
                        </label>
                    </div>
                </div>

                <!-- INI BAGIAN ISI UTAMA -->
                <div class="panel-body table-responsive">
                    <button type="button" class="btn btn-warning btn-xs pull-right" data-toggle="modal"
                        data-target="#modal-danger"><li class="fa fa-plus"></li> Add</button>
                    <br>
                    <br>
                    <!-- INI BAGIAN TABEL -->
                    <table width="100%" id="tabel"
                        class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="odd bg-gray">
                                <th width="1%">No</th>
                                <th><center>Jenis Pelanggaran</center></th>
                                <th><center>Tanggal Pelanggaran</center></th>
                                <th><center>Keterangan</center></th>
                                <!-- Add or modify other columns as needed -->
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <!-- INI UNTUK MENERIMA DATA DARI CONTROLLER -->
                        <tbody>
                            <?php
                                // SET NOMOR URUT DATA
                                $nomor = 1;

                                // CEK DATA YANG DITERIMA
                                if (isset($data_pelanggaran)) {
                                    while ($row_pelanggaran = mysqli_fetch_array($data_pelanggaran)) {
                            ?>

                            <tr class="odd gradeX">
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $row_pelanggaran['jenis_pelanggaran']; ?></td>
                                <td><?php echo $row_pelanggaran['tanggal_pelanggaran']; ?></td>
                                <td><?php echo $row_pelanggaran['keterangan']; ?></td>
                                <!-- Add or modify other columns as needed -->
                                <td><center>
                                        <!-- Add your actions/buttons here -->
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
</section>

<!--Modal Untuk Tambah Data -->
<div class="modal modal-primary fade" id="modal-danger">
    <!-- Add your modal content here -->
</div>

<!-- Add other modals as needed -->

<script type="text/javascript">
    function angka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>

<script language='javascript'>
    function validasi() {
        if (document.kategori.hari.selectedIndex == 0) {
            alert("Pilih Tanggal Lahir");
            document.kategori.hari.focus();
            return false;
        }
        if (document.kategori.bulan.selectedIndex == 0) {
            alert("Pilih Bulan Kelahiran");
            document.kategori.bulan.focus();
            return false;
        }
        if (document.kategori.tahun.selectedIndex == 0) {
            alert("Pilih Tahun Kelahiran");
            document.kategori.tahun.focus();
            return false;
        }
        return true
    }
</script>
