<div class="container">
    <h1 class="h3 mb-4 text-gray-800"> Verifikasi <?= $title; ?></h1>

    <?php base_url(validation_errors()); ?>

    <div class="row nt-3">
        <div class="col">
            <form action="<?= base_url('Admin/edit_akun/' . $siswa['id']);  ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $siswa['email']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>">
                </div>
                <div class="form-group">
                    <label for="role_id">Role</label>
                    <input type="text" class="form-control" id="role_id" name="role_id" value="<?= $siswa['role_id']; ?>">
                </div>
                <div class="form-group">
                    <label for="is_active">Aktif</label>
                    <input type="text" class="form-control" id="is_active" name="is_active" value="<?= $siswa['is_active']; ?>">
                </div>

                <div class="position-relative">
                    <button class="btn btn-secondary px-5 position-absolute" style="top:0; right:150px;">
                        <a href="<?= base_url('Admin/data_akun/'); ?>" class="text-white" style="text-decoration: none;">Kembali</a>
                    </button>
                    <button type="submit" class="btn btn-primary px-5 position-absolute" style="top:0; right:0;">Kirim</button>
                </div>
            </form>

        </div>
    </div>
</div>
</div>