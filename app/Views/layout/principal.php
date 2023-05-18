<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gestor do escritório | <?php echo $this->renderSection('titulo'); ?> </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="<?php echo site_url('recursos/'); ?>vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="<?php echo site_url('recursos/'); ?>vendor/font-awesome/css/font-awesome.min.css">
  <!-- Custom Font Icons CSS-->
  <link rel="stylesheet" href="<?php echo site_url('recursos/'); ?>css/font.css">
  <!-- Google fonts - Muli-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="<?php echo site_url('recursos/'); ?>css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="<?php echo site_url('recursos/'); ?>css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="<?php echo site_url('recursos/'); ?>img/favicon.png">
  <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

  <?php echo $this->renderSection('estilos'); ?>
</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg">

      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="index.html" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Gestor</strong><strong> &nbsp;do Escritório</strong></div>
            <div class="brand-text brand-sm"><strong class="text-primary">G</strong><strong>E</strong></div>
          </a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>

        <!-- Log out               -->
        <div class="list-inline-item logout"> <a id="logout" href="login.html" class="nav-link">Sair <i class="icon-logout"></i></a></div>
      </div>

    </nav>
  </header>
  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="<?php echo site_url('recursos/'); ?>img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">Breno</h1>
          <p>Depto pessoal</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Opções</span>
      <ul class="list-unstyled">

        <li class="<?php echo (url_is('/') ? 'active' : ''); ?>">
          <a href="<?php echo site_url('/') ?>"> <i class="icon-home"></i>Home </a>
        </li>

        <li class="<?php echo (url_is('usuarios*') ? 'active' : ''); ?>">
          <a href="tables.html"> <i class="icon-grid"></i>Tables </a>
        </li>

        <li class="<?php echo (url_is('clientes*') ? 'active' : ''); ?>">
          <a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a>
        </li>

        <li class="<?php echo (url_is('grupos*') ? 'active' : ''); ?>">
          <a href="forms.html"> <i class="icon-padnote"></i>Forms </a>
        </li>

        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Cadastros </a>
          <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
            <li class="<?php echo (url_is('clientes*') ? 'active' : ''); ?>"><a href="<?php echo site_url('clientes') ?>">Clientes</a></li>
            <li class="<?php echo (url_is('usuarios*') ? 'active' : ''); ?>"><a href="<?php echo site_url('usuarios') ?>">Usuários</a></li>
            <li class="<?php echo (url_is('grupos*') ? 'active' : ''); ?>"><a href="<?php echo site_url('grupos') ?>">Grupos</a></li>
          </ul>
        </li>

        <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
      </ul>
    </nav>
    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <h2 class="h5 no-margin-bottom"><?php echo $titulo; ?></h2>
        </div>
      </div>
      <section class="no-padding-top no-padding-bottom">
        <?php echo $this->include('layout/mensagens'); ?>
        <?php echo $this->renderSection('caminho'); ?>
        <?php echo $this->renderSection('conteudo'); ?>
      </section>


      <footer class="footer">
        <div class="footer__block block no-margin-bottom">
          <div class="container-fluid text-center">
            <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            <p class="no-margin-bottom">2023-<?php echo date('Y'); ?> &copy; mvoi-sistemas</p>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- JavaScript files-->
  <script src="<?php echo site_url('recursos/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo site_url('recursos/'); ?>vendor/popper.js/umd/popper.min.js"> </script>
  <script src="<?php echo site_url('recursos/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo site_url('recursos/'); ?>vendor/jquery.cookie/jquery.cookie.js"> </script>
  <script src="<?php echo site_url('recursos/'); ?>vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo site_url('recursos/'); ?>vendor/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?php echo site_url('recursos/'); ?>js/charts-home.js"></script>
  <script src="<?php echo site_url('recursos/'); ?>js/front.js"></script>

  <?php echo $this->renderSection('scripts'); ?>
</body>

</html>