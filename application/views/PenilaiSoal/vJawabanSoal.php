<!-- Content Wrapper. Contains page content -->
<form action="<?= base_url('PenilaiSoal/cPenilaian/add_nilai/' . $siswa_view->id_siswa) ?>" method="POST">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Penilaian Tes Tulis Siswa!</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Test Tulis</li>
                        </ol>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-success">Simpan Penilaian</button>
            </div><!-- /.container-fluid -->
        </section>
        <?php
        $no = 1;
        $nilai = 1;
        foreach ($jawaban as $key => $value) {
        ?>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Soal ke- <?= $no++ ?>
                                    <small><?= $value->nama_soal ?></small>
                                    <p class="mt-3"><strong><?= $value->pertanyaan_soal ?></strong></p>
                                </h3>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pad">
                                <div class="mb-3">
                                    <h4>Jawaban</h4>
                                    <p><?= $value->jwbn_siswa ?></p>
                                    <hr>
                                    <strong>Nilai Atas Jawaban Diatas</strong>
                                    <select name="nilai<?= $nilai++ ?>" class="form-control" required>
                                        <option value="">--Nilai---</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- ./row -->
            </section>
        <?php
        }
        ?>

        <!-- /.content -->
    </div>

</form>