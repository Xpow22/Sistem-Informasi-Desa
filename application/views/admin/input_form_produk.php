
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
              <h5 class="card-title">Form <?= $Judul;?></h5>
              <form action="<?php echo base_url() . 'InputProduk/tambah_data'; ?>" method="post" enctype="multipart/form-data">
            
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Produk</label>
                  <div class="col-sm-10">
                    <input type="text" name="produk" id="produk" class="form-control" required placeholder="Masukan Nama Produk">
                    <small style="color : red;">*Wajib di isi</small>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="text" id="harga" name="harga" class="form-control" required placeholder="Masukan Harga">
                    <small style="color : red;">*Contoh : 50000</small>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="gambar" class="col-sm-2 col-form-label">Gambar Produk</label>
                  <div class="col-sm-10">
                    <input type="file" id="gambar" name="gambar" required class="form-control">
                    <small style="color : red;">*File : .jpg/.png</small>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                  <div class="col-sm-10">
                    <input type="text" id="deskripsi" required name="deskripsi" class="form-control" placeholder="Masukan Deskripsi Produk">
                    <small style="color : red;">*Maksimal 1000 Kata</small>
                  </div>
                </div>
               
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= site_url('InputProduk');?>" class="btn btn-danger">Batal</a>
                </form>
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