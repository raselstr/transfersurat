<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/css/bootstrap.min.css">
<body>
<!-- Posisi Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aplikasi Surat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= site_url('welcome') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('profil') ?>">Profil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Master Data
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= site_url('suratmasuk') ?>">Surat Masuk</a></li>
            <li><a class="dropdown-item" href="#">Surat Keluar</a></li>
            <li><a class="dropdown-item" href="<?= site_url('pegawai') ?>">Pegawai</a></li>
          
          </ul>
          
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- Batas Navbar -->
<!-- Konten -->
<div class="container mt-5">
 <h1>Dashboard</h1>
 <?php $this->load->view($content) ?>
</div>
<!-- Batas Konten -->
</body>
</html>
<script type="text/javascript" src="<?= base_url() ?>dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>dist/js/bootstrap.bundle.js"></script>