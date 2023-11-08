
<main id="main" class="main">

<div class="pagetitle">
  <h1><?= $Judul;?></h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= site_url('Pendatang');?>"><?= $Judul;?></a></li>

    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Detail <?= $Judul;?></h5>
              <a href="<?= site_url('Pendatang/print');?>" class="btn btn-danger"><i class="bi bi-file me-1"></i> Cetak</a>
             
              <!-- Table with stripped rows -->
              <table class="table datatable" id="dataTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">No. KK</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Alamat Asal</th>
                    <th scope="col">Alamat Sekarang</th>
                    <th scope="col">Pindah Ke</th>
                    <th scope="col">Tanggal Pindah</th>
                    <th scope="col">Keterangan</th>
                    
              
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $no = 0;

                   

                    foreach ($Pendatang as $value) {
                        $no++
                    
                    ?> 

                
                  
                  
                    <th scope="row"><?php echo $no;?></th>
                    <td><?php echo $value->nik; ?></td>
                    <td><?php echo $value->kk; ?></td>
                    <td><?php echo $value->nama; ?></td> 
                    <td><?php echo $value->alamat_asal; ?></td>
                    <td><?php echo $value->alamat_sekarang; ?></td>
                    <td><?php echo $value->pindah; ?></td>
                    <td><?php echo $value->tanggal; ?></td>
                    <td><?php echo $value->keterangan; ?></td>
                    
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
                      <a href="<?php echo base_url('/Pendatang/fungsiDelete') ?>/<?php echo $value->id ?>" data-toggle="tooltip" data-placement="bottom" title="Hapus"class="btn btn-danger alert_notif btn-icon-text"> <i class="ti-trash btn-icon-prepend"></i>Yakin</a>
                    </div>
                  </div>
                </div>
              </div><!-- End Basic Modal-->

</main><!-- End #main -->
      
<script>
  $(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script>
                