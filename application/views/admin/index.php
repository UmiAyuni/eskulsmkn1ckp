<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Verifikasi Akun Siswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $verifikasi; ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('Admin/data_akun/'); ?>">
                                <i class="fas fa-users fa-2x text-gray-300"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Pendaftar Ekstrakurikuler</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pendaftar; ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('Admin/pendaftar/'); ?>">
                                <i class="fas fa-table fa-2x text-gray-300"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Komplain Siswa
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $komplan; ?></div>
                                </div>
                                <div class="col">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('Admin/komplain_siswa/'); ?>">
                                <i class="fas fa-file fa-2x text-gray-300"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Undur Diri Siswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $undur; ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('Admin/data_undur/'); ?>">
                                <i class="fas fa-file-invoice fa-2x text-gray-300"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="row">
        <div class="col-lg">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Data Akun User</h5>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered text-justify" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Aktif</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($siswa as $s) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $s['nama']; ?></td>
                                        <td><?= $s['email']; ?></td>
                                        <td>
                                            <img src="<?= base_url('assets/img/profile/')  . $s['image']; ?>" width='70' height='70' class="img-thumbnail">
                                        </td>
                                        <td><?= $s['role_id']; ?></td>
                                        <td><?= $s['is_active']; ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->