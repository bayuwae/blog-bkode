<html lang="en">
<head>
    <title>BKODE</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<?php $this->load->view('_parti/head.php');?>
<body style="background: url('<?= base_url('assets/img/hero-bg.jpg')?>') center center fixed; background-size: cover;">


<main id="main" >
<?php $this->load->view('_parti/navbar.php');?>
     <section class=" inner-page">

     
  <header id="header" class="fixed-top d-flex align-items-center" style="background-color: #; color: white;">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="<?= site_url('')?>">BKODE</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="<?= site_url('')?>">Home</a></li>
          <li><a href="<?= site_url('article')?>">Article</a></li>
          <li><a href="<?= site_url('page/contact')?>">Contact Us</a></li>
          <li><a href="<?= site_url('auth/login')?>">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
</section>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                
              </div>
            </div>
          </div>
        </div>
      </div>

    <br><br><br><br><br><br>


<div class="container-fluid" data-aos="fade-up">
    <div class="container-max-width position-relative">
        

        <?php if($this->session->flashdata('massage_login_error')): ?>
            <div class="invalid-feedback">
                    <?= $this->session->flashdata('massage_login_error') ?>
            </div>
        <?php endif ?>

        

        <form action="" method="post" style=" width: 100%; display: flex; justify-content: center; align-items: center;">
            <div style="padding: 20px; border-radius: 40px; height: 500px; background-color: white; box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.08);">
              
              

              <center>
                   <img src="<?= base_url('assets/img/i.png')?>" style="width: 80px;">
              <b><p style="color: black; font-size: 30px;">Login Admin</p></b>
              </center>
              <br>
                <div class="row-center" style="border-radius: 8%; box-shadow: 0px 7px 25px rgba(0, 0, 0, 0.1); width: 400px; height: 260px;">
                
                    <div class="col-md-3" style="">
                       
                    </div>
                     <label for="name" style="max-width: 80px; height: 30px; margin-left: 106px;">Email/Username*</label>
                    <div class="col-md-10" style="margin-left: 110px;">
                        <input style="border-radius: 8px; color:black; height: 40px;"type="text" name="username" class="<?= form_error('username') ? 'invalid' : '' ?>"
                         placeholder="Your username or email" value="<?= set_value('username') ?>" required />
                        <div class="invalid-feedback">
                            <?= form_error('username') ?>
                        </div>
                    </div>  
                                    
                <br>
                <div class="row">
                    <div class="col-md-3" style=" ">
                       
                    </div>
                     <label for="password" style="max-width: 80px; height: 30px;">Password*</label>
                    <div class="col-md-8" style=" margin-left: 110px;">
                         <input style="border-radius: 8px; color:black; height: 40px;" type="password" name="password" class="<?= form_error('password') ? 'invalid' : '' ?>"
                        placeholder="Enter your password" value="<?= set_value('password') ?>" required />
                        <div class="invalid-feedback">
                            <?= form_error('password') ?>
                        </div>
                    </div>
                </div>
                <div class="center" style="margin-left: 15px;">
                <div style=" display: flex; justify-content: center; padding: 20px; height: 80px; font-size: 24px;">
                    <button type="submit" class="btn btn-primary" value="Login"style="width: 200px; font-family: cabin;">Login</button>
                </div>
            </div>
          </div>
          </div>
        </form>
    </div>
</div>
</main>


<script src="<?= base_url('assets/vendor/aos/aos.js')?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js')?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js')?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js')?>"></script>

</body>
    
</body>
</html>