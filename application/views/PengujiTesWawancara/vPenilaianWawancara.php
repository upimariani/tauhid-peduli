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
                            <h3 class="card-title">Penilaian Tes Wawancara</h3>
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
                                                if ($value->tes_wawancara == 0) {
                                                ?>
                                                    <span class="badge badge-danger">Belum Ada Penilaian Wawancara</span>
                                                <?php
                                                } else {
                                                ?>
                                                    <span class="badge badge-success">Sudah Test</span>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#tes_wawancara<?= $value->id_dt_siswa ?>">
                                                    <i class="fas fa-user-cog"></i>
                                                </button>
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


<?php
foreach ($siswa as $key => $value) {
?>
    <div class="modal fade" id="tes_wawancara<?= $value->id_dt_siswa ?>">
        <div class="modal-dialog">
            <form action="<?= base_url('PengujiWawancara/cPenilaianWawancara/nilai_wawancara/' . $value->id_dt_siswa) ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Penilaian Wawancara</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nilai</label>
                            <select name="nilai_wawancara" class="form-control" required>
                                <option value="" <?php if ($value->tes_wawancara == '') {
                                                        echo 'selected';
                                                    } ?>>--Pilih Penilaian---</option>
                                <option value="70" <?php if ($value->tes_wawancara == '70') {
                                                        echo 'selected';
                                                    } ?>>70</option>
                                <option value="80" <?php if ($value->tes_wawancara == '80') {
                                                        echo 'selected';
                                                    } ?>>80</option>
                                <option value="90" <?php if ($value->tes_wawancara == '90') {
                                                        echo 'selected';
                                                    } ?>>90</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php
}
?>