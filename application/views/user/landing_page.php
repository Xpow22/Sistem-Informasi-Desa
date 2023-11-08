<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SPEKTAKULA - <?= $title;?> </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php base_url();?>../assets/landingPage/assets/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php base_url();?>vendor/landingPage/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">SPEKTAKULA</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#produk">PRODUK</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" > <?php $keranjang = 'Keranjang : '.$this->cart->total_items(). '  items'?>
                        <?= $keranjang?>   </a>
                       
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= site_url('auth');?>">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">

                <h1 class="masthead-heading text-uppercase mb-0">PRODUK UNGGULAN DESA</h1>
                <!-- Icon Divider
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div> -->
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Desa Kalitengah Kecamatan Tengah Tani</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="produk">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">PRODUK</h2>
                 <!-- Icon Divider-->
                 <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fa fa-shopping-cart"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
               
                <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">

                <?php foreach ($produk as $brg) :?> 
                <div class="card mb-3 mr-3"  style="width: 25rem;">
                  <img src="<?php echo base_url().'/assets/uploads/'.$brg->gambar?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-1"><?php echo $brg->produk?> </h5>
                        <small class="card-text mb-1"><?php echo $brg->deskripsi?> </small></br></br>
                        <a  class="btn btn-success "><?php echo rupiah($brg->harga)?> </a>
                        <?php echo anchor('Welcome/tambah_ke_keranjang/'.$brg->id,'<div class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Tambah Ke Keranjang</div>') ?>
                        <!-- <a  class="btn btn-primary" href="<?php echo base_url('Welcome/tambah_ke_keranjang/'). $brg->id ?>"><i class="fa fa-shopping-cart"></i>Tambah Keranjang</a> -->
                    </div>
                </div>
                <?php endforeach;?>
                
                </div>
            </div>
        </section>
       
   
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Lokasi</h4>
                        <p class="lead mb-0">
                          Desa Kalitengah Kecamatan Tengah Tani
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Tentang </h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Tentang</h4>
                        <p class="lead mb-0">
                            Aplikasi ini merupakan aplikasi untuk produk unggulan desa kalitengah
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Sistem Informasi Pengolahan Data Terpadu Dan Produk Unggulan Desa Kalitengah </small></div>
        </div>
       
      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php base_url();?>../vendor/landingPage/css/styles.cssjs/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
