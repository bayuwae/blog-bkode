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
			<b><p style="font-size: 50px;">Setting</p></b>

			<div class="card">
				<div class="card-header">
					<b>Profile Settings</b>
					<a href="<?= site_url('admin/setting/edit_profile') ?>"><button type="button" class="btn btn-outline-success m-1"><i class="ti ti-pencil-minus"> Edit Profile</i></button></a>
				</div>
				<div class="card-body">
					Name: <span class="text-gray"><?= html_escape($current_user->name) ?></span>
					<br>
					Email: <span class="text-gray"><?= html_escape($current_user->email) ?></span>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<b>Security & Password</b>
					<a href="<?= site_url('admin/setting/edit_password') ?>"><button type="button" class="btn btn-outline-success m-1"><i class="ti ti-pencil-minus"> Edit Password</i></button></a>
				</div>
				<div class="card-body">
					Your Password: <span class="text-gray">******</span>
					<br>
					Last Changed: <span class="text-gray"><?= html_escape($current_user->password_update_at) ?></span>
				</div>
			</div>

			
		</div>
	</div>
</div>
	</main>


	<?php if ($this->session->flashdata('message')) : ?>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('message') ?>'
			})
		</script>
	<?php endif ?>

	<script src="<?= base_url('assets/admin/libs/jquery/dist/jquery.min.js')?>"></script>
  <script src="<?= base_url('assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?= base_url('assets/admin/js/sidebarmenu.js')?>"></script>
  <script src="<?= base_url('assets/admin/js/app.min.js')?>"></script>
  <script src="<?= base_url('assets/admin/libs/simplebar/dist/simplebar.js')?>"></script>
</body>

</html>