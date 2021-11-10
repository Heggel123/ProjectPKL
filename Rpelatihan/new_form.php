<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="hold-transition sidebar-mini">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div class="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div class="content-wrapper">

		<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

		<!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Riwayat Pelatihan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/rpelatihan/add') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">

                <div class="form-group">
                    <label for="bidang_pelatihan">Bidang Pelatihan</label>
                    <input type="text" class="form-control <?php echo form_error('bidang_pelatihan') ? 'is-invalid':'' ?>" id="bidang_pelatihan" placeholder="" name="bidang_pelatihan">
                    <div class="invalid-feedback">
                        <?php echo form_error('bidang_pelatihan') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tahun_pelatihan">Tahun Pelatihan</label>
                    <input type="date" class="form-control <?php echo form_error('tahun_pelatihan') ? 'is-invalid':'' ?>" id="tahun_pelatihan" placeholder="" name="tahun_pelatihan">
                    <div class="invalid-feedback">
                        <?php echo form_error('tahun_pelatihan') ?>
                    </div>
                  </div>                  
                  <div class="form-group">
                    <label for="sertifikat">Sertifikat</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input <?php echo form_error('sertifikat') ? 'is-invalid':'' ?>" id="sertifikat" name="sertifikat">
                        <label class="custom-file-label" for="sertifikat">Choose file</label>
                        <div class="invalid-feedback">
                            <?php echo form_error('sertifikat') ?>
                        </div>
                      </div>
                    </div>
                  </div>                  
                  <!-- /.card-body -->
  
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-warning" onclick="history.back();">Kembali</button>
                </div>
              </form>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->		
	</div>
    <!-- /.content-wrapper -->
    
    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
    
</body>
</html>