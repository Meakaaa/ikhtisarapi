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
								Tambah Data Kata</h3>
						</div>
					</div>
				</div>
			</div>

			<div class="card mx-10 my-10">



				<form action="<?= base_url('kata/simpan'); ?>" method="POST">
					<div class="card-body">

						<div class="mb-3">
							<label for="" class="form-label">Kata</label>
							<input type="text" name="kata" class="form-control" id="exampleFormControlInput1"
								placeholder="Masukkan Kata">
						</div>

						<div class="mb-3">
							<label for="" \ class="form-label">Kesimpulan</label>
							<textarea class="form-control" name="kesimpulan" id="exampleFormControlTextarea1"
								rows="3" placeholder="Masukkan Kesimpulan"></textarea>
						</div>

						<div class="mb-3">
							<input type="submit" value="Simpan" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>

		</div>

		<?php $this->load->view('layout_admin/footer'); ?>

	</div>

	<?php $this->load->view('layout_admin/script'); ?>
</body>

</html>
