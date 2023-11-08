
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
              <a href="<?= site_url('Kelahiran/print');?>" class="btn btn-danger"><i class="bi bi-file me-1"></i> Cetak</a>
             
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
    

</main><!-- End #main -->
      
<script>
  $(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script>