 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="row">
         <div class="col-lg">

             <?= $this->session->flashdata('message'); ?>

             <div class="card shadow mb-4">
                 <div class="card-header py-3">
                     <h5 class="m-0 font-weight-bold text-primary"><?= $title; ?></h5>
                 </div>
                 <div class="card-body">

                     <div class="table-responsive">
                         <table class="table table-bordered text-justify" id="dataTable" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th scope="col">No</th>
                                     <th scope="col">Nama</th>
                                     <th scope="col">Email</th>
                                     <th scope="col">Image</th>
                                     <th scope="col">Role</th>
                                     <th scope="col">Aktif</th>
                                     <th scope="col">Aksi</th>

                                 </tr>
                             </thead>

                             <tbody>
                                 <?php $i = 1; ?>
                                 <?php foreach ($siswa as $s) : ?>
                                     <tr>
                                         <th scope="row"><?= $i; ?></th>
                                         <td><?= $s['nama']; ?></td>
                                         <td><?= $s['email']; ?></td>
                                         <td>
                                             <img src="<?= base_url('assets/img/profile/')  . $s['image']; ?>" width='70' height='70' class="img-thumbnail">
                                         </td>
                                         <td><?= $s['role_id']; ?></td>
                                         <td><?= $s['is_active']; ?></td>
                                         <td>
                                             <a href="<?= base_url('Admin/edit_akun/') . $s['id']; ?>" class="badge badge-primary"><i class="fas fa-edit"></i></a>
                                             <a href="<?= base_url('Admin/hapus_siswa/') . $s['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');"><i class="fas fa-trash"></i></a>
                                         </td>
                                     </tr>
                                     <?php $i++; ?>
                                 <?php endforeach; ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->