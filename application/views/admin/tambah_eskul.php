<div class="container">
    <h1 class="h3 mb-4 text-gray-800">
        <?= $title; ?></h1>

    <?php base_url(validation_errors()); ?>
    <?= $this->session->flashdata('message'); ?>


    <div class="row nt-3">
        <div class="col">
            <form action="<?= base_url('Eskul/tambah'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="eskul">Nama Ekstrakurikuler</label>
                    <input type="text" class="form-control" id="eskul" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="pembina">Nama Pembina</label>
                    <input type="text" class="form-control" id="pembina" name="Pembina" required>
                </div>
                <div class="form-group">
                    <label for="tempat">Tempat</label>
                    <input type="text" class="form-control" id="tempat" name="Tempat" required>
                </div>
                <div class="form-group">
                    <label for="jadwal">Jadwal</label>
                    <input type="text" class="form-control" id="jadwal" name="Jadwal" required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="logo">Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="Deskripsi" required></textarea>
                </div>

                <div class="position-relative">
                    <button class="btn btn-secondary px-5 position-absolute" style="top:0; right:150px;">
                        <a href="<?= base_url('Eskul'); ?>" class="text-white" style="text-decoration: none;">Kembali</a>
                    </button>
                    <button type="submit" class="btn btn-primary px-5 position-absolute" style="top:0; right:0;">Kirim</button>
                </div>
            </form>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>