<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Informasi Hasil Rangking Siswa/i</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Hasil</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="callout callout-success">
                <h5>Informasi!</h5>
                <p>Atas Nama <strong><?= $siswa->nama_siswa ?></strong> dengan hasil nilai, sebagai berikut:</p>
                <table>
                    <tr>
                        <th>Total Nilai Raport</th>
                        <td>&nbsp;</td>
                        <td><?= $siswa->nilai_ing + $siswa->nilai_mtk + $siswa->nilai_indo ?></td>
                    </tr>
                    <tr>
                        <th>Bobot Nilai Tes Tulis</th>
                        <td>&nbsp;</td>
                        <td><?= $siswa->tes_tulis ?></td>
                    </tr>
                    <tr>
                        <th>Nilai Tes Baca Al-Qur'an</th>
                        <td>&nbsp;</td>
                        <td><?= $siswa->tes_baca ?></td>
                    </tr>
                    <tr>
                        <th>Nilai Tes Wawancara</th>
                        <td>&nbsp;</td>
                        <td><?= $siswa->tes_wawancara ?></td>
                    </tr>
                </table>
                <br>

                Total Perhitungan <strong>
                    <h1><?= $siswa->hasil ?></h1>
                </strong>
                <?php
                if ($siswa->keputusan >= 10) {
                ?>
                    <h5>Dengan demikian anda mendapatkan hasil belum lolos...</h5>
                <?php
                } else {
                ?>
                    <h5>Dengan demikian anda mendapatkan peringkat ke - <strong><?= $siswa->keputusan ?></strong></h5>
                <?php
                }
                ?>

            </div>
        </div>
    </section>


    <!-- /.content -->
</div>