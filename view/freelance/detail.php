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
        <span class="label label-info" style="font-size: 15px; background-color: #3498db; color: #fff; padding: 5px 10px; border-radius: 3px;"><?php echo $row_freelance['nama']; ?></span>
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
                    <img src="<?php echo $photoPath; ?>" alt="Freelance Photo" class="img-responsive" style="border-radius: 5px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                </div>
                <div class="panel-footer" style="background-color: #f9f9f9;">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal"><i class="fa fa-cloud-upload"></i> Upload</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i> Delete</button>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="panel panel-default">
                <!-- Panel Heading with Freelance Name and Back Button -->
                <div class="panel-heading bg-aqua" style="color: #fff; position: relative;">
                    <a href="javascript:history.go(-1)" class="btn btn-primary" style="position: absolute; top: 10px; right: 10px;"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <i class="fa fa-user fa-fw"></i> Data Studio
                    <div class="pull-right"></div>
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
                            <label class="control-label">No Rekening</label>
                            <p class="form-control-static"><?php echo $row_freelance['code']; ?></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Keterangan</label>
                            <p class="form-control-static"><?php echo $row_freelance['keterangan']; ?></p>
                        </div>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i> Edit</button>
                    </div> <!-- End of Bootstrap Grid System -->
                </div> <!-- End of Panel Body -->
            </div> <!-- End of Panel -->
        </div> <!-- End of Main Content Section -->
    </div>
</div>
<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="editModalLabel">Edit Data Freelance</h4>
            </div>
            <div class="modal-body">

                <!-- Form Edit -->
                <!-- Form Edit -->
                <!-- Form Edit -->
                <form role="form" method="POST" action="index.php?controller=freelance&method=update_freelance" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label">Nama</label>
                        <input type="text" name="nama" value="<?php echo $row_freelance['nama']; ?>" class="form-control" placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" name="email" value="<?php echo $row_freelance['email']; ?>" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">No Telepon</label>
                        <input type="tel" name="no_telp" value="<?php echo $row_freelance['no_telp']; ?>" class="form-control" placeholder="Nomor Telepon" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Keterangan</label>
                        <input type="text" name="keterangan" value="<?php echo $row_freelance['keterangan']; ?>" class="form-control" placeholder="Keterangan" required oninvalid="this.setCustomValidity('Masukan Keterangan')" oninput="setCustomValidity('')" autocomplete="off">
                        <input type="hidden" name="id" value="<?php echo $row_freelance['id']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">No</label>
                        <input type="tel" name="code" value="<?php echo $row_freelance['code']; ?>" class="form-control" placeholder="Code" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-xl btn-primary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-xl btn-primary">Simpan</button>
                    </div>
                </form>


            </div>
        </div>
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
                    <button type="submit" class="btn btn-primary"><i class="fa fa-cloud-upload"></i> Unggah</button>
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
                <a href="delete_photo.php?employee_code=<?php echo $row_freelance['code']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
            </div>
        </div>
    </div>
</div>