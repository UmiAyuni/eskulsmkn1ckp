 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Detail <?= $title; ?></h1>
     <div class="row">
         <div class="card mx-auto">
             <img src="<?= base_url('assets/img/upload/')  . $data_eskul['logo'];  ?>" width="160" class="img-thumbnail mx-auto mt-4" alt="">
             <div class="card-body">
                 <h5 class="card-title text-center"><?= $data_eskul['nama']; ?></h5>
             </div>
             <ul class="list-group list-group-flush">
                 <li class="list-group-item">Pembina : <?= $data_eskul['Pembina']; ?></li>
                 <li class="list-group-item">Tempat : <?= $data_eskul['Tempat']; ?></li>
                 <li class="list-group-item">Jadwal : <?= $data_eskul['Jadwal']; ?></li>
                 <li class="list-group-item">Deskripsi : <?= $data_eskul['Deskripsi']; ?></li>
             </ul>

             <div class="card-body ml-auto">
                 <a href="<?= base_url('user/eskul_user'); ?>" class="btn btn-secondary px-5">Kembali</a>
                 <a href="<?= base_url('user/daftar_eskul/') . $data_eskul['id_eskul']; ?>" class="btn btn-primary px-5">Daftar</a>
             </div>

         </div>
     </div>
 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->