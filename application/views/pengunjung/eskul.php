<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Eskul -->
    <div class="container-fluid mb-2 mt-5">

        <img src="<?= base_url('assets/img/slider1.jpg') ?>" class="d-block w-100 h-50 ">

    </div>


    <div class="row mx-auto mt-4">
        <div class="col-md">
            <form action="<?= base_url('Welcome/eskul/'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Ekstrakurikuler..." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-warning" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row text-center">
        <?php foreach ($data_eskul as $es) : ?>
            <div class="col-md-3 mb-3">
                <div class="card mx-auto" style="width: 14rem ; height: 18rem;">
                    <img src="<?= base_url('assets/img/upload/')  . $es['logo']; ?>" class="card-img-top" width='120' height='120' alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $es['nama']; ?></h5>
                        <p class="card-text"><?= $es['Jadwal']; ?></p>

                        <a href="<?= base_url('Welcome/eskul_detail/') . $es['id_eskul']; ?>" class="btn btn-success">Detail</a>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->