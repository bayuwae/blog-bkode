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
            <h1>Unggah Avatar</h1>

            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="avatar">Pilih Gambar</label>
                    <input type="file" name="avatar" id="avatar" accept="image/png, image/jpeg, image/jpg, image/gif">
                </div>

                <?php if(isset($error)) :?>
                    <div class="invalid-feedback"><?= $error ?></div>
                <?php endif; ?>

                <div>
                    <button type="submit" name="save" class="button button-primary">Unggah</button>
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