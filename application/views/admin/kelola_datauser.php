
<main id="main" class="main">

<div class="pagetitle">
  <h1><?= $Judul;?></h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= site_url('KelolaDataUser');?>"><?= $Judul;?></a></li>

    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Detail <?= $Judul;?></h5>
              <a href="<?= site_url('FormDataUser');?>" class="btn btn-info"><i class="bi bi-plus me-1"></i> Tambah</a>
              <!-- <a href="<?= site_url('FormDataUser');?>" class="btn btn-warning"><i class="bi bi-plus me-1"></i> Tambah User Warga</a> -->
             
              <!-- Table with stripped rows -->
              <table class="table datatable" id="dataTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
              
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $no = 0;

                   

                    foreach ($Users as $value) {
                        $no++
                    
                    ?>

                
                    <th scope="row"><?php echo $no;?></th>
                    <td><?php echo $value->username; ?></td>
                    <td><?php echo $value->password; ?></td>
                    <td><?php echo $value->role_id; ?></td> 
                  
                    <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editmodal<?= $value->id?>">
                        <i class="bi bi-pen me-1"></i>  Edit
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal">
                        <i class="bi bi-trash me-1"></i>  Hapus
                        </button>
                                
                    </td>
                  </tr>
                 <?php

                    }
                ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Notifikasi</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <p>Apakah anda yakin akan menghapus data ini?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                      <a href="<?php echo base_url('/Edit_user/fungsiDelete') ?>/<?php echo $value->id ?>" data-toggle="tooltip" data-placement="bottom" title="Hapus"class="btn btn-danger alert_notif btn-icon-text"> <i class="ti-trash btn-icon-prepend"></i>Yakin</a>
                    </div>
                  </div>
                </div>
              </div><!-- End Basic Modal-->


              <?php
                    $no = 0;

                   

                    foreach ($Users as $value) {
                        $no++
                    
                    ?>
              <div class="modal fade" id="editmodal<?= $value->id?>" tabindex="-3">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Form Edit User</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      
               <form method="post" action="<?php echo site_url('Edit_user/fungsiEdit/'. $value->id); ?>">
                <div class="row mb-3">
                  
                    <input type="hidden" name="id" id="id" disabled  value="<?php echo $value->id; ?>" class="form-control">
                  
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" name="username" id="username" value="<?php echo $value->username; ?>" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="text" name="password" id="password" value="<?php echo $value->password; ?>" class="form-control">
                  </div>
                </div>
               
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Pilih Hak Akses</label>
                  <div class="col-sm-10">
                    <select class="form-select" disabled id="role_id" name="role_id" aria-label="Default select example">
                      <option value="<?php echo $value->role_id; ?>"><?php echo $value->role_id; ?></option>
                    
                    </select>
                  </div>
                </div>
                  
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary">Simpan Perubahan</button>
                      <a class="btn btn-danger" href="<?php echo site_url('KelolaDataUser'); ?>">Batal</a>
                    </div>
                    
                  </div>
                </div>
              </div><!-- End edit Modal-->
              <?php

}
?>
</form>
</main><!-- End #main -->
      
<script>
  $(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script>