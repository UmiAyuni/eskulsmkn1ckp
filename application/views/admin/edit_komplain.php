 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Verifikasi <?= $title; ?></h1>

     <?php base_url(validation_errors()); ?>

     <form action="<?= base_url('admin/edit_komplain/' . $komplan['id']); ?>" method="post">
         <div class="form-group">
             <label for="eskul">Ekstrakurikuler</label>
             <input name="eskul" type="text" class="form-control" id="eskul" value="<?= $komplan['eskul']; ?>" readonly>
         </div>

         <input type="hidden" name="id_user" type="text" class="form-control" id="id_user" value="<?= $komplan['id_user']; ?>" readonly>

         <div class="form-group">
             <label for="exampleInputEmail1">Nama lengkap</label>
             <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="<?= $komplan['nama']; ?>" required>
         </div>

         <div class="form-group">
             <label for="kelas">Kelas</label>
             <select name="kelas" id="kelas" class="form-control" required>
                 <option value="">--Pilih Kelas--</option>
                 <?php foreach ($kelas as $k) : ?>
                     <?php if ($komplan['kelas'] == $k['kelas']) { ?>
                         <option value="<?= $komplan['kelas']; ?>" selected><?= $k['kelas']; ?></option>
                     <?php } else { ?>
                         <option value="<?= $k['kelas']; ?>"><?= $k['kelas']; ?></option>
                     <?php } ?>
                 <?php endforeach; ?>
             </select>
         </div>

         <div class="form-group">
             <label for="status">Status</label>
             <select name="status" id="status" class="form-control" required>
                 <option value="<?= $komplan['status']; ?>" checked><?= $komplan['status']; ?></option>
                 <option value="diverifikasi">diverifikasi</option>
                 <option value="menunggu diverifikasi">menunggu diverifikasi</option>

             </select>
         </div>

         <div class="form-group">
             <label for="keluhan">Keluhan</label>
             <textarea class="form-control" id="keluhan" name="keluhan" required><?= $komplan['keluhan']; ?></textarea>
         </div>

         <div class="position-relative">
             <button class="btn btn-secondary px-5 position-absolute" style="top:0; right:150px;">
                 <a href="<?= base_url('Admin/komplain_siswa/'); ?>" class="text-white" style="text-decoration: none;">Kembali</a>
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