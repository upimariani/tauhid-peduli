<!-- Content Wrapper. Contains page content -->
<form action="<?= base_url('Siswa/cTesTulis/jawab') ?>" method="POST">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kerjakan Soal Dibawah ini dengan benar!</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Test Tulis</li>
                        </ol>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-success">Submit</button>
            </div><!-- /.container-fluid -->
        </section>
        <?php
        $no = 1;
        $name = 1;
        $id_soal = 1;
        foreach ($soal as $key => $value) {
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
                                    <input type="hidden" name="id_soal<?= $id_soal++  ?>" value="<?= $value->id_soal ?>">
                                    <small class="text-danger">Tulis Jawaban Anda Dibawah ini!</small>
                                    <textarea class="textarea" name="jwb<?= $name++ ?>" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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