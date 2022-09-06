<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Tes Tulis</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Tes Tulis</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="col-md-6">
				<div class="card card-default">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-bullhorn"></i>
							Informasi
						</h3>
					</div>
					<!-- /.card-header -->
					<?php
					if ($siswa->tes_tulis == '1') {
					?>
						<div class="card-body">
							<div class="callout callout-success">

								<h5>Berhasil!</h5>
								<p>Anda telah selesai mengerjakan tes Tulis! Silahkan Menunggu Penilaian!</p>
							</div>
						<?php
					} else if ($siswa->tes_tulis == '0') {
						?>
							<div class="card-body">
								<div class="callout callout-danger">

									<h5>Petunjuk Pengerjaan!</h5>
									<p>1. Bacalah Soal Dengan Teliti</p>
									<p>2. Tulis Jawaban yang paling tepat</p>
									<p>3. Jika telah selesai mengejakan klik button submit untuk mengakhiri tes tulis anda</p>
								</div>
								<a href="<?= base_url('Siswa/cTesTulis/soal') ?>" class="btn btn-warning">Mulai</a>
							</div>
						<?php
					} else {
						?>
							<div class="card-body">
								<div class="callout callout-success">

									<h5>Informasi!</h5>
									<p>Bobot Nilai Tes Tulis Anda <strong><?= $siswa->tes_tulis ?></strong>!</p>
								</div>
							<?php
						}
							?>
							<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
						<!-- /.col -->
				</div>
	</section>
</div>