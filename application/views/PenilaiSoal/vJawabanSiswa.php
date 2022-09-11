<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Penilaian</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Soal</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <?php if ($this->session->userdata('success')) {
        ?>
            <div class="alert alert-success alert-dismissible mt-3">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                <?= $this->session->userdata('success') ?>
            </div>
        <?php
        } ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Penilaian Tes Tulis</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="example1 table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($siswa as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->nisn ?></td>
                                            <td><?= $value->nama_siswa ?></td>
                                            <td><?= $value->tempat_lahir ?> <?= $value->tanggal_lahir ?></td>
                                            <td><?php
                                                if ($value->tes_tulis == 0) {
                                                ?>
                                                    <span class="badge badge-danger">Belum Ada Penilaian Test</span>
                                                <?php
                                                } else if ($value->tes_tulis == 1) {
                                                ?>
                                                    <span class="badge badge-info">Menunggu Penilaian</span>
                                                <?php
                                                } else {
                                                ?>
                                                    <span class="badge badge-success">Sudah Test</span>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                if ($value->tes_tulis == 1) {
                                                ?>
                                                    <a href="<?= base_url('PenilaiSoal/cPenilaian/nilai_tes_tulis/' . $value->id_dt_siswa) ?>" class="btn btn-block btn-warning"><i class="fas fa-user-cog"></i></a>
                                                <?php
                                                } else {
                                                ?>
                                                    <a href="#" class="btn btn-block btn-warning"><i class="fas fa-user-cog"></i></a>
                                                <?php
                                                }
                                                ?>


                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>