<!-- Set the page title with the freelance name -->
<title><?php echo $row_data['nama']; ?> | Detail freelance</title>

<?php
// Assuming $data_freelance is a valid mysqli result set
// Fetch the data for the freelance details
$row_freelance = mysqli_fetch_array($data_freelance);
$photoPath = $row_freelance['foto_path']; // Ganti 'foto_path' dengan nama kolom yang sesuai di tabel Anda
?>

<!-- Header Section -->
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
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- Panel Heading with Freelance Name -->
                <div class="panel-heading bg-aqua">
                    <i class="fa fa-user fa-fw"></i> Data Diri
                    <div class="pull-right">
                        <span class="label label-info" style="font-size: 15px;"> Pegawai: <?php echo $row_freelance['nama']; ?></span>
                    </div>
                </div>

                <!-- Panel Body for Freelance Details -->
            

                                <!-- Column for Other Details -->
                                <div class="col-md-9">
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
                                </div>
                            </div> <!-- End of Bootstrap Grid System -->
                        </div> <!-- End of Panel Body -->
                    </div> <!-- End of Panel -->
                </div> <!-- End of Main Content Section -->
            </div>
        </div>