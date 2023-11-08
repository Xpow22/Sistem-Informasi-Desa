  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Cetak Data Desa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= site_url('Kades_kelahiran')?>">
              <i class="bi bi-circle"></i><span>Kelahiran</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('Kades_kematian')?>">
              <i class="bi bi-circle"></i><span>Kematian</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('Kades_pindahan')?>">
              <i class="bi bi-circle"></i><span>Pindahan</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('Kades_pendatang')?>">
              <i class="bi bi-circle"></i><span>Pendatang</span>
            </a>
          </li>
          <!-- <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Surat Masuk</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Surat Keluar</span>
            </a>
          </li> -->
        
          
        </ul>
    

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Laporan Produk Unggulan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
          <li>
            <a href="<?= site_url('InputProduk');?>">
              <i class="bi bi-circle"></i><span>Laporan Input Produk</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Keuangan Produk Unggulan</span>
            </a>
          </li>
         
          
        </ul>
        </il>
    </ul>

  </aside><!-- End Sidebar-->