<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php $this->load->view('_parti/head.php'); ?>
<body>
    
	<section>
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
</section>


<section class="section inner-page">

<main id="main">
	<div class="container-fluid">
	<div class="col-md-18  slideInUp" style="box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.2); border-radius: 5%; ">
		<div class="step">
		<div class="image-container">
			<img src="<?= base_url('assets/img/java1.png')?>" 
			style="
			border-radius: 8%;
			float: left;
			 margin-right: 20px; 
			 width: 80px; 
			 width: 200px; /* Lebar kotak */
			  height: 200px; /* Tinggi kotak */
			  overflow: hidden; /* Menghilangkan konten yang keluar dari kotak */
			  box-shadow: -3px 4px 5px rgba(0, 0, 0, 0.2); /* Bayangan gambar */">

			<div style="margin-left: 20px;">
				<h1>Java programming</h1>
				<h1>language</h1>
			</div>
		</div>
     </div>
   </div>
</div><br><br><br>


<div class="container-fluid">
	<div class="row">
		 <div class="col-md-18 slideInUp" style="box-shadow: 3px 1px 6px rgba(0, 0, 0, 0.2); border-radius: 20%; ">
		<div class="step">
            
            <div style="color: black; font-size: 20px;">
			<p>Bahasa pemrograman Java adalah bahasa pemrograman yang dikembangkan oleh sebuah tim yangh bernama <i>"GREEN TEAM".</i> Green team terdiri dari beberapa orang termasuk<b> James Gosling, Mike Sheridan, dan Patrick Naughton</b> sebagai peran utama dalam pengembangan awal bahasa java di Sun Microsystems pada tahun 1991. Java pertama kali dirilis oleh Sun Microsystems pada tahun 1995. Bahasa ini pertamakaili dikenal dengan nama <b>"Oak".</b> Gosling menamakan bahasa pemograman barunya dengan nama Oak, hal ini terinspirasi dari nama sebuah pohon yang bisa ia lihat dari jendela kantornya; ia kemudian menamainya Green, dan kemudian mengganti namanya menjadi Java, berasal dari kopi Jawa (Java Coffee) , yang katanya banyak dikonsumsi dalam jumlah besar oleh pencipta bahasa ini.</p>
			<p>Berikut adalah foto-foto tokoh dalam pengembangan bahasa pemrograman Java: </p>
          
        <style>

  .slideInUp {
    opacity: 0;
    transform: translateY(20px);
    animation: slideInUpAnimation 1s ease-out forwards;
  }

  @keyframes slideInUpAnimation {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

    .feature-1 {
        position: relative;
        overflow: hidden;
    }

    .feature-1 img {
        transition: transform 0.3s ease-in-out;
    }

    .feature-1:hover img {
        transform: scale(1.1);
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .feature-1:hover .overlay {
        opacity: 1;
    }
</style>

<div class="row">
    <div class="col-md-4">
        <div class="col-md-10 slideInUp">
            <div class="step">
                <div class="feature-1 text-center">
                    <img src="<?= base_url('assets/img/petrik.jpg')?>" style="width: 150px;">
                    <div class="overlay">Patrick Naughton</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="col-md-10 slideInUp">
            <div class="step">
                <div class="feature-1 text-center">
                    <img src="<?= base_url('assets/img/james.jpg')?>" style="width: 220px;">
                    <div class="overlay">James Gosling</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="col-md-10 slideInUp">
            <div class="step">
                <div class="feature-1 text-center">
                    <img src="<?= base_url('assets/img/mike.jpg')?>" style="width: 220px;">
                    <div class="overlay">Mike Sheridan</div>
                </div>
            </div>
        </div>
    </div>
</div>







			<br><br><br>
			<p>Salah satu fitur utama yang membedakan Java dari bahasa pemrograman lain adalah <b>"platform neutrality"</b> atau kemampuan untuk menjalankan program Java di berbagai platform tanpa perlu memodifikasinya. Hal ini dicapai dengan menggunakan mesin virtual Java (Java Virtual Machine atau JVM).</p>

		</div>
		</div>

	</div>
	<!-- --------------------- -->
		
	<!-- --------------------- -->
	</div>
</div>
</main>

</section>



</body>
</html>