<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include('../config/koneksi.php');
    $data = mysqli_query($koneksi,"SELECT * FROM profil");
    $home = mysqli_fetch_array($data); 
    ?>
    <title><?php echo $home['nama'];?> | Lupa Password  </title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bootstrap/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bootstrap/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../bootstrap/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../bootstrap/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="shortcut icon" href="logo/manimonki.png"">
    <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="logo/manimonki.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>

    
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container-xl px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <!-- Basic forgot password form-->
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header justify-content-center"><h3 class="fw-light my-4">Password Recovery</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Masukan username dan password baru anda.</div>
                                        <!-- Forgot password form-->
                                        <form class="m-t" role="form" method="post" action="../proses?valid=sistem&method=ubah_pass" onsubmit="return validasi_input(this)" >
                                            <!-- Form Group (email address)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputUsername">Username</label>
                                                <input class="form-control" name="Username" id="inputUsername" type="text" aria-describedby="UsenameHelp" placeholder="Enter Username" required oninvalid="this.setCustomValidity('Masukan Username Terlebih Dahulu')" oninput="setCustomValidity('')" autocomplete="off">
                                                <div class="invalid-feedback">Username harus diisi.</div>
                                            </div>
                                            <!-- Form Group (submit options)-->
                                            <!-- <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="auth-login-basic.html">Return to login</a>
                                                <a class="btn btn-primary" href="auth-login-basic.html">Reset Password</a>
                                            </div> -->
                                        </form>

                                        <form>
                                            <!-- Form Group (email address)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control" id="inputPassword" type="password" aria-describedby="PasswordHelp" placeholder="Enter Password" required oninvalid="this.setCustomValidity('Masukan Password Terlebih Dahulu')" oninput="setCustomValidity('')" autocomplete="off" />
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                            <a href="http://localhost/Simpeg" class="pull-left">Home</a>
                                            <button type="submit" class="btn btn-primary block pull-right">Simpan</button>
                                            <br>
                                            </div>
                                            <!-- Form Group (submit options)-->
                                            <!-- <div class="form-group">
                                                <a class="small" href="http://localhost/Simpeg DLH/">Return to login</a>
                                                <a class="btn btn-primary" href="http://localhost/Simpeg DLH/">Reset Password</a>
                                            </div> -->

                                            <!-- <div class="form-group">
                        <a href="http://localhost/Simpeg DLH/" class="pull-left">Home</a>
                        <button type="submit" class="btn btn-primary block pull-right">Simpan</button>
                        <br>
                        </div> -->
                                        </form>


                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="http://localhost/simpeg/daftar/">Buat Akun? Daftar!</a></div>
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
        <script src="../bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="../bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

<script type="text/javascript">
function validasi_input(form){
   pola_username=/^[a-zA-Z0-9\_\-]{6,100}$/;
   if (!pola_username.test(form.username.value)){
      alert ('Username minimal 6 karakter dan hanya boleh Huruf atau Angka!');
      form.username.focus();
      return false;
   }
   var mincar = 6;
  if (form.password.value.length < mincar){
    alert("Password Minimal 6 Karater!");
    form.password.focus();
    return (false);
}
    if (form.re_password.value.length < mincar){
    alert("Password Konfirmasi Minimal 6 Karater!");
    form.re_password.focus();
    return (false);
}
return (true);
}
</script>