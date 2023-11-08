
<main id="main" class="main">

<div class="pagetitle">
  <h1><?= $Judul;?></h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= site_url('Pindahan');?>"><?= $Judul;?></a></li>

    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Detail <?= $Judul;?></h5>
              <a href="<?= site_url('Pindahan/print');?>" class="btn btn-danger"><i class="bi bi-file me-1"></i> Cetak</a>
             
              <!-- Table with stripped rows -->
              <table class="table datatable" id="dataTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">No. KK</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Pindah Ke</th>
                    <th scope="col">Tanggal Pindah</th>
                    <th scope="col">Alasan Pindah</th>
                   
              
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $no = 0;

                   

                    foreach ($Pindahan as $value) {
                        $no++
                    
                    ?>

                
                   
                  
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $value->nik; ?></td>
                    <td><?php echo $value->kk; ?></td>
                    <td><?php echo $value->nama; ?></td> 
                    <td><?php echo $value->alamat; ?></td>
                    <td><?php echo $value->pindah; ?></td>
                    <td><?php echo $value->tanggal; ?></td>
                    <td><?php echo $value->alasan_pindah; ?></td>
                   
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
                