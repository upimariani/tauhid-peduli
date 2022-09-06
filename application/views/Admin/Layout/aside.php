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
                <a href="#" class="d-block">Selamat Datang, Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('Admin/cDashboard') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDashboard') {
                                                                                        echo 'active';
                                                                                    }  ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/cAdmin') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cAdmin') {
                                                                                    echo 'active';
                                                                                }  ?>">
                        <i class="nav-icon fas fa-user-lock"></i>
                        <p>Data Admin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/cSoal') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cSoal') {
                                                                                    echo 'active';
                                                                                }  ?>">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>Data Soal</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/cPenilaian') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cPenilaian') {
                                                                                        echo 'active';
                                                                                    }  ?>">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>Penilaian</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/cPerhitungan') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cPerhitungan') {
                                                                                            echo 'active';
                                                                                        }  ?>">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>Informasi Hasil Test</p>
                    </a>
                </li>




                <li class="nav-item">
                    <a href="<?= base_url('Admin/cAuthAdmin/logout') ?>" class="nav-link">
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