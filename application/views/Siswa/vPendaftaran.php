<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pendafataran Siswa/i</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pendaftaran</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <!-- Main content -->
    <?php if ($this->session->userdata('success')) {
    ?>
        <div class="alert alert-success alert-dismissible mt-3">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Alert!</h5>
            <?= $this->session->userdata('success') ?>
        </div>
    <?php
    } ?>
    <?php
    if ($siswa) {
    ?>
        <section class="content">
            <div class="container-fluid">
                <div class="callout callout-success">
                    <h5>Informasi!</h5>

                    <p>Anda Selesai Melengkapi data Diri!</p>
                </div>
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Form Pendaftaran</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="<?= base_url('Siswa/cDaftar/update/' . $siswa->id_dt_siswa) ?>" method="POST">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NISN</label>
                                        <input type="text" value="<?= $siswa->nisn ?>" name="nisn" class="form-control" id="exampleInputEmail1" placeholder="NISN">
                                        <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Asal Sekolah</label>
                                        <input type="text" value="<?= $siswa->asal_sklh ?>" name="asal_sekolah" class="form-control" id="exampleInputPassword1" placeholder="Asal Sekolah">
                                        <?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tempat, Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-lg-6"><input type="text" name="tempat" value="<?= $siswa->tempat_lahir ?>" class="form-control" id="exampleInputPassword1" placeholder="Tempat">
                                                <?= form_error('tempat', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                            <div class="col-lg-6"><input type="date" value="<?= $siswa->tanggal_lahir ?>" name="tgl" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                <?= form_error('tgl', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Orang Tua</label>
                                        <input type="text" class="form-control" value="<?= $siswa->nama_ortu ?>" name="ortu" id="exampleInputPassword1" placeholder="Asal Sekolah">
                                        <?= form_error('ortu', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-warning"><i class="fas fa-pen-alt"></i> Update</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    <?php
    } else {
    ?>
        <section class="content">
            <div class="container-fluid">
                <div class="callout callout-warning">
                    <h5>Informasi!</h5>

                    <p>Silahkan lengkapi data Diri Anda!</p>
                </div>
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Form Pendaftaran</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="<?= base_url('Siswa/cDaftar') ?>" method="POST">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NISN</label>
                                        <input type="text" name="nisn" class="form-control" id="exampleInputEmail1" placeholder="NISN">
                                        <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah" class="form-control" id="exampleInputPassword1" placeholder="Asal Sekolah">
                                        <?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tempat, Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-lg-6"><input type="text" name="tempat" class="form-control" id="exampleInputPassword1" placeholder="Tempat">
                                                <?= form_error('tempat', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                            <div class="col-lg-6"><input type="date" name="tgl" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                <?= form_error('tgl', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Orang Tua</label>
                                        <input type="text" class="form-control" name="ortu" id="exampleInputPassword1" placeholder="Asal Sekolah">
                                        <?= form_error('ortu', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-pen-alt"></i> Daftar</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    <?php
    }
    ?>

    <!-- /.content -->
</div>