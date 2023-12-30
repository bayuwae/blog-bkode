<!DOCTYPE html>
<html lang="en">

<head>
  
</head>
<?php $this->load->view('_parti/head.php');?>
<body>
<?php $this->load->view('_parti/navbar.php');?>

  <main id="main">

    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text" >
                <h1 data-aos= "fade-down">Artikel</h1>
                <p data-aos= "fade-down">Pilih artikel kesukaanmu</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

   <!-- HTML -->
<!-- HTML -->
<section class="section">
    <div class="container-fluid">
        <div class="row d-flex justify-content-start align-items-center" data-aos="fade-up">
            <?php foreach ($articles as $article) : ?>
                <a href="<?= site_url('article/' . $article->slug) ?>" class="col-md-3 my-2"> <!-- Perubahan di sini -->
                    <div class="card mx-auto border-0" style="width: 20rem; border-radius: 8%;">
                        <div class="step">
                            <div class="feature-1 text-center">
                                <!-- Gunakan gambar artikel sebagai card image -->
                                <img src="<?= base_url('assets/img/china.jpg') ?>" style="width: 250px;" class="card-img-top" alt="Article Image">
                                <div class="card-body">
                                    <!-- Gunakan judul artikel sebagai card title -->
                                    <h5 class="card-title"><?= $article->title ? html_escape($article->title) : "No Title" ?></h5>
                                    <!-- Gunakan cuplikan artikel sebagai isi card -->
                                    <!-- Tambahkan tombol/link untuk menuju halaman artikel -->
                                    <!-- Tidak ada yang ditambahkan di sini -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach ?>
        </div>
    </div>
</section>

<style>
    /* CSS untuk efek zoom pada gambar */
    .card-img-top {
        transition: transform 0.3s; /* Efek transisi untuk smoothness */
    }

    .card-img-top:hover {
        transform: scale(1.1); /* Perbesar gambar saat dihover */
    }
</style>
    


<!-- End CTA Section -->
 <?php $this->load->view('_parti/cta.php');?>
<!-- End #main -->

  </main>

  <!-- ======= Footer ======= -->
  <?php $this->load->view('_parti/footer.php');?>



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