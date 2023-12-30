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

			<a href="<?= site_url('admin/feedback/hapuskomen')?>" class="btn btn-danger" style=" font-size: 16px;"><i class="ti ti-trash"></i> Reset Pesan</a>
			<br><br>

			<?php foreach($feedbacks as $feedback): ?>
			<div class="card">
				<div class="card-header">
					<div>
						<b><?= $feedback->name ?></b> <small class="text-gray"><?= $feedback->email ?></small>
					</div>
					<div><small class="text-gray"><?= $feedback->created_at ?></small></div>
				</div>
				<div class="container-fluid">
				<p><?= $feedback->massage ?></p>
				<a href="#" data-delete-url="<?= site_url('admin/feedback/delete/'.$feedback->id) ?>" onclick="deleteConfirm(this)">
				<button type="button" class="btn btn-outline-danger m-1"><i class="ti ti-trash"></i></button></a>
			</div>
		</div>
			<?php endforeach ?>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</div>
</div>
	</main>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function deleteConfirm(event){
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Are you sure to delete the item?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				confirmButtonColor: 'red'
			}).then(dialog => {
				if(dialog.isConfirmed){
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}
	</script>

	<?php if($this->session->flashdata('message')): ?>
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