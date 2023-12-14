<!-- Set the page title with the freelance name -->
<title><?php echo $row_data['nama']; ?> | Detail Freelance</title>

<?php
// Fetch the data for the freelance details
$row_freelance = mysqli_fetch_array($data_freelance);

// Assuming $data_freelance is a valid mysqli result set
$photoPath = $row_freelance['foto_path']; // Change 'foto_path' to the appropriate column name in your table
?>

<!-- Header Section -->
<section class="content-header">
    <h1>
        Data Detail Freelance
    </h1>
    <ol class="breadcrumb">
        <li><a href="index.php?controller=sistem&method=home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="index.php?controller=pegawai&method=select"> Data Pegawai</a></li>
        <li class="active">Data Detail</li>
    </ol>
</section>

<!-- Main Content Section -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <!-- Panel for Photo -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="<?php echo $photoPath; ?>" alt="Freelance Photo" class="img-responsive">
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal">Upload</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="panel panel-default">
                <!-- Panel Heading with Freelance Name -->
                <div class="panel-heading bg-aqua">
                    <i class="fa fa-user fa-fw"></i> Studio
                    <div class="pull-right">
                        <span class="label label-info" style="font-size: 15px;"> Pegawai: <?php echo $row_freelance['nama']; ?></span>
                    </div>
                </div>
                <!-- Panel Body for Freelance Details -->
                <div class="panel-body">
                    <!-- Bootstrap Grid System for Layout -->
                    <div class="col-md-12">
                        <!-- Column for Other Details -->
                        <div class="form-group">
                            <label class="control-label">Nama</label>
                            <p class="form-control-static"><?php echo $row_freelance['nama']; ?></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <p class="form-control-static"><?php echo $row_freelance['email']; ?></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">No. Telp</label>
                            <p class="form-control-static"><?php echo $row_freelance['no_telp']; ?></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Alamat</label>
                            <p class="form-control-static"><?php echo $row_freelance['alamat']; ?></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Keterangan</label>
                            <p class="form-control-static"><?php echo $row_freelance['keterangan']; ?></p>
                        </div>
                        <!-- Add the edit button here with customized appearance -->
                        <a type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#freelance<?php echo $nomor; ?>" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-edit fa-fw"></i></a>
                    </div> <!-- End of Bootstrap Grid System -->
                </div> <!-- End of Panel Body -->
            </div> <!-- End of Panel -->
        </div> <!-- End of Main Content Section -->
    </div>
</div>

<!-- Upload Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
    <!-- ... (Your existing code for the Upload Modal) -->
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
    <!-- ... (Your existing code for the Delete Modal) -->
</div>

<!-- Edit Modal -->
<div class="modal modal-success fade" id="editModal">
    <!-- ... (Your existing code for the Edit Modal) -->
</div>

<!-- Add your new Edit Modal here -->
<div class="modal modal-warning fade" id="freelance<?php echo $nomor; ?>">
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
<!-- Your content for the new Edit Modal goes here -->
</div>
</div>
</div>