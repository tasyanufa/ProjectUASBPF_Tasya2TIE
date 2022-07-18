<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Skydash Admin</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= base_url('assets4/')?>vendors/feather/feather.css">
	<link rel="stylesheet" href="<?= base_url('assets4/')?>vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets4/')?>vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="<?= base_url('assets4/')?>vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?= base_url('assets4/')?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="<?= base_url('assets4/')?>vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets4/')?>js/select.dataTables.min.css">
	<link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  

	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url('assets4/')?>css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= base_url('assets4/')?>images/logo/4copy.png" />
</head>


<body>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
				<a class="navbar-brand brand-logo mr-5" href="index.html"><img
						src="<?= base_url('assets4/')?>images/logo/3copy.png" class="mr-2" alt="logo" width="150px" /></a>
				<a class="navbar-brand brand-logo-mini" href="index.html"><img
						src="<?= base_url('assets4/')?>images/logo/2copy.png" alt="logo" width="100px" /></a>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
				<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
					<span class="icon-menu"></span>
				</button>
				<ul class="navbar-nav mr-lg-2">
					<li class="nav-item nav-search d-none d-lg-block">
						<div class="input-group">
							<div class="input-group-prepend hover-cursor" id="navbar-search-icon">
								<span class="input-group-text" id="search">
									<i class="icon-search"></i>
								</span>
							</div>
							<input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
								aria-label="search" aria-describedby="search">
						</div>
					</li>
				</ul>
				<ul class="navbar-nav navbar-nav-right">
					<!-- <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
          </li> -->
					<?php
                            if($user['role'] == 'User'){
                        ?>
					<li class="nav-item dropdown">
						<a class="nav-link count-indicator dropdown-toggle" href="<?= base_url('Profil/pembelian') ?>">
							<!-- <i class="mdi mdi-thumb-up-outline"></i> -->
              <i class="mdi mdi-thumb-up-outline"></i>
							<span class="counter">!</span>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link count-indicator dropdown-toggle" href="<?= base_url('Profil/detail') ?>">
							<i class="mdi mdi-cart-outline"></i>
							<span class="counter"><?= $jlh ?></span>
						</a>
					</li>
					<!-- <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="<?= base_url('Profil/pembelian') ?>">
                                    <i class="fas fa-history fa-fw"></i>
                                    <span class="badge badge-danger badge-counter">
                                        !
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toogle" href="<?= base_url('Profil/detail') ?>">
                                    <i class="mdi mdi-cart-outline"></i>
                                    <span class="badge badge-danger badge-counter">
                                        <?= $jlh ?>
                                    </span>
                                </a>
                            </li> -->
					<?php
                            }
                            ?>
					<li class="nav-item nav-profile dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
							<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
							<img src="<?= base_url('assets4/images/profile/') . $user['gambar']; ?>" alt="profile">
						</a>
						<!-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div> -->
					</li>
				</ul>
				<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
					data-toggle="offcanvas">
					<span class="icon-menu"></span>
				</button>
			</div>
		</nav>

		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_settings-panel.html -->
			<!-- <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
       -->
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<ul class="nav">
					<?php 
            if($user['role'] == 'Admin') { ?>
					<li class="nav-item">
						<a class="nav-link " href="<?= site_url('Dashboard/') ?>">
							<i class="mdi mdi-application" style="margin-right:20px"></i>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<!-- <a class="nav-link" data-toggle="collapse" href="#data" aria-expanded="false" aria-controls="data">
							<i class="icon-grid-2 menu-icon"></i>
							<span class="menu-title">Data</span>
							<i class="menu-arrow"></i>
						</a> -->
          </li>
          <!-- <li class="nav-item">
						<a class="nav-link" href="<?= site_url('Pelanggan/') ?>" aria-expanded="false" aria-controls="data">
							<i class="mdi mdi-account-box" style="margin-right:20px"></i>
							<span class="menu-title">Pelanggan</span>
						</a>
          </li> -->
          <li class="nav-item">
						<a class="nav-link" href="<?= site_url('Kategori/') ?>" aria-expanded="false" aria-controls="data">
							<i class="mdi mdi-more" style="margin-right:20px"></i>
							<span class="menu-title">Kategori</span>
						</a>
          </li>
          <li class="nav-item">
						<a class="nav-link" href="<?= site_url('Produk/') ?>" aria-expanded="false" aria-controls="data">
							<i class="mdi mdi-view-grid" style="margin-right:20px"></i>
							<span class="menu-title">Produk</span>
						</a>
          </li>
          <li class="nav-item">
						<a class="nav-link" href="<?= site_url('Penjualan/') ?>" aria-expanded="false" aria-controls="data">
							<i class="mdi mdi-book-open" style="margin-right:20px"></i>
							<span class="menu-title">Penjualan</span>
						</a>
          </li>
						<!-- <div class="collapse" id="data">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="<?= site_url('Kategori/') ?>">Kategori</a></li>
							</ul>
						</div>
						<div class="collapse" id="data">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="<?= site_url('Produk/') ?>">Produk</a></li>
							</ul>
						</div>
						<div class="collapse" id="data">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="<?= site_url('Penjualan/') ?>">Penjualan</a></li>
							</ul>
						</div> -->
						<!-- <div class="collapse" id="data">
                  <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?= site_url('Pembelian/') ?>">Pembelian</a></li>
                  </ul>
                </div> -->
					</li>

          
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('auth/logout') ?>">
							<i class="mdi mdi-logout-variant" style="margin-right:20px"></i>
							<span class="menu-title">Logout</span>
						</a>
					</li>
					<?php }
            else {
            ?>
            <!-- <li class="nav-item">
						<a class="nav-link" href="<?= site_url('Profil/tambahPelanggan') ?>">
							<i class="icon-head menu-icon"></i>
							<span class="menu-title">Pelanggan</span>
						</a>
					</li> -->
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('Profil/') ?>">
							<i class="icon-head menu-icon"></i>
							<span class="menu-title">Profil</span>
						</a>
					</li>
					<!-- <li class="nav-item">
                <a class="nav-link" href="<?= site_url('Profil/Kategori') ?>">
                  <i class="icon-grid-2 menu-icon"></i>
                  <span class="menu-title">Kategori</span>
                </a>
            </li> -->
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('Profil/produk') ?>">
							<i class="icon-grid-2 menu-icon"></i>
							<span class="menu-title">Produk</span>
						</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link" href="<?= site_url('Profil/Kategori') ?>">
							<i class="icon-grid-2 menu-icon"></i>
							<span class="menu-title">Kategori</span>
						</a>
					</li> -->
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('auth/logout') ?>">
							<i class="mdi mdi-logout-variant" style="margin-right:20px"></i>
							<span class="menu-title">Logout</span>
						</a>
					</li>
					<?php
            }
            ?>
				</ul>
			</nav>
