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
			<b><p style="font-size: 50px;">Halaman Artikel</p></b>

			<div class="toolbar">
				<a href="<?= site_url('admin/post/new') ?>"><button type="button" class="btn btn-outline-primary m-1" style="width: 200px; height: 50px; font-size: 16px;"><i class="ti ti-plus"></i>Tambah Article </button></a>

				 
               <a href="<?= site_url('admin/post/hapuskabeh')?>" class="btn btn-danger" style="margin-left: 635px; font-size: 16px;"><i class="ti ti-trash"></i> Hapus Artikel</a>
				

				<div class="d-flex align-items-center">
    <form action="" method="GET" class="d-flex align-items-center">
        <input type="search" class="form-control me-2" name="keyword" placeholder="Cari artikel" value="<?= html_escape($keyword) ?>">
        <input type="submit" value="Cari" class="btn btn-outline-success" style="width: auto;">
    </form>
   
</div>

			</div>

			<table class="table">
				<thead>
					<tr>
						<th>Title</th>
						<th style="width: 25%;" class="text-center">Status</th>
						<th style="width: 25%;" class="text-center"><spam style="margin-right: 70px;">Action</spam></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($articles as $article): ?>
					<tr>
						<td>
							<div><?= $article->title ?></div>
							<div class="text-gray"><small><?= $article->created_at ?><small></div>
						</td>
						<?php if($article->draft === 'true'): ?>
							<td class="text-center text-gray">Draft</td>
						<?php else: ?>
							<td class="text-center text-green">Published</td>
						<?php endif ?>
						<td>
							<div class="action">
								<a href="<?= site_url('article/'.$article->slug) ?>"><button type="button" class="btn btn-outline-secondary m-1"><i class="ti ti-eye"></i></button></a>
								<a href="<?= site_url('admin/post/edit/'.$article->id_article) ?>"><button type="button" class="btn btn-outline-success m-1"><i class="ti ti-pencil-minus"></i></button>
								<a href="#" data-delete-url="<?= site_url('admin/post/delete/'.$article->id_article) ?>" onclick="deleteConfirm(this)">
								<button type="button" class="btn btn-outline-danger m-1"><i class="ti ti-trash"></i></button></a>
							</div>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
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