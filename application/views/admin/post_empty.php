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

			<b><p style="font-size: 50px;">Artikel Kosong</p></b>

			<div>
				<a href="<?= site_url('admin/post/new') ?>"><button type="button" class="btn btn-outline-primary m-1" style="width: 200px; height: 50px; font-size: 16px;"><i class="ti ti-plus"></i>Tambah Article </button></a>
			</div>

			
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