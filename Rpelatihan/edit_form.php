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
                <h3 class="card-title">Edit Riwayat</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/experiencce/edit') ?>" method="post" enctype="multipart/form-data" onSubmit="return validasi()" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $rpelatihan->id_rpelatihan ?>" />
                <div class="form-group">
                    <label for="bidang_pelatihan">Bidang Pelatihan</label>
                    <input value="<?php echo $rpelatihan->bidang_pelatihan ?>" type="text" class="form-control <?php echo form_error('bidang_pelatihan') ? 'is-invalid':'' ?>" id="bidang_pelatihan" placeholder="bidang_pelatihan" name="bidang_pelatihan" required>
                    <div class="invalid-feedback">
                        <?php echo form_error('bidang_pelatihan') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tahun_pelatihan">Tahun Pelatihan</label>
                    <input type="text" value="<?php echo $rpelatihan->tahun_pelatihan ?>" class="form-control <?php echo form_error('tahun_pelatihan') ? 'is-invalid':'' ?>" id="tahun_pelatihan" placeholder="tahun_pelatihan" name="tahun_pelatihan" required>
                    <div class="invalid-feedback">
                        <?php echo form_error('tahun_pelatihan') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sertifikat">Sertifikat</label></br>
                    <img class="img-bordered-sm" style="height: auto;width: 30%;" src="<?php echo base_url('assets/img/sertifikat/'. $rpelatihan->sertifikat ) ?>" alt="user image">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="hidden" name="old_image" value="<?php echo $rpelatihan->sertifikat ?>" />
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