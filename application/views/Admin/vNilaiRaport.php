<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nilai Raport Siswa/i <strong><?= $siswa_raport->nama_siswa ?></strong></h1>
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
    if ($siswa_raport->nilai_ing == '0') {
    ?>
        <section class="content">
            <div class="container-fluid">
                <div class="callout callout-success">
                    <h5>Informasi!</h5>

                    <p>Segera Masukkan Data Nilai Raport!</p>
                </div>
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Form Data Nilai Raport</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="<?= base_url('Admin/cPenilaian/nilai_raport/' . $siswa_raport->id_dt_siswa) ?>" method="POST">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nilai Bahasa Inggris</label>
                                        <input type="text" name="ing" class="form-control" id="exampleInputEmail1" placeholder="Bahasa Inggris">
                                        <?= form_error('ing', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nilai Matematika</label>
                                        <input type="text" name="mtk" class="form-control" id="exampleInputPassword1" placeholder="Matematika">
                                        <?= form_error('mtk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nilai Bahasa Indonesia</label>
                                        <input type="text" class="form-control" name="indo" id="exampleInputPassword1" placeholder="Bahasa Indonesia">
                                        <?= form_error('indo', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-warning"><i class="fas fa-pen-alt"></i> Save</button>
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

                    <p>Data Nilai Raport Sudah Lengkap</p>
                </div>
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Form Data Nilai Raport</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="<?= base_url('Admin/cPenilaian/nilai_raport/' . $siswa_raport->id_dt_siswa) ?>" method="POST">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nilai Bahasa Inggris</label>
                                        <input type="number" value="<?= $siswa_raport->nilai_ing ?>" name="ing" class="form-control" id="exampleInputEmail1" placeholder="Bahasa Inggris">
                                        <?= form_error('ing', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nilai Matematika</label>
                                        <input type="number" name="mtk" value="<?= $siswa_raport->nilai_mtk ?>" class="form-control" id="exampleInputPassword1" placeholder="Matematika">
                                        <?= form_error('mtk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nilai Bahasa Indonesia</label>
                                        <input type="number" class="form-control" value="<?= $siswa_raport->nilai_indo ?>" name="indo" id="exampleInputPassword1" placeholder="Bahasa Indonesia">
                                        <?= form_error('indo', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-warning"><i class="fas fa-pen-alt"></i> Save</button>
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