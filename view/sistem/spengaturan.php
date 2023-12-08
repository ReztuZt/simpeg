<title><?php echo $row_data['nama']; ?> | Pengaturan</title>
<!-- INI UNTUK JUDUL -->
<?php
if ($_SESSION['level_simpeg'] == "admin") {
?>

  <section class="content-header">
    <h1>
      Pengaturan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-edit"></i> Data Pengaturan</a></li>
      <li class="active">pengaturan</li>
    </ol>
  </section>
  <section class="content">
    <!-- INI UNTUK ISI -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <!-- INI BAGIAN ISI UNTUK JUDUL TABEL -->
          <div class="panel-heading bg-aqua">
            <i class="fa fa-tasks fa-fw"></i> Pengaturan
          </div>

          <!-- INI BAGIAN ISI UTAMA -->
          <div class="panel-body bg-gray">
            <form role="form" method="POST" action="index.php?controller=sistem&method=update_data" enctype="multipart/form-data">
              <br>
              <!DOCTYPE html>
              <html lang="en">

              <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?php echo $row_data['nama']; ?> | Pengaturan</title>
                <link href="style/css/styles.css" rel="stylesheet" />
                <link rel="icon" type="image/x-icon" href="style/assets/img/favicon.png" />
                <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
              </head>

              <body>
                <?php
                if ($_SESSION['level_simpeg'] == "admin") {
                ?>
                  <!-- Sidenav Footer-->
                  <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                      <div class="sidenav-footer-subtitle"> </div>
                      <div class="sidenav-footer-title"> </div>
                    </div>
                  </div>
          </div>
          <div id="layoutSidenav_content">
            <main>
              <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                <div class="container-xl px-4">
                  <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                      <div class="col-auto mb-3">
                        <h1 class="page-header-title" style="font-size: 12px; font-weight: bold;">
                          <i data-feather="user"></i> Edit User
                        </h1>
                      </div>
                    </div>

                    <!-- <div class="col-12 col-xl-auto mb-3">
                        <a class="btn btn-sm btn-light text-primary" href="user-management-list.html">
                          <i class="me-1" data-feather="arrow-left"></i>
                          Back to Users List
                        </a>
                      </div> -->
                  </div>
                </div>
          </div>
        <?php
                } else {
                  echo "<script>window.history.back(); </script>";
                }
        ?>

        <script language='javascript'>
          function angka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
              return false;
            }
            return true;
          }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

        </body>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
          <div class="row">
            <div class="col-xl-4">
              <!-- Profile picture card-->
              <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                  <div class="form-group">
                    <?php if ($row_data['logo'] == "") { ?>
                      <img style="height: 200px;" src="logo/bm.png">
                    <?php } else { ?>
                      <img style="height: 200px; width: 200px;" src="logo/<?php echo $row_data['logo']; ?>">
                      <?php if ($row_data['logo'] != "") { ?>
                        <a href="index.php?controller=sistem&method=hapus_logo" class="btn btn-md" data-toggle="tooltip" data-placement="top" title="Hapus logo">
                          <i class="fa fa-trash"></i>
                        </a>
                      <?php } ?>
                    <?php } ?>
                    <br>
                    <br>
                    <input type="file" name="gambar">
                  </div>
                  <!-- Profile picture help block-->
                  <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                  <!-- Profile picture upload button-->
                  <button class="btn btn-primary" type="submit" name="upload_image">Upload new image</button>
                </div>
              </div>

            </div>
            <div class="col-xl-8">
              <!-- Account details card-->
              <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                  <form>

                    <!-- INI BAGIAN TABEL -->

                    <!-- <table width="100%" style="background: linear-gradient(to right,#70CEFA, #48D1CC);border-radius: 5px;"> -->
                    <?php
                    $row_data = mysqli_fetch_array($data_pengaturan);
                    ?>
                    <tr>
                      <td width="18%"></td>
                      <td width="15%">
                        <b>Nama Profil Web :</b>

                      <td width="18%">
                        <input class="form-control" name="nama_profil" value="<?php echo $row_data['nama']; ?>">
                        <input type="hidden" name="id" value="<?php echo $row_data['id']; ?>">
                      </td>
                      <td width="10%"></td>
                    </tr>
                    <tr>
                      <td colspan="5"><br></td>
                    </tr>
                    <tr>
                      <td width="18%"></td>
                      <td width="15%">
                        <div class="form-group">
                          <b>Instansi Induk :</b>
                        </div>
                      </td>

                      <td width="18%">
                        <div class="form-group">
                          <input class="form-control" name="judul" value="<?php echo $row_data['instansi']; ?>">
                        </div>
                      </td>
                      <td width="10%"></td>
                    </tr>
                    <tr>
                      <td width="18%"></td>
                      <td width="15%">
                        <div class="form-group">
                          <b>Provinsi :</b>
                        </div>
                      </td>

                      <td width="18%">
                        <div class="form-group">
                          <input class="form-control" name="provinsi" value="<?php echo $row_data['provinsi']; ?>">
                        </div>
                      </td>
                      <td width="10%"></td>
                    </tr>
                    <tr>
                      <td width="18%"></td>
                      <td width="15%">
                        <div class="form-group">
                          <b>Kota :</b>
                        </div>
                      </td>

                      <td width="18%">
                        <div class="form-group">
                          <input class="form-control" name="kota" value="<?php echo $row_data['kota']; ?>">
                        </div>
                      </td>
                      <td width="10%"></td>
                    </tr>
                    <tr>
                      <td width="18%"></td>
                      <td width="15%">
                        <div class="form-group">
                          <b>Alamat :</b>
                        </div>
                      </td>

                      <td width="18%">
                        <div class="form-group">
                          <input class="form-control" name="alamat" value="<?php echo $row_data['alamat']; ?>">
                        </div>
                      </td>
                      <td width="10%"></td>
                    </tr>
                    <tr>
                      <td width="18%"></td>
                      <td width="15%">
                        <div class="form-group">
                          <b>Facebook :</b>
                        </div>
                      </td>

                      <td width="18%">
                        <div class="form-group">
                          <input class="form-control" name="fb" placeholder="@facebook" value="<?php echo $row_data['fb']; ?>">
                        </div>
                      </td>
                      <td width="10%"></td>
                    </tr>
                    <tr>
                      <td width="18%"></td>
                      <td width="15%">
                        <div class="form-group">
                          <b>Instagram :</b>
                        </div>
                      </td>

                      <td width="18%">
                        <div class="form-group">
                          <input class="form-control" name="ig" placeholder="@instagram" value="<?php echo $row_data['ig']; ?>">
                        </div>
                      </td>
                      <td width="10%"></td>
                    </tr>
                    <tr>
                      <td width="18%"></td>
                      <td width="15%">
                        <div class="form-group">
                          <b>Twitter :</b>
                        </div>
                      </td>

                      <td width="18%">
                        <div class="form-group">
                          <input class="form-control" name="twitter" placeholder="@twitter" value="<?php echo $row_data['twitter']; ?>">
                        </div>
                      </td>
                      <td width="10%"></td>
                    </tr>

                    <tr>
                      <td width="18%"></td>
                      <td width="15%">
                        <div class="form-group">
                          <!-- <b>logo Objek</b>
                        </div>
                      </td>
                      <td width="2%">
                        <div class="form-group">:</div>
                      </td>
                      <td width="18%">
                        <div class="form-group">SS
                          <?php
                          if ($row_data['logo'] == "") {
                          ?>
                            <img style="height: 200px;" src="logo/bm.png">
                          <?php
                          } else {
                          ?>
                            <img style="height: 200px;width: 200px;" src="logo/<?php echo $row_data['logo']; ?>">
                          <?php
                          }
                          ?>
                          <?php
                          if ($row_data['logo'] == "") {
                          } else { ?><a href="index.php?controller=sistem&method=hapus_logo" class="btn btn-md" data-toggle="tooltip" data-placement="top" title="Hapus logo">
                              <li class="fa fa-trash"></li>
                            </a>
                          <?php } ?>
                          <br>
                          <br>
                          <input type="file" name="gambar">
                          <p style="font-size: 10px;">* ukuran logo tidak boleh melebihi 1000kb / 1mb</p>
                        </div>
                      <td width="10%"></td>
                    </tr>
                    </table>
                    <br>
                    <br>
                    <div align="center">
                      <button name="submit" class="btn btn-md btn-success" data-placement="top" title="Update">
                        <i class="fa fa-check"></i> Update
                      </button>
                    </div> -->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        </main>
        <footer class="footer-admin mt-auto footer-light">
          <div class="container-xl px-4">
            <!-- <div class="row">
              <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
              <div class="col-md-6 text-md-end small">
                <a href="#!">Privacy Policy</a>
                &middot;
                <a href="#!">Terms &amp; Conditions</a>
              </div> -->
          </div>
        </div>
        </footer>

      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    </body>

    </html>
    <script language='javascript'>
      function angka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
          return false;
        }
        return true;
      }
    </script>
  <?php
} else {
  echo "<script>window.history.back(); </script>";
}
  ?>