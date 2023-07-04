 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Edit atau Verifikasi <?= $title; ?></h1>

     <?php base_url(validation_errors()); ?>

     <form action="<?= base_url('admin/edit_pendaftar/' . $pendaftar['id']); ?>" method="post">
         <div class="form-group">
             <label for="eskul">Ekstrakurikuler</label>
             <input name="eskul" type="text" class="form-control" id="eskul" value="<?= $pendaftar['ekskul']; ?>" readonly>
         </div>

         <input type="hidden" name="id_user" type="text" class="form-control" id="id_user" value="<?= $pendaftar['id_user']; ?>" readonly>

         <div class="form-group">
             <label for="exampleInputEmail1">Nama lengkap</label>
             <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="<?= $pendaftar['nama']; ?>" required>
         </div>
         <div class="row">
             <div class="col-md-6 mb-3">
                 <label for="tempatlahir">Tempat lahir</label>
                 <input type="text" class="form-control" name="tempat" id="tempatlahir" value="<?= $pendaftar['tempat']; ?>" required>
             </div>

             <div class="col-md-6 mb-3">
                 <label for="tgl_lahir">Tanggal lahir</label>
                 <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?= $pendaftar['tgl_lahir']; ?>" required>
             </div>
         </div>

         <label for="jk">Jenis Kelamin</label><br>

         <div class="radio-inline mb-2">
             <label><input type="radio" name="jk" id="jk" value="Laki-laki" class="detail" <?php if ($pendaftar['jenkel'] == 'Laki-laki') {
                                                                                                echo 'checked';
                                                                                            } ?>>Laki-laki</label><br>
             <label><input type="radio" name="jk" id="jk" value="Perempuan" class="detail" <?php if ($pendaftar['jenkel'] == 'Perempuan') {
                                                                                                echo 'checked';
                                                                                            } ?>>Perempuan</label>
         </div>

         <div class="form-group">
             <label for="kelas">Kelas</label>
             <select name="kelas" id="kelas" class="form-control">
                 <option value="">--Pilih Kelas--</option>
                 <?php foreach ($kelas as $k) : ?>
                     <?php if ($pendaftar['kelas'] == $k['kelas']) { ?>
                         <option value="<?= $pendaftar['kelas']; ?>" selected><?= $k['kelas']; ?></option>
                     <?php } else { ?>
                         <option value="<?= $k['kelas']; ?>"><?= $k['kelas']; ?></option>
                     <?php } ?>
                 <?php endforeach; ?>
             </select>
         </div>


         <div class="form-group">
             <label for="no_wa">No whatsapp</label>
             <input type="text" class="form-control" name="no_wa" id="no_wa" value="<?= $pendaftar['no_wa']; ?>" required>
         </div>


         <div class="form-group">
             <label for="status">Status</label>
             <select name="status" id="status" class="form-control" required>
                 <option value="<?= $pendaftar['status']; ?>" checked><?= $pendaftar['status']; ?></option>
                 <option value="disetujui">disetujui</option>
                 <option value="ditolak">ditolak</option>
                 <option value="menunggu diverifikasi">menunggu diverifikasi</option>

             </select>
         </div>



         <div class="form-group">
             <label for="alasan">Alasan</label>
             <textarea class="form-control" id="alasan" name="alasan" required><?= $pendaftar['alasan']; ?></textarea>
         </div>

         <div class="position-relative bg-warning">
             <button class="btn btn-secondary px-5 position-absolute" style="top:0; right:150px;">
                 <a href="<?= base_url('Admin/pendaftar/'); ?>" class="text-white" style="text-decoration: none;">Kembali</a>
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