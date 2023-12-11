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
                    <i class="fa fa-user fa-fw"></i> Data Diri
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
                    </div> <!-- End of Bootstrap Grid System -->
                </div> <!-- End of Panel Body -->
            </div> <!-- End of Panel -->
        </div> <!-- End of Main Content Section -->
    </div>
</div>

<!-- Upload Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="uploadModalLabel">Unggah Foto</h4>
            </div>
            <div class="modal-body">
                <form action="upload_photo.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="employee_code" value="<?php echo $row_freelance['code']; ?>">
                    <input type="file" name="photo" required>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Unggah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="deleteModalLabel">Hapus Foto</h4>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus foto ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <a href="delete_photo.php?employee_code=<?php echo $row_freelance['code']; ?>" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>
