<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.png') ?>">
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?=base_url();?>assets/css/bootstrap-chosen.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/custom.css" rel="stylesheet">
  </head>
  <?php
    $lvl = $this->session->userdata('lvl');
    $is_admin = $this->session->userdata('administrator');
  ?>
  <body>
    
  <header id="main-header">
        <nav class="navbar navbar-expand-lg top-navigation">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="<?=base_url();?>assets/images/bpom-logo.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?=base_url();?>assets/images/user-icon.png">
                                <?php echo $this->session->userdata('nama_lengkap'); ?> 
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="<?=base_url();?>user/profil" class="dropdown-item" href="#">
                                    <img src="" alt="">
                                    Profile
                                </a>
                                <a href="<?=base_url();?>user/ubah_password" class="dropdown-item" href="#">
                                    <img src="" alt="">
                                    Change Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="<?=base_url();?>login/logout" class="dropdown-item" href="#">
                                    <img src="" alt="">
                                    Log Out
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
      <!-- navbar-->
        <div class="navbar navbar-expand-lg bottom-navigation">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="<?=base_url();?>assets/images/icon-sidebar.png">
                </a>
    
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?=base_url();?>assets/images/daftar.png">
                                Indikator
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Indikator 1</a>
                                <a class="dropdown-item" href="#">Indikator 2</a>
                                <a class="dropdown-item" href="#">Indikator 3</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?=base_url();?>assets/images/daftar.png">
                                Kinerja
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Kinerja 1</a>
                                <a class="dropdown-item" href="#">Kinerja 2</a>
                                <a class="dropdown-item" href="#">Kinerja 3</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tutorial</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>