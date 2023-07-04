 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <br>
     <br>
     <br>
     <br>
     <div class="row mb-4 mt-5">
         <div class="card mx-auto">
             <img src="<?= base_url('assets/img/upload/')  . $data_eskul['logo'];  ?>" width="200" height="90" class="img-fluid mx-auto mt-5 mb-3" alt="">
             <div class="card-body">
                 <h5 class="card-title text-center"><?= $data_eskul['nama']; ?></h5>
             </div>
             <div>
                 <hr>
                 <ul class="list-group list-group-flush">
                     <li class="list-group-item">Pembina : <?= $data_eskul['Pembina']; ?></li>
                     <li class="list-group-item">Tempat : <?= $data_eskul['Tempat']; ?></li>
                     <li class="list-group-item">Jadwal : <?= $data_eskul['Jadwal']; ?></li>
                     <li class="list-group-item">Deskripsi : <?= $data_eskul['Deskripsi']; ?></li>
                 </ul>
             </div>
             <div class="card-body mt-3 text-end">
                 <a href="<?= base_url('Welcome/eskul/'); ?>" class="btn btn-secondary px-5" style="margin-right: 10px;">Kembali</a>
                 <a href="<?= base_url('auth'); ?>" class="btn btn-warning px-5" style="margin-right: 40px;">Daftar</a>
             </div>
         </div>
     </div>
 </div>
 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->