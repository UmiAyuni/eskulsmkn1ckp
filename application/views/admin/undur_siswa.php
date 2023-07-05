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
                 <a href="<?= base_url('admin/cetak_undur'); ?>" class="btn btn-primary  px-3"><i class="fas fa-print"></i>Cetak</a>
                 <a href="<?= base_url('admin/cetak_undur_pdf'); ?>" class="btn btn-danger  px-2"><i class="far fa-file-pdf"></i>PDF</a>
                 <a href="<?= base_url('admin/cetak_undur_excel'); ?>" class="btn btn-success  px-2"><i class="far fa-file-excel"></i>Excel</a>
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
                                     <th scope="col">Aksi</th>
                                 </tr>
                             </thead>

                             <tbody>
                                 <?php $i = 1; ?>
                                 <?php foreach ($undur as $u) : ?>
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
                                         <td>
                                             <a href="<?= base_url('Admin/edit_undur/') . $u['id']; ?>" class="badge badge-primary"><i class="fas fa-edit"></i></a>
                                             <a href="<?= base_url('Admin/hapus_undur/') . $u['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');"><i class="fas fa-trash"></i></a>
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