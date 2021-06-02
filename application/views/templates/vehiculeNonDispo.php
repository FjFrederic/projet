<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FID | Fond d'Intervation pour le Développement</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewvehicule">
   <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/bower_components/select2/dist/css/select2.css">
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
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
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
        <li>
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
            <i class="fa fa-anchor "></i> <span>Entretien</span>
          </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align:center";>
        GESTION DES VEHICULES 
        <small>FID</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Vehicules</a></li>
        <li class="active">Vehicule Non Disponible</li>
      </ol>
    </section>

    <h2 class="align-center pb-3 mbr-fonts-style display-2">Listes des vehicules non disponibles</h2>  

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.box -->
          <div class="box">
            <div class="box-body">
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">Id</th>
                  <th width="8%">Referance</th>
                  <th width="8%">CodImmo</th>
                  <th width="8%">NumMatricule</th>
                  <th width="10%">NomChauff</th>
                  <th width="8%">DebutKm</th>
                  <th width="8%">KmActuel</th>
                  <th width="8%">KmRestant</th>
                  <th width="10%">DateVisite</th>
                  <th width="10%">DateProchVisite</th>
                  <th width="80%">Action</th>
                </tr>
                </thead>
                <!--<tbody>
                  <?php //include('affichvehicule.php'); ?>
                </tbody>-->
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Referance</th>
                  <th>CodImmo</th>
                  <th>NumMatricule</th>
                  <th>NomChauff</th>
                  <th>DebutKm</th>
                  <th>KmActuel</th>
                  <th>KmRestant</th>
                  <th>DateVisite</th>
                  <th>DateProchVisite</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">FID</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/theme/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/theme/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/theme/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClic-->
<script src="<?php echo base_url(); ?>assets/theme/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/theme/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/theme//dist/js/demo.js"></script>

<script>
  Affichage();
  
  function disponibilite(idVehicule,disponibilite){
    console.log('disponibilite', disponibilite, 'idVehicule', idVehicule);
    var action='disponibilite';
    $.ajax({
      url  : '<?php echo base_url(); ?>index.php/vehicule/vehicule_crud',
      type : 'POST',
      data : {id:idVehicule, action:action, disponibilite:disponibilite},
      dataTypee : "JSON",
      success : function(data){
        $('#example2').DataTable().ajax.reload(null, false);
      }
    });

  }

  function Affichage(){
      var employeeData = $('#example2').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"<?php echo base_url(); ?>index.php/vehicule/vehicule_crud",
      type:"POST",
     data:{action:'nonDisponible'},
    },
    "columnDefs":[
      {
        "targets":[3],
        "orderable":false,
      },
    ],
    "paging":true,
    "lengthChange":true,
    }); 
  }
 
</script>

