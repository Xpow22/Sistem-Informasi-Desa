
<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Penduduk</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= site_url('Dashboard');?>">Data Penduduk</a></li>

    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Detail Data Penduduk</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable" id="dataTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Tempat</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">NIK</th>
                    <th scope="col">No. KK</th>
                    <th scope="col">Aksi</th>
              
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                      $no = 0;
                    foreach($user as $tampil){
                      $no++
                    
                    ?>
                    <th scope="row"><?= $no;?></th>
                    <td><?php echo $tampil->nama; ?></td>
                    <td><?php echo $tampil->agama; ?></td>
                    <td><?php echo $tampil->tempat; ?></td>
                    <td><?php echo $tampil->tanggal_lahir; ?></td>
                    <td><?php echo $tampil->nik; ?></td>
                    <td><?php echo $tampil->kk; ?></td>
                    
                    <td><a href="#" class="btn btn-primary"><i class="bi bi-pen me-1"></i> Edit</a>
                    
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

</main><!-- End #main -->

<script>
  $(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script>