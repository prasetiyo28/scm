<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Catering</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/animate/animate.css">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>


    <div class="container-login100" style="background-image: url('<?php echo base_url() ?>assets/login/images/bg.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form action="<?php echo base_url() ?>register/register" method="post" class="login100-form validate-form">


             <?php if ($this->session->flashdata('alert') == 'berhasil') { ?>
                <div class="alert alert-success alert-dismissable">
                    <i class="fa fa-check"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Registrasi Berhasil !, Cek Email Untuk Verifikasi
                </div>
            <?php }?>

            <?php if ($this->session->flashdata('alert') == 'gagal') { ?>
                <div class="alert alert-danger alert-dismissable">
                    <i class="fa fa-ban"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    username/password yang anda masukan tidak sesuai
                </div>
            <?php }?>

            <span class="login100-form-title p-b-37">
                Register
            </span>
            <div class="wrap-input100 validate-input m-b-20" data-validate="Masukan Nama Catering">
                <input class="input100" type="text" name="nama" placeholder="nama catering">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                <input class="input100" type="email" name="email" placeholder="username or email">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-20" data-validate="Masukan Nomor HP">
                <input class="input100" type="telp" name="nomor" placeholder="nama catering">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-25" data-validate = "Masukan password">
                <input class="input100" type="password" name="password" placeholder="password">
                <span class="focus-input100"></span>
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                    Register
                </button>
            </div>


            <div class="text-center">
                <a href="<?php echo base_url() ?>login" class="txt2 hov1">
                    Log In
                </a>
            </div>
        </form>


    </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/login/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url() ?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/login/vendor/daterangepicker/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/login/js/main.js"></script>

</body>
</html>