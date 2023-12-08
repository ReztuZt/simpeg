<?php $home = mysqli_fetch_array($data); ?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $home['nama']; ?> | Login </title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bootstrap/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bootstrap/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="bootstrap/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="bootstrap/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="shortcut icon" href="logo/manimonki.png">
    <link href="style/css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="logo/manimonki.png" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>

</head>

<body class="hold-transition login-page" style="background: linear-gradient(to right,#0C98FF, #0C98FF);">
    <!-- <table width="100%"> 
 <tr>
    <td align="center" width="15%">         
         <img src="logo/bm.png" style="width: 100px;">
    </td>
    <td width="85%">
     <h2><b style="color: White;">Sistem Informasi Kenaikan Pangkat, Kenaikan Gaji Berkala dan Arsip Kepegawaian<?php echo $home['nama']; ?><br>
     <?php echo $home['instansi']; ?></b></h2>
     <p style="color: black;text-shadow: 0 0 5px white;"><b><?php echo $home['alamat']; ?></b></p>
    </td>
</tr> 
</table> -->
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <!-- Basic login form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="fw-light my-4">Login</h3>
                                </div>
                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                    <center>
                                        <a href="https://www.manimonki.studio/" title="website" target="_blank">
                                            <img src="logo/manimonki.png" alt="Website Icon" width="100" height="100" style="border-radius: 0;">
                                        </a>
                                    </center>
                                </div>

                                <div class="card-body">
                                    <!-- Login form-->
                                    <form class="form-horizontal" method="post" action="proses?valid=sistem&method=validasi">
                                        <div class="box-body">
                                            <div class="form-group" style="padding-right: 40px;padding-left: 40px;">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="30%">
                                                            <div class="form-group has-feedback">
                                                                Username :
                                                            </div>
                                                        </td>
                                                        <td width="70%">
                                                            <div class="form-group has-feedback">
                                                                <input type="text" name="username" class="form-control" placeholder="Username" required oninvalid="this.setCustomValidity('Masukan Username Terlebih Dahulu')" oninput="setCustomValidity('')">
                                                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%">
                                                            <div class="form-group has-feedback">
                                                                Password :
                                                            </div>
                                                        </td>
                                                        <td width="70%">
                                                            <div class="form-group has-feedback">
                                                                <input type="password" name="password" class="form-control" placeholder="Password" required oninvalid="this.setCustomValidity('Masukan Password Terlebih Dahulu')" oninput="setCustomValidity('')">
                                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="form-group" style="padding-left: 30px;padding-right: 30px;">
                                                <center>
                                                    <button type="submit" class="btn btn-primary block  m-b">Masuk</button>
                                                </center><br>
                                                <!-- <a href="daftar/" class="pull-left">Buat Akun</a> -->
                                                <a href="lost/" class="pull-right">lupa Password ??</a>
                                                <br>
                                                <!-- <div class="form-group" style="padding-left: 20px;padding-right: 20px;">
                                                    <center>
                                                        <a href="https://www.manimonki.studio/" title="website" target="_blank">
                                                            <img src="logo/manimonki.png" alt="Website Icon" width="60" height="60" style="border-radius: 100px;">
                                                        </a>
                                                    </center>
                                                </div> -->


                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="daftar/">Buat Akun? Daftar!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto footer-dark">
                <div class="container-xl px-4">
                    <div class="row">
                        <!-- <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a> -->
                        &middot;
                        <a href="#!">Manimonki Studio. </a>
                    </div>
                </div>
        </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>