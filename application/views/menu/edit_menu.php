<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?= $title; ?></h1>

    <?php base_url(validation_errors()); ?>

    <div class="row nt-3">
        <div class="col">
            <form action="<?= base_url('Menu/edit_menu/' . $menu['id']);  ?>" method="post">
                <div class="form-group">
                    <label for="menu">Nama Menu</label>
                    <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu']; ?>">
                </div>

                <div class="position-relative">
                    <button class="btn btn-secondary px-5 position-absolute" style="top:0; right:150px;">
                        <a href="<?= base_url('Menu'); ?>" class="text-white" style="text-decoration: none;">Kembali</a>
                    </button>
                    <button type="submit" class="btn btn-primary px-5 position-absolute" style="top:0; right:0;">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>