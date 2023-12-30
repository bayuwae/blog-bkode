<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
	<link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.snow.css">
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

	 <div class="body-wrapper">
      <div class="container-fluid">
		<div class="content">
			<b><p style="font-size: 50px;">Buat Article Baru</p></b>

            <form action="" method="POST">
			 <div class="card">
                <div class="card-body">
                  	
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text"  class="form-control" name="title" class="<?= form_error('title') ? 'invalid' : '' ?>" placeholder="Judul artikel" value="<?= set_value('title') ?>" />
                      <div class="invalid-feedback">
						<?= form_error('title') ?>
					</div>
                    </div>

                   <!--  <div class="mb-3">
                  <form action="" method="post" enctype="multipart/form-data">
                      <label for="title" class="form-label">Gambar</label>
                      <input type="file" class="form-control" id="gambar" accept="image">
                  </form>
                    </div> -->

                    <div class="mb-3">
                      <label for="content" class="form-label">Konten</label>
                      <input type="hidden"  class="form-control" name="content" value="<?= set_value('content') ?>">
                      <div id="editor" style="min-height: 160px;"><?= set_value('content') ?></div>
                    </div>
                </div>
            </div>

					<div>
					<button type="submit" name="draft" class="btn btn-outline-success m-1" value="true" style="font-size: 20px;"><i class="ti ti-download"></i> Save</button>
					<button type="submit" name="draft" class="btn btn-secondary m-1" value="false" style="font-size: 20px;"><i class="ti ti-brand-telegram"></i> Publish</button>
					<button type="reset" name="draft" class="btn btn-danger m-1" value="" style="font-size: 20px;"><i class="ti ti-rotate"></i> Reset</button>

					<div class="invalid-feedback">
						<?= form_error('draft') ?>
					</div>
				</div>
              </form>
			

			
			<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
			<script>
				var quill = new Quill('#editor', {
					theme: 'snow',
					modules: {
						toolbar: [
							[{header: [1,2,3,4,5,6, false]}],
							[{font:[] }],
							["bold", "italic"],
							["link", "blockqoute", "code-block", "image"],
							[{list: "ordered"},{script:"super"}],
							[{color: []},{background: []}],
						]
					}
				});
				quill.on('text-change', function(delta, oldDelta, source){
					document.querySelector("input[name='content']").value = quill.root.innerHTML;
				});
			</script>
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