<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('layout_admin/head'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<div class="preloader position-fixed  flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="<?php echo base_url();?>/assets/adminlte3/dist/img/AdminLTELogo.png"
				alt="AdminLTELogo" height="60" width="60">
		</div>

		<?php $this->load->view('layout_admin/header'); ?>

		<?php $this->load->view('layout_admin/sidebar'); ?>

		<div class="content-wrapper">

			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h3 class="m-0 font-weight-bold">
								<i class="nav-icon fa-solid fa-file"></i>
								Update Data Page</h3>
						</div>
					</div>
				</div>
			</div>

			<div class="card mx-10 my-10">
        <form action="" method="post">
              <?= validation_errors(); ?>
              <div class="card-body">
                  <div class="mb-3">
                      <!-- <label for="" class="form-label">ID</label> -->
                      <input type="text" name="id" class="form-control" value="<?php echo $kata->id ?>" hidden>
                      <!-- <input type="text" name="id_parent" class="form-control" value="<?php echo $kata->id_parent ?>"> -->
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Kata</label>
                      <input type="text" name="kata" class="form-control" value="<?php echo $kata->kata ?>">
                  </div>
                  <div class="mb-3">
                      <label for="" class="form-label">Kesimpulan</label>
                      <input type="text" name="kesimpulan" class="form-control" value="<?php echo $kata->kesimpulan ?>">
                  </div>
                  <div class="mb-3">
                      <input type="submit" value="Simpan" class="btn bg-red-500 text-slate-100">
                  </div>
          </form>
			</div>

		</div>

		<?php $this->load->view('layout_admin/footer'); ?>

	</div>

	<?php $this->load->view('layout_admin/script'); ?>
</body>

</html>
