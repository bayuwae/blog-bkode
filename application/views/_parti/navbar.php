<style>
  #header {
    transition: background-color 0.5s ease-in-out;
    background-color: transparent;
    padding: 20px 0;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    width: 100%;
    z-index: 997;
  }

  #header.header-scrolled {
    background-color: ; /* Ganti dengan warna yang diinginkan */
    padding: 15px 0;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  }

  /* Style untuk logo dan navigasi lainnya */
  /* ... */

</style>

<script>
  window.addEventListener('scroll', function () {
    const header = document.getElementById('header');
    const scrollTop = window.scrollY;

    if (scrollTop > 50) {
      header.classList.add('header-scrolled');
    } else {
      header.classList.remove('header-scrolled');
    }
  });
</script>

<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="logo">
      <h1><a href="<?= site_url('')?>">BKODE</a></h1>
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
