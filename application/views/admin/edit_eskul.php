<div class="container">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php base_url(validation_errors()); ?>

    <div class="row nt-3">
        <div class="col">
            <form action="<?= base_url('Eskul/edit_eskul/' . $data_eskul['id_eskul']);  ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="eskul">Nama Ekstrakurikuler</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_eskul['nama']; ?>">
                </div>
                <div class="form-group">
                    <label for="pembina">Nama Pembina</label>
                    <input type="text" class="form-control" id="Pembina" name="Pembina" value="<?= $data_eskul['Pembina']; ?>">
                </div>
                <div class="form-group">
                    <label for="tempat">Tempat</label>
                    <input type="text" class="form-control" id="Tempat" name="Tempat" value="<?= $data_eskul['Tempat']; ?>">
                </div>
                <div class="form-group">
                    <label for="jadwal">Jadwal</label>
                    <input type="text" class="form-control" id="Jadwal" name="Jadwal" value="<?= $data_eskul['Jadwal']; ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" value="<?= $data_eskul['logo']; ?>" name="logo_lama">
                    <label class="control-label" for="logo">Logo</label>
                    <td><img src="<?= base_url('assets/img/upload/') . $data_eskul['logo']; ?>" class="img-thumbnail" width='80' height='80'>
                        <?= $data_eskul['logo']; ?> <br>
                        <input type="file" class="form-control" id="logo" name="logo">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="Deskripsi" name="Deskripsi"> <?= $data_eskul['Deskripsi']; ?></textarea>
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