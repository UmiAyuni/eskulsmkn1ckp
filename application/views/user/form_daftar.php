 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Daftar <?= $title; ?></h1>

     <?php base_url(validation_errors()); ?>


     <form action="<?= base_url('user/daftar_eskul/' . $data_eskul['id_eskul']); ?>" method="post">
         <div class="form-group">
             <label for="eskul">Ekstrakurikuler</label>
             <input name="eskul" type="text" class="form-control" id="eskul" value="<?= $data_eskul['nama']; ?>" readonly>
         </div>
         <input type="hidden" name="id_user" type="text" class="form-control" id="id_user" value="<?= $user['id']; ?>" readonly>
         <div class="form-group">
             <label for="exampleInputEmail1">Nama lengkap</label>
             <input type="text" class="form-control" id="exampleInputEmail1" name="nama" required>
         </div>
         <div class="row">
             <div class="col-md-6 mb-3">
                 <label for="tempatlahir">Tempat lahir</label>
                 <input type="text" class="form-control" name="tempat" id="tempatlahir" required>
             </div>
             <div class="col-md-6 mb-3">
                 <label for="tgl_lahir">Tanggal lahir</label>
                 <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required>
             </div>
         </div>
         <label for="jk">Jenis Kelamin</label><br>
         <div class="form-check form-check-inline mb-2">
             <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-laki" required>
             <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
         </div><br>
         <div class="form-check form-check-inline mb-2">
             <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan" required>
             <label class="form-check-label" for="inlineRadio2">Perempuan</label>
         </div>
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
             <label for="no_wa">No whatsapp</label>
             <input type="text" class="form-control" name="no_wa" id="no_wa" required>
         </div>
         <div class="form-group">
             <label for="alasan">Alasan</label>
             <textarea class="form-control" id="alasan" name="alasan" required></textarea>
         </div>
         <p class="text-danger">*Harap cek kembali sebelum mengirim !</p>
         <div class="position-relative">
             <button class="btn btn-secondary px-5 position-absolute" style="top:0; right:150px;">
                 <a href="<?= base_url('user/eskul_user/'); ?>" class="text-white" style="text-decoration: none;">Kembali</a>
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