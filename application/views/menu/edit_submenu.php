 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800"> <?= $title; ?></h1>

     <?php base_url(validation_errors()); ?>

     <div class="row nt-3">
         <div class="col">
             <form action="<?= base_url('Menu/edit_submenu/' . $subMenu['id']); ?>" method="post">
                 <div class="form-group">
                     <label for="menu">SubMenu title</label>
                     <input type="text" class="form-control" id="title" name="title" value="<?= $subMenu['title']; ?>">
                     <div class="form-group">
                         <label for="menu">Menu</label>
                         <select name="menu_id" id="menu_id" class="form-control">
                             <option value="">Pilih Menu</option>
                             <?php foreach ($menu as $m) : ?>
                                 <?php if ($subMenu['menu_id'] == $m['id']) { ?>
                                     <option value="<?= $subMenu['menu_id']; ?>" selected><?= $m['menu']; ?></option>
                                 <?php } else { ?>
                                     <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                 <?php } ?>
                             <?php endforeach; ?>
                         </select>
                     </div>
                     <div class="form-group">
                         <label for="url">Url</label>
                         <input type="text" class="form-control" id="url" name="url" value="<?= $subMenu['url']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="icon">Icon</label>
                         <input type="text" class="form-control" id="icon" name="icon" value="<?= $subMenu['icon']; ?>">
                     </div>

                     <div class="form-group">
                         <label for="is_active">Is Active</label>
                         <input type="text" class="form-control" id="is_active" name="is_active" value="<?= $subMenu['is_active']; ?>">
                     </div>
                 </div>

                 <div class="position-relative">
                     <button class="btn btn-secondary px-5 position-absolute" style="top:0; right:150px;">
                         <a href="<?= base_url('Menu/submenu/'); ?>" class="text-white" style="text-decoration: none;">Kembali</a>
                     </button>
                     <button type="submit" class="btn btn-primary px-5 position-absolute" style="top:0; right:0;">Kirim</button>
                 </div>
             </form>
         </div>
     </div>
     <br>
 </div>


 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->