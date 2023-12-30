<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/_partials/head.php'); ?>
</head>

<body>
  <!--  Body Wrapper -->
  <?php $this->load->view('admin/_partials/side_nav.php'); ?>
<div class="body-wrapper">

      <div class="container-fluid">
         <b><p style="font-size: 50px;">Dashboard</p></b>
        <!--  Row 1 -->
        <div class="row">
          <div style="display:flex; gap: 3em">
            <div class="card text-center" style="width: 300px; height: 200px; display: flex; flex-direction: column; justify-content: center; box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);">
              <h1 style="margin-bottom: 0;">
                <?= $article_count ?>
              </h1>
           <b><p style="margin-top: 0; font-size: 18px;"><a href="<?= site_url('admin/post') ?>">Artikel</a></p></b>
        </div>

  
        <div class="card text-center" style="width: 300px; height: 200px; display: flex; flex-direction: column; justify-content: center; box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);">
          <h1 style="margin-bottom: 0;">
            <?= $feedback_count ?>
          </h1>
          <b><p style="margin-top: 0; font-size: 18px;"><a href="<?= site_url('admin/feedback') ?>">Feedback</a></p></b>
        </div>
      </div>
    </div>
              
  <script src="<?= base_url('assets/admin/libs/jquery/dist/jquery.min.js')?>"></script>
  <script src="<?= base_url('assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?= base_url('assets/admin/js/sidebarmenu.js')?>"></script>
  <script src="<?= base_url('assets/admin/js/app.min.js')?>"></script>
  <script src="<?= base_url('assets/admin/libs/apexcharts/dist/apexcharts.min.js')?>"></script>
  <script src="<?= base_url('assets/admin/libs/simplebar/dist/simplebar.js')?>"></script>
  <script src="<?= base_url('assets/admin/js/dashboard.js')?>"></script>
  <script type="text/javascript">
    AOS.init();</script>
</body>

</html>