<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GAD.co</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/logogad.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="all">
      <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p class="fa fa-phone">  Call +0274 14045</p> 
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <?php if ($this->session->userdata('isLogin')==TRUE) {  //ngecek udah login belum, kalau sudah kemabli ke halaman admin

                            echo $_SESSION['nama'].$_SESSION['email']; ?>
                            <div class="login"><a href="<?php echo base_url('');?>index.php/logout" class="login-btn"><i class="fa fa-logout"></i><span class="d-none d-md-inline-block">Logout</span></a></div>
                        <?php  } else { ?>
                              <div class="login"><a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Sign In</span></a></div>
                <?php   } ?>
               
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
       <!-- Login Modal-->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
               <ul id="pills-tab" role="tablist" class="nav nav-pills nav-justified">
                <li class="nav-item"><a id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="true" class="nav-link">Pelanggan Baru</a></li>
                <li class="nav-item"><a id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false" class="nav-link active">Pelanggan Lama</a></li>
              </ul>
              <div id="pills-tabContent" class="tab-content">
                <div id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab" class="tab-pane fade">
                <h3 class="text-center text-uppercase">Buat Akun</h3>
                <p class="text-center text-muted">Kami tidak akan posting atas nama Anda atau membagikan informasi apapun tanpa persetujuan Anda.</p>
                <hr>
                <form action="<?php echo base_url('index.php/Home/simpan_post');?>" method="POST" enctype="multipart/form-data">
                  <div class="form-group" >
                    <label for="name-login"><strong>Nama*</strong></label>
                    <input id="nama"  name="nama" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email-login"><strong>Alamat Email*</strong></label>
                    <input id="email-login" name="email" id="email" type="text"class="form-control">
                  </div>
                  <div class="form-group" >
                    <label for="password-login"><strong>Password*</strong></label>
                    <input id="password-login" name="password" id="password" type="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="Jenis-kelamin-login"><strong>Jenis Kelamin*</strong></label>
                    <div class="checkbox" name="gender" id="gender" >
                        <label>
                          <input type="radio" name="gender" value="Wanita"> Wanita
                        </label>
                        <label>
                          <input type="radio" name="gender" value="Pria"> Pria
                        </label>
                      </div>
                  </div>
                  <div class="text-center">
                    <p><button type="submit" name="register" class="btn btn-template-outlined"><i class="fa fa-user-md"></i> Daftar</button></a></p>
                  </div>
                    <p class="text-center text-muted">Sudah terdaftar?</p>
                  <p class="text-center text-muted"><a href="customer-register.html"><strong>Masuk disini</strong></a>! Anda bisa melihat-lihat koleksi kami!</p>
                </form>
                </div>

                <div id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab" class="tab-pane fade show active">
                  <h3 class="text-center text-uppercase">Masuk Ke Akun Anda</h3>
                  <p class="text-center text-muted">Kami tidak akan posting atas nama Anda atau membagikan informasi apapun tanpa persetujuan Anda.</p>
                  <hr>
                  <form action="<?php echo base_url('index.php/Login/do_login');?>" method="post">
                  <div class="form-group">
                    <label for="email-login"><strong>Alamat Email*</strong></label>
                    <input id="email-login" type="text" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                    <label for="password-login"><strong>Password*</strong></label>
                    <input id="password-login" type="password" class="form-control" name="password">
                  </div>
                  <div class="text-center">
                    <p><button type="submit" name="login" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Masuk</button></p>
                  </div>
                  <p class="text-center text-muted">Belum terdaftar?</p>
                  <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! Mudah dan anda bisa mendapatkan berbagai diskon spesial dari kami!</p>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
        <div class="container">
        <a href="<?php echo base_url();?>index.php/home" class="navbar-brand-centered"><img src="<?php echo base_url();?>assets/img/logogad-big.png" alt="GAD logo" class="d-none d-md-inline-block"><span class="sr-only">GAD - go to homepage</span></a>

        <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
         <a href="<?php echo base_url();?>index.php/home" class="navbar-brand ml-auto d-inline-block d-md-none"><img src="<?php echo base_url();?>assets/img/logogad-small.png" ><span class="sr-only">GAD - go to homepage</span></a>

       
    
        <div id="navigation" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="<?php echo base_url();?>">Home <!-- <b class="caret"></b> --></a></li>

            <li class=""><a href="<?php echo base_url();?>index.php/wanita">Wanita<b class="caret"></b></a></li>

            <li class=""><a href="<?php echo base_url();?>index.php/pria" >Pria<b class="caret"></b></a></li>

                <!-- ========== FULL WIDTH MEGAMENU ==================-->
              <li class=""><a href="<?php echo base_url();?>index.php/hadiah">Hadiah Wisuda<b class="caret"></b></a></li>
          </ul>
        </div>
        
        <ul class="nav navbar ml-auto">
                <div class="panel-body d-none d-md-inline-block">
                  <form role="search">
                    <div class="input-group">
                      <input type="text" placeholder="  Search" class="form-control-grey"><span class="input-group-btn">
                        <button type="submit" class="btn btn-template-black"><i class="fa fa-search"></i></button>
                        <button type="submit" class="btn btn-template-black"><i class="fa fa-shopping-cart"></i></button></span>
                    </div></form></div></ul></div>
      </div>
    </div>
  </header>
      <!-- Navbar End-->
  <?php echo $contents; ?>
  
  <!-- FOOTER -->
      <footer class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h4 class="h4">Shops</h4>
              <ul class="list-unstyled footer-blog-list">
                <li class="d-flex align-items-center">
                <div class="text-left">
                <p></p>
                <p><a href="https://bootstrapious.com/free-templates">Wanita </a></p>
                <p><a href="https://bootstrapious.com/free-templates">Pria </a></p>
                <p><a href="https://bootstrapious.com/free-templates">Gift </a></p></div>
                </li>
              </ul>
              <hr class="d-block d-lg-none">
            </div>
             <div class="col-lg-3">
              <h4 class="h4">Information</h4>
              <ul class="list-unstyled footer-blog-list">
                <li class="d-flex align-items-center">
                <div class="text-left">
                <p></p>
                <p><a href="https://bootstrapious.com/free-templates">About Us </a></p>
                <p><a href="https://bootstrapious.com/free-templates">Customer Service </a></p>
                <p><a href="https://bootstrapious.com/free-templates">New Collection </a></p>
                <p><a href="https://bootstrapious.com/free-templates">Privacy Policy</a></p>
                <p><a href="https://bootstrapious.com/free-templates">Terms & Condition</a></p></div>
                </li>
              </ul>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <h4 class="h4">Contact</h4>
              <p class="text-uppercase"><strong>DTETI UGM.</strong><br> Gadjah Mada University <br>Information Technology <br>Yogyakarta <br><strong>Indonesia</strong></p><a href="contact.html" class="btn btn-template-main-peach">Go to contact page</a>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <h4 class="h5">Stay Connected</h4>
             <!--  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> -->
             <ul class="social-custom list-inline">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
              <hr>
              <h4 class="h5">Subscribe</h4>
              <form>
                <div class="input-group">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i></button>
                  </div>
                </div>
              </form>
              <hr class="d-block d-lg-none">
            </div>
          </div>
        </div>
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy; 2018. Your company / name goes here</p>
              </div>
              <div class="col-lg-8 text-right text-center-md">
                <p>Template design by <a href="https://bootstrapious.com/free-templates">Bootstrapious Templates </a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </div>
      </footer>

    <!-- Javascript files-->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url();?>assets/vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="<?php echo base_url();?>assets/vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="<?php echo base_url();?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/front.js"></script>
  </body>
</html>