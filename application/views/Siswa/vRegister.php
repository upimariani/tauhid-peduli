<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register Siswa</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('asset/AdminLTE/') ?>plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url('asset/AdminLTE/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('asset/AdminLTE/') ?>dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
	<div class="register-box">
		<div class="register-logo">
			<a href="<?= base_url('asset/AdminLTE/') ?>index2.html"><b>Register</b>Siswa</a>
		</div>
		<?php if ($this->session->userdata('error')) {
		?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5><i class="icon fas fa-ban"></i> Alert!</h5>
				<?= $this->session->userdata('error') ?>
			</div>
		<?php
		} ?>
		<div class="card">
			<div class="card-body register-card-body">
				<p class="login-box-msg">Register a new akun</p>

				<form action="<?= base_url('Siswa/cAuthSiswa/register') ?>" method="post">
					<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
					<div class="input-group mb-3">
						<input type="text" value="<?= set_value('nama') ?>" name="nama" class="form-control" placeholder="Nama Lengkap">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
					<div class="input-group mb-3">
						<select name="jk" class="form-control">
							<option value="">--Pilih Jenis Kelamin---</option>
							<option value="Perempuan">Perempuan</option>
							<option value="Laki - Laki">Laki - Laki</option>
						</select>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-venus-mars"></span>
							</div>
						</div>
					</div>
					<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
					<div class="input-group mb-3">
						<input name="alamat" type="text" value="<?= set_value('alamat') ?>" class="form-control" placeholder="Alamat Lengkap">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-map-marker"></span>
							</div>
						</div>
					</div>
					<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
					<div class="input-group mb-3">
						<div class="input-group-append">
							<div class="input-group-text">
								<span>+62</span>
							</div>
						</div>
						<input type="number" name="no_hp" value="<?= set_value('no_hp') ?>" class="form-control" placeholder="Nomor Telepon">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-phone"></span>
							</div>
						</div>
					</div>
					<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
					<div class="input-group mb-3">
						<input type="text" name="username" value="<?= set_value('username') ?>" class="form-control" placeholder="Username">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-users-cog"></span>
							</div>
						</div>
					</div>
					<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
					<div class="input-group mb-3">

						<input type="password" name="password" value="<?= set_value('password') ?>" class="form-control" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<?= form_error('kon_password', '<small class="text-danger pl-3">', '</small>'); ?>
					<div class="input-group mb-3">
						<input type="password" name="kon_password" value="<?= set_value('kon_password') ?>" class="form-control" placeholder="Retype password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">

						<!-- /.col -->
						<div class="col-12">
							<button type="submit" class="btn btn-primary btn-block">Register</button>
						</div>
						<!-- /.col -->
					</div>
				</form>


				<a href="<?= base_url('Siswa/cAuthSiswa') ?>" class="text-center">I already have a akun</a>
			</div>
			<!-- /.form-box -->
		</div><!-- /.card -->
	</div>
	<!-- /.register-box -->

	<!-- jQuery -->
	<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('asset/AdminLTE/') ?>dist/js/adminlte.min.js"></script>
</body>

</html>
