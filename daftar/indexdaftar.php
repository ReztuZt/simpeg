<!DOCTYPE html>
<html>

<head>

<style>
    .radio-border {
        border: 1px solid #ccc; /* Ganti gaya dan warna border sesuai keinginan */
        padding: 5px; /* Tambahkan padding untuk jarak */
        border-radius: 5px; /* Tambahkan sudut melengkung jika diinginkan */
        display: inline-block; /* Tampilkan secara inline agar elemen tetap berdampingan */
    }
</style>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include('../config/koneksi.php');
    $data = mysqli_query($koneksi,"SELECT * FROM profil");
    $home = mysqli_fetch_array($data); 
    ?>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
    <title><?php echo $home['nama'];?> | Daftar </title>

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
<link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="logo/manimonki.png" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>




</head>
<!-- <body style="background: linear-gradient(to right,#60CEFF, #48D1CC);background: url(../logo/bg21.jpg)no-repeat center center fixed;-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;"> -->

<body class="hold-transition login-page" style="background: linear-gradient(to right,#0C98FF, #0C98FF);">
<br>
<table width="100%"> 
<!-- <tr>
    <td align="center" width="15%">         
         <img src="../logo/bm.png" style="width: 100px;">
    </td>
    <td width="85%">
     <h2><b style="color: white;">Sistem Informasi Kenaikan Pangkat, Kenaikan Gaji Berkala dan Arsip Kepegawaian<?php echo $home['nama'];?><br>
     <?php echo $home['instansi'];?></b></h2>
     <p style="color: black;text-shadow: 0 0 5px white;"><b><?php echo $home['alamat'];?></b></p>
    </td> -->
</tr>
</table>
<br>
<div class="col-md-2 col-lg-2"></div>
<div class="col-md-8 col-lg-8">
  <!-- /.login-logo -->
  <div class="box box-info">
            <div class="box-header with-border bg-blue">
             <center> <h3 class="box-title">Form Daftar</h3></center>
            </div>
            <br>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="m-t" role="form" method="post" action="../proses?valid=sistem&method=user_daftar" onsubmit="return validasi_input(this)">
                        <table width="100%">
                            <tr>
                                <td width="5%"></td>
                                <td style="color: black;" align="left">
                                    <div class="form-group">
                                        Username
                                    </div>
                                </td>
                                <td style="color: black;" width="5%">
                                    <div class="form-group">
                                    :
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                    <input type="text" name="username" style="color: black;" class="form-control" placeholder="Username" required oninvalid="this.setCustomValidity('Masukan Username Terlebih Dahulu')" oninput="setCustomValidity('')" autocomplete="off">
                                    </div>
                                </td>
                                <td width="5%"></td>
                            </tr>
                            <tr>
                                <td width="5%"></td>
                                <td style="color: black;" align="left">
                                    <div class="form-group">
                                        Nip
                                    </div>
                                </td>
                                <td style="color: black;" width="5%">
                                    <div class="form-group">
                                    :
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                    <input type="text" name="nip" style="color: black;" class="form-control" placeholder="Nip" required oninvalid="this.setCustomValidity('Masukan Nip Terlebih Dahulu')" oninput="setCustomValidity('')" autocomplete="off" onkeypress="return angka(event);">
                                    </div>
                                </td>
                                <td width="5%"></td>
                            </tr>
                            <tr>
                                <td width="5%"></td>
                                <td style="color: black;" align="left">
                                    <div class="form-group">
                                    Nama
                                    </div>
                                </td>
                                <td style="color: black;">
                                    <div class="form-group">
                                    :
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                    <input type="text" name="nama" style="color: black;" class="form-control" placeholder="Nama" required oninvalid="this.setCustomValidity('Masukan Nama Terlebih Dahulu')" oninput="setCustomValidity('')" autocomplete="off">
                                    </div>
                                </td>
                                <td width="5%"></td>
                            </tr>
                            <tr>
                                <td width="5%"></td>
                                <td style="color: black;" align="left">
                                    <div class="form-group">
                                        Gender
                                    </div>
                                </td>
                                <td style="color: black;">
                                    <div class="form-group">
                                    :
                                    </div>
                                </td>
                                <td>
                                    <table width="100%">
                                        <tr>
                                        <td>
                                                <table width="100%">
                                                    <tr>
                                                        <td>
                                                            <a style="color: black;">
                                                                <div class="form-group">
                                                                    <div class="form-group radio-border">
                                                                        <input name="gender" type="radio" id="optionsRadios1" value="l" required>
                                                                        <label for="optionsRadios1">Laki - Laki</label>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <td width="2%"></td>
                                                        </td>
                                                        <td>
                                                            <a style="color: black;">
                                                                <div class="form-group">
                                                                    <div class="form-group radio-border">
                                                                        <input name="gender" type="radio" id="optionsRadios2" value="p" required>
                                                                        <label for="optionsRadios2">Perempuan</label>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>

                                        </tr>
                                    </table>
                                </td>
                                <td width="5%"></td>
                            </tr>
                            <tr>
                            <td width="5%"></td>
                            <td style="color: black;" align="left" width="28%">
                                <div class="form-group">
                                    Password
                                </div>
                            </td>
                            <td style="color: black;">
                                <div class="form-group">
                                :
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" style="color: black;" class="form-control" placeholder="Password" required oninvalid="this.setCustomValidity('Masukan Password Terlebih Dahulu')" oninput="setCustomValidity('')" autocomplete="off">
                                </div>
                            </td>
                            <td width="5%"></td>
                        </tr>
                        <tr>
                            <td width="5%"></td>
                            <td style="color: black;" align="left" width="28%">
                                <div class="form-group">
                                    Konfirmasi Password
                                </div>
                            </td>
                            <td style="color: black;">
                                <div class="form-group">
                                :
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="password" name="re_password" id="re_password" style="color: black;" class="form-control" placeholder="Konfirmasi Password" required oninvalid="this.setCustomValidity('Masukan Konfirmasi Password Terlebih Dahulu')" oninput="setCustomValidity('')" autocomplete="off">
                                    <div id="password-error" style="color: red;"></div> <!-- Pesan kesalahan -->
                                </div>
                            </td>
                            <td width="5%"></td>
                        </tr>

                            
                        </table>
                        <hr>
                         <div class="form-group" style="padding-left: 20px;padding-right: 20px;">
                        <a href="http://localhost/Simpeg/" class="pull-left">Sudah punya akun ??</a>
                        <button type="submit" class="btn btn-primary block pull-right">Simpan</button>
                        <br>
                        </div>
                        <br>
                    </form>
                    
          </div>
  <!-- /.login-box-body -->
  <br>
<br><br>
</div>
<!-- /.login-box -->
<br>
<br><br>
<!-- jQuery 3 -->
<script src="../bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</script>

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
    alert("Password Minimal 6 Karater!");
    form.re_password.focus();
    return (false);
}
return (true);
}
</script>
<script type="text/javascript">
  function angka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
    }
    return true;
  }
</script>

<script>
    function validasi_input(form) {
        // Kode validasi lainnya...

        var password = document.getElementById('password').value;
        var rePassword = document.getElementById('re_password').value;

        if (password !== rePassword) {
            document.getElementById('password-error').innerHTML = 'Password dan Konfirmasi Password harus sama';
            return false;
        } else {
            document.getElementById('password-error').innerHTML = ''; // Hapus pesan kesalahan jika cocok
        }

        // Kode validasi lainnya...
    }
</script>