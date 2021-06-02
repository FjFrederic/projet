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
        <li><a href="#"><i class="fa fa-dashboard"></i> Parcours</a></li>
        <li class="active">Entretien</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.box -->
          <div class="box">
            <div class="box-body">
              <button type="button" class="btn btn-primary pull-right" id="addRow" data-toggle="modal" data-target="#modal-primary"><span class="glyphicon glyphicon-plus"></span><b>Formulaire</b></button>
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="4%">Id</th>
                  <th width="8%">DateSaisi</th>
                  <th width="8%">DateEntretien</th>
                  <th width="8%">Vehicule</th>
                  <th width="10%">Reparation</th>
                  <th width="8%">Pneumatique</th>
                  <th width="8%">Revision</th>
                  <th width="8%">TotalEntretien</th>
                  <th width="10%"><span class="glyphicon glyphicon-cog"></span></th>
                </tr>
                </thead>
                <!--<tbody>
                  <?php //include('affichvehicule.php'); ?>
                </tbody>-->
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>DateSaisi</th>
                  <th>DateEntretien</th>
                  <th>Vehicule</th>
                  <th>Reparation</th>
                  <th>Pneumatique</th>
                  <th>Revision</th>
                  <th>TotalEntretien</th>
                  <th><span class="glyphicon glyphicon-cog"></span></th>
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
  Ajout();
  Modal();
  Edit();
  Suppression();

  $(document).ready(function(){
    $( "#revision" ).keyup(function() {
      let reparation = $('input:text[id=reparation]').val();
      console.log('reparation :', montantTotal);
      let pneumatique = $('input:text[id=pneumatique]').val();
      console.log('pneumatique :', pneumatique);
      let revision = this.value;
      console.log('revision :', revision);
      let totalEntretien = parseInt(reparation) + parseInt(pneumatique) + parseInt(revision);
      console.log('totalEntretien :', totalEntretien);
      $('input[id=totalEntretien]').val(totalEntretien);

    });
  });

  $(document).ready(function(){
    $( "#revisionModif" ).keyup(function() {
      let reparationModif = $('input:text[id=reparationModif]').val();
      let pneumatiqueModif = $('input:text[id=pneumatiqueModif]').val();
      let revisionModif = this.value;
      let totalEntretienModif = parseInt(reparationModif) + parseInt(pneumatiqueModif) + parseInt(revisionModif);
      $('input[id=totalEntretienModif]').val(totalEntretienModif);

    });
  });

  function Affichage(){
      var employeeData = $('#example2').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"<?php echo base_url(); ?>index.php/entretien/entretien_crud",
      type:"POST",
     data:{action:'read'},
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
   function Ajout()
   {
      $(document).on('click','.ajouter',function(){
        var form = $('#addform').serialize(this);
        //alert(form);
          $.ajax({
            url  : '<?php echo base_url(); ?>index.php/entretien/entretien_crud',
            type : 'POST',
            data :  form,
            dataType : "JSON",
            success : function(data){
              $('#addform')[0].reset(); 
              $('#example2').DataTable().ajax.reload(null, false);
            }
           });
        });
   }
   function Modal()
   {
    $('#example2').on('click','.editer',function(){
      var id = $(this).attr('id');
      var action='modal';
      $.ajax({
        url : '<?php echo base_url(); ?>index.php/entretien/entretien_crud',
        type : 'POST',
        data : {id:id, action:action},
        dataType : 'json',
        success : function(data){
          $('#modal-warning input[name=entretien]').val(data.Id);
          $('#modal-warning input[name=DateSaisi]').val(data.DateSaisi);
          $('#modal-warning input[name=DateEntretien]').val(data.DateEntretien);
          $('#modal-warning input[name=Vehicule]').val(data.Vehicule);
          $('#modal-warning input[name=Reparation]').val(data.Reparation);
          $('#modal-warning input[name=Pneumatique]').val(data.Pneumatique);
          $('#modal-warning input[name=Revision]').val(data.Revision);
          $('#modal-warning input[name=TotalEntretien]').val(data.TotalEntretien);
        },
      });
    });
   }
   function Edit(){
     $(document).on('click','.valider',function(){
        var form = $('#editform').serialize(this);//alert(form);
          $.ajax({
            url  : '<?php echo base_url(); ?>index.php/entretien/entretien_crud',
            type : 'POST',
            data :  form,
            dataTypee : "JSON",
            success : function(data){
             $('#example2').DataTable().ajax.reload(null, false);
            }
          });
        });
    }

    function Suppression()
    {
      $('#example2').on('click','.supprimer',function(){
        var id = $(this).attr('id');
        var nom = $(this).attr('id1');
        var action = 'delete';
        //alert(id);
        if(confirm("Etes-vous sûr de vouloir supprimer l'entretien "+nom+" de la liste?")){
          $.ajax({
            url : '<?php echo base_url(); ?>index.php/entretien/entretien_crud',
            type : 'POST',
            data : {id:id, action:action},
            dataType : "JSON",
            success : function(data){
              $('#example2').DataTable().ajax.reload(null, false);
            }
          });
        }
        else{return false;}
      });
    }
</script>
        <div class="modal modal-primary fade" id="modal-primary">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">FORMULAIRES</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" id="addform">
                  <div class="box-body">
                   
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">DateSaisi</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="DateSaisi" placeholder="DateSaisi" required="veuillez remplir ce champs">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">DateEntretien</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="DateEntretien" placeholder="DateEntretien" required="veuillez remplir ce champs">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">Vehicule</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="Vehicule" placeholder="Vehicule" required="veuillez remplir ce champs">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">Reparation</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="reparation" name="Reparation" placeholder="Reparation" required="veuillez remplir ce champs">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">Pneumatique</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="pneumatique" name="Pneumatique" placeholder="Pneumatique" required="veuillez remplir ce champs">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">Revision</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="revision" name="Revision" placeholder="Revision" required="veuillez remplir ce champs">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">TotalEntretien</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="totalEntretien" name="TotalEntretien" placeholder="TotalEntretien" required="veuillez remplir ce champs">
                      </div>
                    </div>

                    <input type="hidden" name="action" value="add">
                  </div>
                </form>
                </div>
               <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-outline ajouter"  data-dismiss="modal">Ajouter</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
 <!--MODAL UPDATE-->
        <div class="modal modal-warning fade" id="modal-warning">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">METTRE A JOUR LA LISTE</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" id="editform">
                  <div class="box-body">
                  <div class="form-group">
                      <label for="Id" class="col-sm-2 control-label">Id</label>
                      <div class="col-sm-10">
                        <input type="id" class="form-control" name="entretien">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">DateSaisi</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="DateSaisi" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">DateEntretien</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="DateEntretien">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">Vehicule</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="Vehicule">
                      </div>
                    </div>
                 
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">Reparation</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="reparationModif" name="Reparation" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">Pneumatique</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="pneumatiqueModif" name="Pneumatique">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">Revision</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="revisionModif" name="Revision" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">TotalEntretien</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="totalEntretienModif" name="TotalEntretien">
                      </div>
                    </div>
                    
                  </div>
                  <input type="hidden" name="action" value="update">
                <!-- /.box-footer -->
              </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-outline valider"  data-dismiss="modal">Valider</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</body>
</html>
