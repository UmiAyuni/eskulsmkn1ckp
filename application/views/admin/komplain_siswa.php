<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="row">
        <div class="col-lg">

            <?= $this->session->flashdata('message'); ?>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary"><?= $title; ?></h5>
                </div>
                <div class="card-body">

                    <a href="<?= base_url('admin/cetak_komplan_pdf'); ?>" class="btn btn-danger  px-2"><i class="far fa-file-pdf"></i>PDF</a>

                    <div class="table-responsive">
                        <table class="table table-bordered text-justify" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Ekstrakurikuler</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Status Komplain</th>
                                    <th scope="col">Keluhan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($komplan as $k) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $k['eskul']; ?></td>
                                        <td><?= $k['nama']; ?></td>
                                        <td><?= $k['kelas']; ?></td>
                                        <td>
                                            <?php if ($k['status'] == 'menunggu diverifikasi') { ?>
                                                <button class="badge badge-primary"> <?= $k['status']; ?> </button>
                                            <?php } else { ?>
                                                <button class="badge badge-success"> <?= $k['status']; ?> </button>
                                            <?php } ?>
                                        </td>
                                        <td><?= $k['keluhan']; ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/edit_komplain/') . $k['id']; ?>" class="badge badge-primary"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('admin/hapus_komplain/') . $k['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');"><i class="fas fa-trash"></i></a>
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

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->