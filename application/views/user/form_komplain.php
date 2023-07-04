 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Forum <?= $title; ?></h1>

     <?php base_url(validation_errors()); ?>

     <form action="<?= base_url('user/komplain'); ?>" method="post">
         <div class="form-group">
             <label for="nama">Nama</label>
             <input type="text" class="form-control" id="nama" name="nama" required>
         </div>
         <input type="hidden" name="id_user" type="text" class="form-control" id="id_user" value="<?= $user['id']; ?>" readonly>
         <div class="form-group">
             <label for="kelas">Kelas</label>
             <select class="form-control" id="kelas" name="kelas" required>
                 <option value="">--Pilih kelas--</option>
                 <?php foreach ($kelas as $k) : ?>
                     <option value="<?= $k['kelas']; ?>"><?= $k['kelas']; ?></option>
                 <?php endforeach; ?>
             </select>
         </div>
         <div class="form-group">
             <label for="eskul">Ekstrakurikuler</label>
             <select class="form-control" id="eskul" name="eskul" required>
                 <option value="">--Pilih ekstrakurikuler--</option>
                 <?php foreach ($data_eskul as $es) : ?>
                     <option value="<?= $es['nama']; ?>"><?= $es['nama']; ?></option>
                 <?php endforeach; ?>
             </select>
         </div>
         <div class="form-group">
             <label for="keluhan">Keluhan</label>
             <textarea class="form-control" id="keluhan" name="keluhan" required></textarea>
         </div>
         <p class="text-danger">*Harap cek kembali sebelum mengirim !</p>
         <div class="position-relative">
             <button class="btn btn-secondary px-5 position-absolute" style="top:0; right:150px;">
                 <a href="<?= base_url('User/info_komplain'); ?>" class="text-white" style="text-decoration: none;">Kembali</a>
             </button>
             <button type="submit" class="btn btn-primary px-5 position-absolute" style="top:0; right:0;">Kirim</button>
         </div>
     </form>
     <br>
     <br>
     <br>


 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->