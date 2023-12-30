<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('admin/_partials/head.php') ?>
</head>
<body>
    <main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

	<div class="body-wrapper">
      <div class="container-fluid">
		<div class="content">
			<b><p style="font-size: 50px;">Edit Profil</p></b>

			<form action="" method="POST">
				<div>
					<label for="name">Name</label>
					<input type="text" name="name" class="<?= form_error('name') ? 'invalid' : '' ?>"
					value="<?= form_error('name') ? set_value('name') : $current_user->name ?>" 
					required maxlength="32"/>
					<div class="invalid-feedback">
						<?= form_error('name') ?>
					</div>
				</div>
				<div>
					<label for="email">Email</label>
					<input type="text" name="email" class="<?= form_error('email') ? 'invalid' : '' ?>"
					value="<?= form_error('email') ? set_value('email') : $current_user->email ?>" 
					required maxlength="32"/>
					<div class="invalid-feedback">
						<?= form_error('email') ?>
					</div>
				</div>

				<div>
					<button type="submit" name="save" class="button button-primary">Save Update</button>
				</div>
			</form>

			<?php $this->load->view('admin/_partials/footer.php') ?>
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