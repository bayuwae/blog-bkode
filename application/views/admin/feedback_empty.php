<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

	<div class="body-wrapper">
      <div class="container-fluid">
		<div class="content">
			<b><p style="font-size: 50px;">Halaman Feedback</p></b>

			<p>Tidak ada pesan</p>

			
		</div>
	</div>
</div>
	</main>

	<script src="<?= base_url('assets/admin/libs/jquery/dist/jquery.min.js')?>"></script>
  <script src="<?= base_url('assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?= base_url('assets/admin/js/sidebarmenu.js')?>"></script>
  <script src="<?= base_url('assets/admin/js/app.min.js')?>"></script>
  <script src="<?= base_url('assets/admin/libs/simplebar/dist/simplebar.js')?>"></script>
</body>

</html>