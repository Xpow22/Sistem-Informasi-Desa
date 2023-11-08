<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title;?></title>
  <meta content="Spektakula" name="description">
  <meta content="Spektakula" name="keywords">

  <!-- Favicons -->
  <link href="<?php base_url();?>admin/img/favicon.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">
  <link href="<?php base_url();?>admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php base_url();?>admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php base_url();?>admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php base_url();?>admin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php base_url();?>admin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php base_url();?>admin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php base_url();?>admin/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="<?php base_url();?>admin/vendor/simple-datatables/style.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?php base_url();?>admin/css/style.css" rel="stylesheet">

  <
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img href="<?php base_url();?>admin/img/logo.png" alt="">
        <span class="d-none d-lg-block">SPEKTAKULA</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

         

        <li class="nav-item dropdown">

          
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <a href="<?= site_url('Welcome'); ?>"type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i>  Logout</a>
          </a><!-- End Profile Iamge Icon -->


      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->




  
  