<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_parti/head.php'); ?>
</head>

<body>
 <header id="header" class="fixed-top d-flex align-items-center" style="background-color: #6A5ACD; color: white;">
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

 <section class="section inner-page">
   
     <main id="main">

      <!-- ======= Blog Single ======= -->
      <div class="main-content paddsection">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-md-offset-2">
        <div class="container-main single-main">
          <div class="step" style="border-radius: 4%;">
            <div class="block-main mb-30 text-center">
            <div class="step" style="border-radius: 4%;"> <!-- Mengatur gambar di tengah -->
              <img src="<?= base_url('assets/img/china.jpg') . $article->gambar; ?>" class="img-responsive" alt="gambar" style="width: 600px; height: 380px; border-radius: 2%;">
            </div>
          </div>
          <br><br>
          <div class="content-main single-post padDiv">
            <div class="journal-txt">
              <h2 class="mb-3"><?= $article->title ?></h2>
            </div>
            <div class="post-meta">
              <ul class="list-unstyled mb-0">
                <li class="author">Oleh : <a href="#">BKODE</a></li>
                <li class="date">Dibuat pada : <a href="#"><?= $article->created_at ?></a></li>
              </ul>
            </div>
            <div style="width:100%; color: black;">
              <p class="mb-30" style="word-wrap: break-word; "><?= $article->content ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><br><br>

<?php $this->load->view('_parti/cta.php') ?>

<?php $this->load->view('_parti/footer.php') ?>

<script src="<?= base_url('assets/vendor/aos/aos.js')?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js')?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js')?>"></script>
 <script type="text/javascript">
    AOS.init();
  </script>
  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js')?>"></script>



	
</body>

</html>