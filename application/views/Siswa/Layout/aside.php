<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="<?= base_url('asset/AdminLTE/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Daarut Tauhid Peduli</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Selamat Datang, SISWA</a>
			</div>
		</div>
		<?php
		$siswa = $this->mSiswa->select_siswa();
		?>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<!-- <li class="nav-item">
					<a href="<?= base_url('Siswa/cDashboard') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'Siswa' && $this->uri->segment(2) == 'cDashboard') {
																						echo 'active';
																					}  ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Dashboard</p>
					</a>
				</li> -->
				<li class="nav-item">
					<a href="<?= base_url('Siswa/cDaftar') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'Siswa' && $this->uri->segment(2) == 'cDaftar') {
																						echo 'active';
																					}  ?>">
						<i class="nav-icon fas fa-user-lock"></i>
						<p>Pendaftaran</p>
					</a>
				</li>
				<li class="nav-item">
					<?php
					if ($siswa) {
					?>
						<a href="<?= base_url('Siswa/cTesTulis') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'Siswa' && $this->uri->segment(2) == 'cTesTulis') {
																							echo 'active';
																						}  ?>">
							<i class="nav-icon fas fa-book-open"></i>
							<p>Tes Tulis</p>
						</a>
					<?php
					} else {
					?>
						<a href="#" class="nav-link   <?php if ($this->uri->segment(1) == 'Siswa' && $this->uri->segment(2) == 'cTesTulis') {
															echo 'active';
														}  ?>">
							<i class="nav-icon fas fa-book-open"></i>
							<p>Tes Tulis</p>
						</a>
					<?php
					}
					?>

				</li>
				<li class="nav-item">
					<?php
					if ($siswa->hasil == '0') {
					?>
						<a href="#" class="nav-link   <?php if ($this->uri->segment(1) == 'Siswa' && $this->uri->segment(2) == 'cHasil') {
															echo 'active';
														}  ?>">
						<?php
					} else {
						?>
							<a href="<?= base_url('Siswa/cHasil') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'Siswa' && $this->uri->segment(2) == 'cHasil') {
																							echo 'active';
																						}  ?>">
							<?php
						}
							?>

							<i class="nav-icon fas fa-info-circle"></i>
							<p>Pengumuman Hasil</p>
							</a>
				</li>




				<li class="nav-item">
					<a href="<?= base_url('Siswa/cAuthSiswa/logout') ?>" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>SignOut</p>
					</a>
				</li>

			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>