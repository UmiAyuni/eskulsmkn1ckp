<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg">

            <?= $this->session->flashdata('message'); ?>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary"> <?= $title; ?></h5>
                </div>
                <div class="card-body">
                    <a href="<?= base_url('Eskul/tambah'); ?>" class="btn btn-primary mb-3 px-3"><i class="fas fa-fw fa-plus-circle"></i>Tambah Ekstrakurikuler</a><br>
                    <a href="<?= base_url('Eskul/cetak_eskul'); ?>" class="btn btn-primary  px-2"><i class="fas fa-print"></i>Cetak</a>
                    <a href="<?= base_url('Eskul/cetak_eskul_pdf'); ?>" class="btn btn-danger  px-2"><i class="far fa-file-pdf"></i>PDF</a>
                    <a href="<?= base_url('Eskul/cetak_eskul_excel'); ?>" class="btn btn-success  px-2"><i class="far fa-file-excel"></i>Excel</a>
                    <div class="table-responsive">
                        <table class="table table-bordered text-justify" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Ekstrakurikuler</th>
                                    <th scope="col">Pembina</th>
                                    <th scope="col">Tempat</th>
                                    <th scope="col">Jadwal</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Aksi</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($data_eskul as $es) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $es['nama']; ?></td>
                                        <td><?= $es['Pembina']; ?></td>
                                        <td><?= $es['Tempat']; ?></td>
                                        <td><?= $es['Jadwal']; ?></td>
                                        <td><img src="<?= base_url('assets/img/upload/')  . $es['logo']; ?>" width='70' height='70' class="img-thumbnail"></td>
                                        <td><?= $es['Deskripsi']; ?></td>
                                        <td>
                                            <a href="<?= base_url('Eskul/edit_eskul/') . $es['id_eskul']; ?> " class="badge badge-primary"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('Eskul/hapus_eskul/') . $es['id_eskul']; ?>  " class="badge badge-danger" onclick="return confirm('yakin?');"><i class="fas fa-trash"></i></a>
                                        </td>
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
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->