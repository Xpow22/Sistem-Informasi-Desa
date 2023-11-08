
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
              <form action="<?php echo base_url() . 'FormDataUser/tambah_aksi'; ?>" method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" name="username" id="username" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" id="password" name="password" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Pilih Hak Akses</label>
                  <div class="col-sm-10">
                    <select class="form-select" id="role_id" name="role_id" aria-label="Default select example">
                      <option selected>Pilih Salah Satu Hak Akses</option>
                      <option value="1">Admin</option>
                      <option value="2">Kepala Desa</option>
                      <option value="3">User</option>
                    </select>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>

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