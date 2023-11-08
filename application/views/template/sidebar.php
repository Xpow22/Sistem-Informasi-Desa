  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= site_url('Dashboard');?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= site_url('Kelahiran');?>">
              <i class="bi bi-circle"></i><span>Kelahiran</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('Kematian');?>">
              <i class="bi bi-circle"></i><span>Kematian</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('Pindahan');?>">
              <i class="bi bi-circle"></i><span>Pindahan</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('Pendatang');?>">
              <i class="bi bi-circle"></i><span>Pendatang</span>
            </a>
          </li>
          <li>
          <!-- <li>
            <a href="<?= site_url('Surat_in');?>">
              <i class="bi bi-circle"></i><span>Surat Masuk</span>
            </a>
          </li>
          <li>
          <li>
            <a href="<?= site_url('Surat_out');?>">
              <i class="bi bi-circle"></i><span>Surat Keluar</span>
            </a>
          </li> -->
          <li>
            <a href="<?= site_url('KelolaDataUser');?>">
              <i class="bi bi-circle"></i><span>Kelola Data User</span>
            </a>
          </li>
          
        </ul>
    

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Produk Unggulan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         
          <li>
          <a href="<?= site_url('InputProduk');?>">
              <i class="bi bi-circle"></i><span> Input Produk</span>
            </a>
          </li>

          <li>
          <a href="<?= site_url('Riwayat_transaksi');?>">
              <i class="bi bi-circle"></i><span>Riwayat Transaksi</span>
            </a>
          </li>
         
          
        </ul>

    </ul>

  </aside><!-- End Sidebar-->