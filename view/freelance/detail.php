<!-- Set the page title with the freelance name -->
<title><?php echo $row_freelance['nama'];?> | Detail freelance</title>

<?php
    // Assuming $data_freelance is a valid mysqli result set
    // Fetch the data for the freelance details
    $row_freelance = mysqli_fetch_array($data_freelance);
?>

<!-- Header Section -->
<section class="content-header">
    <h1>
        Data Detail freelance
    </h1>
    <ol class="breadcrumb">
        <li><a href="index.php?controller=sistem&method=home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="index.php?controller=pegawai&method=select"> Data Pegawai</a></li>
        <li class="active">Data Detail</li>
    </ol>
</section>

<!-- Main Content Section -->
<div class="col-lg-12">
    <div class="panel panel-default">
        <!-- Panel Heading with Freelance Name -->
        <div class="panel-heading bg-aqua">
            <i class="fa fa-user fa-fw"></i> Data Diri
            <div class="pull-right">
                <label class="label" style="font-size: 15px;"> Pegawai : <?php echo $row_freelance['nama'];?>
                </label>
            </div>
        </div>

        <!-- Panel Body for Freelance Details -->
        <div class="panel-body">
            <!-- Displaying Freelance Details -->
            <div class="form-group">
                <label class="col-lg-2 control-label">Nama</label>
                <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $row_freelance['nama']; ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $row_freelance['email']; ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">No. Telp</label>
                <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $row_freelance['no_telp']; ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Alamat</label>
                <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $row_freelance['alamat']; ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Keterangan</label>
                <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $row_freelance['keterangan']; ?></p>
                </div>
            </div>
        </div> <!-- End of Panel Body -->
    </div> <!-- End of Panel -->
</div> <!-- End of Main Content Section -->
