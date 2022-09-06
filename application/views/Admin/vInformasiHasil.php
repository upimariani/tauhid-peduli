<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hasil Tes Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Soal</li>
                    </ol>
                </div>
            </div>
            <a href="<?= base_url('Admin/cPerhitungan/analisis') ?>" class="btn btn-info">Analisis</a>
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
                            <h3 class="card-title">Informasi Hasil Test Siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="example1 table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>Total Nilai Raport</th>
                                        <th>Nilai Tes Tulis</th>
                                        <th>Nilai Tes Baca Al-Quran</th>
                                        <th>Nilai Tes Wawancara</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $total_raport = 0;
                                    foreach ($data_siswa as $key => $value) {
                                        $total_raport = $value->nilai_ing + $value->nilai_indo + $value->nilai_mtk;
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->nisn ?></td>
                                            <td><?= $value->nama_siswa ?><br><small>Status: </small>
                                                <?php
                                                if ($value->hasil == '0') {
                                                    echo '<span class="badge badge-danger">Belum Valid Perhitungan</span>';
                                                } else {
                                                    echo '<span class="badge badge-success">Sudah Valid</span>';
                                                }
                                                ?>

                                            </td>
                                            <td><?= $total_raport ?></td>
                                            <td><?= $value->tes_tulis ?></td>
                                            <td><?= $value->tes_baca ?></td>
                                            <td><?= $value->tes_wawancara ?></td>
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
                                        <th>Total Nilai Raport</th>
                                        <th>Nilai Tes Tulis</th>
                                        <th>Nilai Tes Baca Al-Quran</th>
                                        <th>Nilai Tes Wawancara</th>
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