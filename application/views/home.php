<!DOCTYPE html>
<html lang="en">

<head>
 <?php $this->load->view('_parti/head.php'); ?>
</head>

<body>
  <?php $this->load->view('_parti/navbar.php');?>



  <!-- ======= Hero Section ======= -->
  <section class="hero-section">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-8 text-center text-lg-start">
              <h1 data-aos="fade-right">WELCOME TO BKODE</h1> 
              <h3 data-aos="fade-right" style="color: white;">TEMPATNYA DUNIA (IT)</h3>
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100"></p>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="<?= site_url('page/contact')?>" class="btn btn-outline-white">Contct Us</a></p>
            </div>
            <div class="col-lg-4 iphone-wrap" data-aos= "fade-left" data-aos-delay= "200">
              <img src="<?= base_url('assets/img/ka.png')?>" alt="Image" class="phone-1"  style="width: 300px;">
              <img src="<?= base_url('assets/img/1ki.png')?>" alt="Image" class="phone-2"  data-aos-delay="200" style="width: 300px;">
             
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Home Section ======= -->





    <section class="section"style="display: flex; align-items: center; justify-content: center;">

      <div class="container-fluid ">
        <div class="row justify-content-center text-center mb-5" data-aos="fade">
          <div class="col-md-6 mb-5">
            <img src="assets/img/1ki.png" alt="Image" class="img-fluid" style="width: 300px">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4" data-aos= "fade-up">
            <div class="step">
              <span class="number">01</span>
              <h3>Sign Up</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos= "fade-up">
            <div class="step">
              <span class="number">02</span>
              <h3>Create Profile</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos= "fade-up">
            <div class="step">
              <span class="number">03</span>
              <h3>Enjoy the app</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="section">
      <div class="container">
    <div class="row align-items-center">
        <div class="col-md-4 me-auto" data-aos= "fade-left" style="margin-left: 50px;">
            <h2 class="mb-4 text-end">Gedung Perusahaan BKODE</h2>
            <p class="mb-4 text-end">Foto disamping merupakan gedung perusahaan BKODE yang bediri pada tahun 2020.</p>
        </div>
         <div class="col-md-6" data-aos="fade-left">
            <div class="gambar  step" style="border-radius: 8%;">
           <img src="<?= base_url('assets/img/gedung.jpg')?>" alt="Image" class="img-fluid" style="width: 500px; height: 700px; margin-left: 30px; border-radius: 8%;">

          </div>
          </div>
    </div>
</div>

    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 ms-auto order-2" data-aos="fade-right" style="margin-right: 50px;">
            <h2 class="mb-4">Tim Sukses BKODE</h2>
            <p class="mb-4">Foto disamping merupakan sebuah tim sukses yang terdiri dari beberapa orang hebat yang bekerja didalam perusahaan BKODE.</p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
           <style>
  .gambar {
    border-radius: 8%;
    overflow: hidden; /* Menyembunyikan overflow agar efek hover terlihat pada area yang diinginkan */
  }

  .gambar img {
    width: 500px;
    height: 700px;
    margin-left: 30px;
    border-radius: 8%;
    transition: transform 0.3s; /* Efek transisi untuk smoothness */
  }

  .gambar:hover img {
    transform: scale(1.1); /* Perbesar gambar saat dihover */
  }
</style>

<!-- ... (kode HTML lainnya) ... -->

<div class="gambar  step">
  <img src="<?= base_url('assets/img/tim.jpg')?>" alt="Image" class="img-fluid">
</div>

          </div>
        </div>
      </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <section class="section border-top border-bottom">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-4">
            <h2 class="section-heading">Ulasan Dari Pengguna Kami</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-7">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Website yang luar biasa!</h3>
                    <blockquote>
                      <p>website ini dapat membantu kita untuk menambah wawasan tentang dunia teknologi yang sangat luas untuk kita pelajari.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="<?= base_url('assets/img/joko.jpg')?>" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Jokowidodo</span> 
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Website ini sangat mudah untuk di akses!</h3>
                    <blockquote>
                      <p>Kita dapat dengan mudah mengakses website ini karena tidak sulit untuk memasuki website ini dan website ini menyediakan berbagai macam artikel.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="<?= base_url('assets/img/putin.jpg')?>" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Vladimir Putin</span> 
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Fungsionalitas yang luar biasa!</h3>
                    <blockquote>
                      <p>Kalian harus baca dan terus mengakses website ini karen website ini sangatlah bagus dan akan update setiap harinya tentang teknologi terbaru.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="<?= base_url('assets/img/elon.jpg')?>" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Elon Musk</span> 
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

 <section class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">SEJARAH BAHASA PEMROGRAMAN</h2>
          </div>
        </div>

       <style>
  .feature-1 {
    position: relative;
    overflow: hidden;
  }

  .feature-1 img {
    transition: transform 0.3s ease-in-out, filter 0.5s ease-in-out;
  }

  .feature-1:hover img {
    transform: scale(1.1);
    filter: brightness(1.5);
  }

  .overlay {
    font-size: 40px;
    font-family: Berlin Sans FB Demi;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.10); /* Warna bersinar */
    color: #333; /* Warna teks */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
    transform: translateY(20px); /* Melayang 20px dari bawah saat awalnya */
  }

  .feature-1:hover .overlay {
    opacity: 1;
    transform: translateY(0);
  }
</style>

<div class="row">
  <div class="col-md-4" data-aos="fade-up"  data-aos-delay="">
    <div class="col-md-12">
      <div class="step">
        <div class="feature-1 text-center">
          <img src="<?= base_url('assets/img/html.png')?>" alt="Image" style="width: 125px; padding: 20px 0;"><br>
          <h3 class="mb-3"></h3>
        
          <div class="overlay">HTML</div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
    <a href="<?= site_url('page/java')?>">
      <div class="col-md-12">
        <div class="step">
          <div class="feature-1 text-center">
            <div style="transform: scale(1.1); transition: transform 0.3s ease;">
              <img src="<?= base_url('assets/img/java.png')?>" alt="Image" style="width: 125px; padding: 20px 0;"><br>
              <h3 class="mb-3"></h3>
            </div>
           <div class="overlay">JAVA</div>
          </div>
        </div>
      </div>
    </a>
  </div>

  <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
    <div class="col-md-12">
      <div class="step">
        <div class="feature-1 text-center">
          <img src="<?= base_url('assets/img/css.png')?>" alt="Image" style="width: 125px; padding: 20px 0;"><br>
          <h3 class="mb-3"></h3>
     
          <div class="overlay">CSS</div>
        </div>
      </div>
    </div>
  </div>
</div><br>


  <div class="row">
  <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
    <div class="col-md-12">
      <div class="step">
        <div class="feature-1 text-center">
          <img src="<?= base_url('assets/img/ular.png')?>" alt="Image" style="width: 125px; padding: 20px 0;"><br>
          <h3 class="mb-3"></h3>
        
          <div class="overlay">Python</div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
    <a href="<?= site_url('page/java')?>">
      <div class="col-md-12">
        <div class="step">
          <div class="feature-1 text-center">
            <div style="transform: scale(1.1); transition: transform 0.3s ease;">
              <img src="<?= base_url('assets/img/js.png')?>" alt="Image" style="width: 125px; padding: 20px 0;"><br>
              <h3 class="mb-3"></h3>
            </div>
           <div class="overlay">Java Scrip</div>
          </div>
        </div>
      </div>
    </a>
  </div>

  <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
    <div class="col-md-12">
      <div class="step">
        <div class="feature-1 text-center">
          <img src="<?= base_url('assets/img/php.png')?>" alt="Image" style="width: 125px; padding: 20px 0;"><br>
          <h3 class="mb-3"></h3>
     
          <div class="overlay">PHP</div>
        </div>
      </div>
    </div>
  </div>
</div><br>

<div class="row">
  <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
    <div class="col-md-12">
      <div class="step">
        <div class="feature-1 text-center">
          <img src="<?= base_url('assets/img/c.webp')?>" alt="Image" style="width: 125px; padding: 20px 0;"><br>
          <h3 class="mb-3"></h3>
        
          <div class="overlay">C</div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
    <a href="<?= site_url('page/java')?>">
      <div class="col-md-12">
        <div class="step">
          <div class="feature-1 text-center">
            <div style="transform: scale(1.1); transition: transform 0.3s ease;">
              <img src="<?= base_url('assets/img/c+.png')?>" alt="Image" style="width: 125px; padding: 20px 0;"><br>
              <h3 class="mb-3"></h3>
            </div>
           <div class="overlay">C++</div>
          </div>
        </div>
      </div>
    </a>
  </div>

  <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
    <div class="col-md-12">
      <div class="step">
        <div class="feature-1 text-center">
          <img src="<?= base_url('assets/img/ini.png')?>" alt="Image" style="width: 125px; padding: 20px 0;"><br>
          <h3 class="mb-3"></h3>
     
          <div class="overlay">C#</div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

        </div>

      </div>
    </section>





    <!-- ======= CTA Section ======= -->
    <?php $this->load->view('_parti/cta.php');?> 
    <!-- End CTA Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php $this->load->view('_parti/footer.php');?> 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
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