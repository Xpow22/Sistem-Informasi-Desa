
<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Edit Data Kelahiran</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= site_url('Kalahiran');?>">Form Edit Data Kelahiran</a></li>

    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Form Edit Data Kelahiran</h5>
              <form action="<?php echo base_url() . 'Form_kelahiran/FungsiEdit'; ?>" method="post">
              
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">ID</label>
                  <div class="col-sm-10">
                    <input type="text" name="id" id="id" class="form-control" value="<?php echo $queryEdit->id?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">NIK</label>
                  <div class="col-sm-10">
                    <input type="text" name="nik" id="nik" class="form-control" value="<?php echo $queryEdit->nik?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="NoKK" class="col-sm-2 col-form-label">No. KK</label>
                  <div class="col-sm-10">
                    <input type="text" id="kk" name="kk" class="form-control" value="<?php echo $queryEdit->kk?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $queryEdit->nama?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="tampat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="<?php echo $queryEdit->tempat_lahir?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="<?php echo $queryEdit->tanggal_lahir?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" id="alamat" name="alamat" class="form-control" value="<?php echo $queryEdit->alamat;?>">
                  </div>
                </div>


               

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= site_url('Kelahiran');?>" class="btn btn-danger">Batal</a>
                </form>
            </div>
          </div>

        </div>
      </div>
    </section>

</main><!-- End #main -->


