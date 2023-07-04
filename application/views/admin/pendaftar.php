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

                    <a href="<?= base_url('admin/cetak_pendaftar_pdf'); ?>" class="btn btn-danger  px-2"><i class="far fa-file-pdf"></i>PDF</a>

                    <div class="table-responsive">
                        <table class="table table-bordered text-justify" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Ekstrakurikuler</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tempat</th>
                                    <th scope="col">Tanggal lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">No Whatsapp</th>
                                    <th scope="col">Status Pendaftaran</th>
                                    <th scope="col">Alasan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pendaftar as $fd) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $fd['ekskul']; ?></td>
                                        <td><?= $fd['nama']; ?></td>
                                        <td><?= $fd['tempat']; ?></td>
                                        <td><?= $fd['tgl_lahir']; ?></td>
                                        <td><?= $fd['jenkel']; ?></td>
                                        <td><?= $fd['kelas']; ?></td>
                                        <td><?= $fd['no_wa']; ?></td>
                                        <td>
                                            <?php if ($fd['status'] == 'menunggu diverifikasi') { ?>
                                                <button class="badge badge-primary"> <?= $fd['status']; ?> </button>
                                            <?php } elseif ($fd['status'] == 'disetujui') { ?>
                                                <button class="badge badge-success"> <?= $fd['status']; ?> </button>
                                            <?php } else { ?>
                                                <button class="badge badge-danger"> <?= $fd['status']; ?> </button>
                                            <?php } ?>
                                        </td>
                                        <td><?= $fd['alasan']; ?></td>
                                        <td>
                                            <a href="<?= base_url('Admin/edit_pendaftar/') . $fd['id']; ?>" class="badge badge-primary"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('Admin/hapus_pendaftar/') . $fd['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');"><i class="fas fa-trash"></i></a>
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