<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Akun Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Admin</li>
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
                        <i class="fas fa-user-plus"></i> Tambah Data Admin
                    </button>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Akun Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Admin</th>
                                        <th>Alamat Admin</th>
                                        <th>No Telepon</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Level</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($admin as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->nama_admin ?></td>
                                            <td><?= $value->alamat_admin ?></td>
                                            <td><?= $value->no_hp_admin ?></td>
                                            <td><?= $value->username_admin ?></td>
                                            <td><?= $value->password_admin ?></td>
                                            <td><?php
                                                if ($value->level == '1') {
                                                    echo '<span class="badge badge-warning">Admin</span>';
                                                } else if ($value->level == '2') {
                                                    echo '<span class="badge badge-info">Penguji Tes Al-Quran</span>';
                                                } else {
                                                    echo '<span class="badge badge-danger">Penguji Tes Wawancara</span>';
                                                }
                                                ?></td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-6"> <a href="<?= base_url('Admin/cAdmin/delete/' . $value->id_admin) ?>" class="btn btn-block btn-danger"><i class="fas fa-user-times"></i></a></div>
                                                    <div class="col-lg-6"> <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#edit<?= $value->id_admin ?>"><i class="fas fa-user-edit"></i></button></div>
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
                                        <th>Nama Admin</th>
                                        <th>Alamat Admin</th>
                                        <th>No Telepon</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Level</th>
                                        <th>Action</th>
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
        <form action="<?= base_url('admin/cAdmin/create') ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Akun Admin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Admin</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Admin</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No Telepon</label>
                        <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" placeholder="No Telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="text" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Level User</label>
                        <select class="form-control" name="level">
                            <option value="">---Pilih User---</option>
                            <option value="1">Admin</option>
                            <option value="2">Penguji Tes Al-Quran</option>
                            <option value="3">Penguji Tes Wawancara</option>
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
foreach ($admin as $key => $value) {
?>
    <div class="modal fade" id="edit<?= $value->id_admin ?>">
        <div class="modal-dialog">
            <form action="<?= base_url('admin/cAdmin/update/' . $value->id_admin) ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Data Akun Admin</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Admin</label>
                            <input type="text" name="nama" value="<?= $value->nama_admin ?>" class="form-control" id="exampleInputEmail1" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Admin</label>
                            <input type="text" name="alamat" value="<?= $value->alamat_admin ?>" class="form-control" id="exampleInputEmail1" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No Telepon</label>
                            <input type="text" name="no_hp" value="<?= $value->no_hp_admin ?>" class="form-control" id="exampleInputEmail1" placeholder="No Telepon" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" name="username" value="<?= $value->username_admin ?>" class="form-control" id="exampleInputEmail1" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="text" name="password" value="<?= $value->password_admin ?>" class="form-control" id="exampleInputEmail1" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Level User</label>
                            <select class="form-control" name="level">
                                <option value="">---Pilih User---</option>
                                <option value="1">Admin</option>
                                <option value="2">Penguji Tes Al-Quran</option>
                                <option value="3">Penguji Tes Wawancara</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Save changes</button>
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