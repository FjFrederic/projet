<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FID | Fond d'Intervation pour le Développement</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/bower_components/select2/dist/css/select2.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini"> 
  <div class="wrapper">
 <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>index.php" class="logo">
      <span class="logo-lg"><b>FID</b></span>
        <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>FID</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/theme/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Zefania</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">GESTION DES VEHICULES FID</li>
        <li class="active">
          <a href="<?php echo base_url(); ?>index.php">
            <i class="fa fa-home"></i> <span>Accueil</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url(); ?>index.php/Chauffeur/liste">
            <i class="fa fa-anchor"></i> <span>Chauffeur</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Vehicule</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>index.php/Vehicule/liste"><i class="fa fa-circle-o"></i> Liste des vehicules</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Vehicule/liste2"><i class="fa fa-circle-o"></i> Vehicule Disponnible</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Vehicule/liste3"><i class="fa fa-circle-o"></i> Vehicule  Non Disponnible</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url(); ?>index.php/Carburant/liste">
            <i class="fa fa-anchor"></i> <span>Consomation</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url(); ?>index.php/Parcours/liste">
            <i class="fa fa-anchor "></i> <span>Parcours</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url(); ?>index.php/Entretien/liste">
            <i class="fa fa-anchor"></i> <span>Entretien</span>
          </a>
        </li>
       
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        GESTION DES VEHICULES 
        <small>FID</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Gestion des vehicules</a></li>
        <li class="active">Accueil</li>
      </ol>
    </section>
    <!-- Main content -->
 <section class="mbr-section content4 cid-qvXQ3x2kLv" id="content4-o" data-rv-view="640">
    <div class="box-body">
      <div class="box box-success">
           <div class="box-header with-border"style="background: #004d00;color: white;">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">LES ACTIONS DISPONNIBLES</h2>
            </div>
        </div>
    </div>
</section>

<section class="features2 cid-qvXpLBwtPn" id="features2-4" data-rv-view="642">

     <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-img">
                    <br>
                    <img src="assets/theme/images/vehicule.png" alt="Mobirise" title="" media-simple="true">
                    </div>
                    <div class="card-box">
                    <br>
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">Vehicules FID</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Vous pouvez ajouter, consulter, modifier <br> ou supprimer les donnees sur vos vehicule. 
                        </p>
                  </div>
              </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/theme/images/consommation.png" alt="Mobirise" title="" media-simple="true">
                    </div>
                    <div class="card-box ">
                    <br>
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">Consommation Vehicule</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                             Ici vous pouvez inserer, consulter et modifier <br> les informations concernant vos vehicule . 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features2 cid-qvXpOsy3Y6" id="features2-5" data-rv-view="645">

    <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/theme/images/parcours.png" alt="Mobirise" title="" media-simple="true">
                    </div>
                    <div class="card-box">
                    <br>
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">Parcours vehicule</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Vous pouvez ajouter, consulter, exporter, modifier <br> ou supprimer les donnees sur votre parcours de vehicule. 
                        </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/theme/images/entretien.png" alt="Mobirise" title="" media-simple="true">
                    </div>
                    <div class="card-box ">
                    <br>
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">Entretiens vehicule</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Vous serez l'administrateur des entretiens sur <br> vos entretiens pour chacun de vos vehicule.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- /.modal-content -->
  </div>
<!-- /.modal-dialog -->
</div>
</body>
</html>

