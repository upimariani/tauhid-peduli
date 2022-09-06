<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Soal Tes Tulis</h1>
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
    <?php if ($this->session->userdata('success')) {
    ?>
        <div class="alert alert-success alert-dismissible mt-3">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Alert!</h5>
            <?= $this->session->userdata('success') ?>
        </div>
    <?php
    } ?>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-default mb-3" data-toggle="modal" data-target="#modal-default">
                        <i class="fas fa-book-open"></i> Tambah Data Soal
                    </button>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Soal Tes Tulis</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Soal</th>
                                        <th>Pertanyaan</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($soal as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->nama_soal ?></td>
                                            <td><?= $value->pertanyaan_soal ?></td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-6"> <a href="<?= base_url('Admin/cSoal/delete/' . $value->id_soal) ?>" class="btn btn-block btn-danger"><i class="fas fa-user-times"></i></a></div>
                                                    <div class="col-lg-6"> <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#edit<?= $value->id_soal ?>"><i class="fas fa-user-edit"></i></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Soal</th>
                                        <th>Pertanyaan</th>
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

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <form action="<?= base_url('admin/cSoal/create') ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Soal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Soal</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Soal" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pertanyaan</label>
                        <textarea type="text" name="soal" class="form-control" id="exampleInputEmail1" placeholder="Pertanyaan" required></textarea>
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
foreach ($soal as $key => $value) {
?>
    <div class="modal fade" id="edit<?= $value->id_soal ?>">
        <div class="modal-dialog">
            <form action="<?= base_url('admin/cSoal/update/' . $value->id_soal) ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Data Soal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Soal</label>
                            <input type="text" value="<?= $value->nama_soal ?>" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Soal" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pertanyaan</label>
                            <textarea type="text" name="soal" class="form-control" id="exampleInputEmail1" placeholder="Pertanyaan" required><?= $value->pertanyaan_soal ?></textarea>
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
<?php
}
?>


<!-- /.modal -->