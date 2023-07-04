<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="img-fluid rounded-start" alt="profile">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nama']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="text-body-secondary">Aktif sejak <?= date('d F Y', $user['tanggal_input']); ?></small></p>
                </div>
            </div>
        </div>
    </div>
    <a href="<?= base_url('user/edit_profile'); ?>" class="btn btn-primary"><i class="fas fa-user-edit"></i>Edit Profile</a>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->