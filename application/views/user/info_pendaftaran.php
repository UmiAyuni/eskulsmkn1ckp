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
                    <a href="<?= base_url('user/eskul_user'); ?>" class="btn btn-success mb-3"><i class="fas fa-fw fa-plus-circle"></i>Daftar Ekstrakurikuler</a>
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
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($info as $fd) : ?>
                                    <?php if ($fd['id_user'] == $user['id']) { ?>
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
                                        </tr>
                                        <?php $i++; ?>
                                <?php }
                                endforeach; ?>

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