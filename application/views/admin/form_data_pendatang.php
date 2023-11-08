
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
              <h5 class="card-title">Form <?= $Judul;?></h5>
              <form action="<?php echo base_url() . 'Form_pendatang/tambah_data'; ?>" method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">NIK</label>
                  <div class="col-sm-10">
                    <input type="text" name="nik" id="nik" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="NoKK" class="col-sm-2 col-form-label">No. KK</label>
                  <div class="col-sm-10">
                    <input type="text" id="kk" name="kk" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" id="nama" name="nama" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="alamat" class="col-sm-2 col-form-label">Alamat Asal</label>
                  <div class="col-sm-10">
                    <input type="text" id="alamat_asal" name="alamat_asal" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="alamat" class="col-sm-2 col-form-label">Alamat Sekarang</label>
                  <div class="col-sm-10">
                    <input type="text" id="alamat_sekarang" name="alamat_sekarang" class="form-control">
                  </div>
                </div>
               

                <div class="row mb-3">
                  <label for="alamat" class="col-sm-2 col-form-label">Pindah Ke</label>
                  <div class="col-sm-10">
                    <input type="text" id="pindah" name="pindah" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Pindah</label>
                  <div class="col-sm-10">
                    <input type="date" id="tanggal" name="tanggal" class="form-control">
                  </div>
                </div>

                
                <div class="row mb-3">
                  <label for="alamat" class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" id="keterangan" name="keterangan" class="form-control">
                  </div>
                </div>

              


               

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= site_url('pendatang');?>" class="btn btn-danger">Batal</a>

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