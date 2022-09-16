<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Laporan Daarut Tauhid Peduli</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Laporan</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">


					<!-- Main content -->
					<div class="invoice p-3 mb-3">
						<!-- title row -->
						<div class="row">
							<div class="col-12">
								<h4>
									<i class="fas fa-globe"></i> Laporan Hasil Analisis
									<small class="float-right">Date: <?= date('Y-m-d') ?></small>
								</h4>
							</div>
							<!-- /.col -->
						</div>


						<!-- Table row -->
						<div class="row">
							<div class="col-12 table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Rangking</th>
											<th>Nama Siswa</th>
											<th>Tempat, Tanggal Lahir</th>
											<th>Nama Orang Tua</th>
											<th>Pekerjaan Orang Tua</th>
											<th>Pendapatan Orang Tua</th>
											<th>Hasil Perhitungan</th>
										</tr>
									</thead>
									<tbody>
										<?php
										foreach ($lap as $key => $value) {
										?>
											<tr>
												<td><?= $value->keputusan ?></td>
												<td><?= $value->nama_siswa ?></td>
												<td><?= $value->tempat_lahir ?> <?= $value->tanggal_lahir ?></td>
												<td><?= $value->nama_ortu ?></td>
												<td><?= $value->pekerjaan_ortu ?></td>
												<td>Rp. <?= number_format($value->pendapatan_ortu)  ?></td>
												<td><?= $value->hasil ?></td>
											</tr>
										<?php
										}
										?>

									</tbody>
								</table>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->


						<!-- this row will not appear when printing -->
						<div class="row no-print">
							<div class="col-12">
								<button onclick="window.print()" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
							</div>
						</div>
					</div>
					<!-- /.invoice -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
