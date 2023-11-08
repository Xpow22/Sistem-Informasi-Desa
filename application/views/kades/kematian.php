
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
              <a href="<?= site_url('Kematian/print');?>" class="btn btn-danger"><i class="bi bi-file me-1"></i> Cetak</a>
             
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

</main><!-- End #main -->
      
<script>
  $(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script>
                