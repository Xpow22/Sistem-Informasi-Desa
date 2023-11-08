
<main id="main" class="main">

<div class="pagetitle">
  <h1><?= $Judul;?></h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= site_url('Kematian');?>"><?= $Judul;?></a></li>

    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Detail <?= $Judul;?></h5>
              <a href="<?= site_url('Form_Kematian');?>" class="btn btn-info"><i class="bi bi-plus me-1"></i> Tambah</a>
             
              <!-- Table with stripped rows -->
              <table class="table datatable" id="dataTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">No. KK</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tanggal Kematian</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
              
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $no = 0;
                    foreach ($Kematian as $value) {
                        $no++ ?>

                    <th scope="row"><?= $no;?></th>
                    <td><?php echo $value->nik ?></td>
                    <td><?php echo $value->kk ?></td>
                    <td><?php echo $value->nama ?></td> 
                    <td><?php echo $value->tanggal ?></td>
                    <td><?php echo $value->alamat ?></td>
                    <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal">
                        <i class="bi bi-trash me-1"></i>  Hapus
                        </button>
                        <a href="<?php echo base_url('Kematian/edit_page') ?>/<?php echo $value->id ?>"  class="btn btn-warning btn-icon-text"><i class="ti-file btn-icon-prepend"></i>Edit</a>
                                
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
                      <a href="<?php echo base_url('/Kematian/fungsiDelete') ?>/<?php echo $value->id ?>" data-toggle="tooltip" data-placement="bottom" title="Hapus"class="btn btn-danger alert_notif btn-icon-text"> <i class="ti-trash btn-icon-prepend"></i>Yakin</a>
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
                