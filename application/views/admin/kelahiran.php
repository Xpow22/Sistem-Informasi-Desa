
<main id="main" class="main">

<div class="pagetitle">
  <h1><?= $Judul;?></h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= site_url('Kelahiran');?>"><?= $Judul;?></a></li>

    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Detail <?= $Judul;?></h5>
              <a href="<?= site_url('Form_kelahiran');?>" class="btn btn-info"><i class="bi bi-plus me-1"></i> Tambah</a>
             
              <!-- Table with stripped rows -->
              <table class="table datatable" id="dataTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">KK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
              
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                            $no = 0;

                            foreach ($Kelahiran as $k) {
                            $no++
                            ?>
                  
                   
                    <td><?php echo $no; ?></td>
                    <td><?php echo $k->nik; ?></td>
                    <td><?php echo $k->kk; ?></td>
                    <td><?php echo $k->nama; ?></td> 
                    <td><?php echo $k->tempat_lahir; ?></td> 
                    <td><?php echo $k->tanggal_lahir; ?></td> 
                    <td><?php echo $k->alamat; ?></td> 
                    <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal">
                        <i class="bi bi-trash me-1"></i>  Hapus
                        </button>
                       
                        <a href="<?php echo site_url('Edit_page_kelahiran/edit_page') ?>/<?php echo $k->id ?>"  class="btn btn-warning btn-icon-text"><i class="ti-file btn-icon-prepend"></i>Edit</a>
                        
                                
                    </td>
                    
                  </tr>
                
                </tbody>
                <?php

}
?>
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
                      <a href="<?php echo base_url('/Form_kelahiran/fungsiDelete') ?>/<?php echo $k->id ?>" data-toggle="tooltip" data-placement="bottom" title="Hapus"class="btn btn-danger alert_notif btn-icon-text"> <i class="ti-trash btn-icon-prepend"></i>Yakin</a>
                    </div>
                  </div>
                </div>
              </div><!-- End Basic Modal-->

              <div class="modal fade" id="basicModal1" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Data</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>

                  </div>
                </div>
              </div><!-- End Basic Modal-->

</main><!-- End #main -->
      
<script>
  $(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script>