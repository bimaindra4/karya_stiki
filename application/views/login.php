<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Metronic | User Login 1</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url() ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url() ?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url() ?>assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
    <!-- END HEAD -->

    <body class=" login">
        <div class="logo">
            <a href="#">
                <img src="<?php echo base_url() ?>assets/pages/img/logo-big.png" alt=""/> 
            </a>
        </div>
        <div class="content">
            <form class="login-form" action="<?php echo site_url('login/proses') ?>" method="post">
                <h3 class="form-title font-green">Sign In</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Masukkan username dan password </span>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="email" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase">Login</button>
                </div>
                <div class="create-account">
                    <p>
                        <a href="javascript:;" id="register-btn" class="uppercase">Buat akun karya Anda !</a>
                    </p>
                </div>
            </form>
            <form class="register-form" action="#" method="post">
                <h3 class="font-green" style="margin-bottom: 3rem">Sign Up</h3>
                <p class="hint"> Masukkan data pribadi: </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Nama Lengkap</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Nama Lengkap" name="fullname" /> 
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" /> 
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Prodi</label>
                    <select name="country" class="form-control">
                        <option value="1">1</option>
                    </select>
                </div>
                <p class="hint"> Masukkan username dan password: </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" /> 
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" /> 
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Ulangi Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Ulangi Password" name="rpassword" /> 
                </div>
                <div class="form-actions">
                    <button type="button" id="register-back-btn" class="btn green btn-outline">Kembali</button>
                    <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Daftar !</button>
                </div>
            </form>
        </div>
        <div class="copyright"> 2019 © SI Karya STIKI. </div>
        <!--[if lt IE 9]>
        <script src="<?php echo base_url() ?>assets/global/plugins/respond.min.js"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/pages/scripts/login.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
    </body>
</html>