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
                     <a href="<?= base_url('User/undur'); ?>" class="btn btn-success mb-3"><i class="fas fa-fw fa-plus-circle"></i>Ajukan Pengunduran Diri</a>
                     <div class="table-responsive">
                         <table class="table table-bordered text-justify" id="dataTable" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th scope="col">No</th>
                                     <th scope="col">Ekstrakurikuler</th>
                                     <th scope="col">Nama</th>
                                     <th scope="col">Kelas</th>
                                     <th scope="col">Status Undur Diri</th>
                                     <th scope="col">Alasan</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $i = 1; ?>
                                 <?php foreach ($undur as $u) : ?>
                                     <?php if ($u['id_user'] == $user['id']) { ?>
                                         <tr>
                                             <th scope="row"><?= $i; ?></th>
                                             <td><?= $u['eskul']; ?></td>
                                             <td><?= $u['nama']; ?></td>
                                             <td><?= $u['kelas']; ?></td>
                                             <td>
                                                 <?php if ($u['status'] == 'menunggu diverifikasi') { ?>
                                                     <button class="badge badge-primary"> <?= $u['status']; ?> </button>
                                                 <?php } elseif ($u['status'] == 'disetujui') { ?>
                                                     <button class="badge badge-success"> <?= $u['status']; ?> </button>
                                                 <?php } else { ?>
                                                     <button class="badge badge-danger"> <?= $u['status']; ?> </button>
                                                 <?php } ?>
                                             </td>
                                             <td><?= $u['alasan']; ?></td>
                                         </tr>
                                         <?php $i++; ?>
                                 <?php }
                                    endforeach; ?>
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