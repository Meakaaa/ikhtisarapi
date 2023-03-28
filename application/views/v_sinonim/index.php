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
							<i class="fa-solid fa-book-bookmark"></i>
								Data Kata Sinonim</h3>
						</div>
						<div class="col-sm-6">
							<a role="button" class="btn btn-primary mt-2 float-lg-right"
								href="<?php echo site_url('kata/simpan')?>"><i class="fa-solid fa-plus"></i> Tambah
								Data</a>
						</div>

					</div>
				</div>
			</div>

			<div class="container-2xl mx-3 py-3">
				<center>
					<table id="myTable" class="table table-hover text-center" style="width:100%">
						<thead class="text-white" style="background-color: #578449">
							<tr>
								<th class="">ID</th>
								<th class="">ID Kata</th>
								<th class="">Sinonim</th>
								<th class="">Aksi</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($sinonim as $l):  ?>
							<tr>
								<td class=""><?php echo $l['id'] ?></td>
								<td class=""><?php echo $l['id_kata'] ?></td>
								<td class=""><?php echo $l['sinonim'] ?></td>
								<td class="">
									<a href="<?php echo site_url('kata/ubah/' . $l['id']) ?>"
										class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
									<a href="<?php echo site_url('kata/hapus/' . $l['id']) ?>"
										class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</center>
			</div>

		</div>

		<?php $this->load->view('layout_admin/footer'); ?>



		<?php $this->load->view('layout_admin/script'); ?>
</body>

</html>
