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
        <li><a href="#"><i class="fa fa-dashboard"></i> Chauffeur</a></li>
        <li class="active">Vehicules</li>
      </ol>
    </section>
    
    <h2 class="align-center pb-3 mbr-fonts-style display-2">Listes des vehicules</h2>  
     
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.box -->
          <div class="box">
            <div class="box-body">
              <button type="button" class="btn btn-primary pull-right" id="addRow" data-toggle="modal" data-target="#modal-primary"><span class="glyphicon glyphicon-plus"></span><b>Nouveau</b></button>
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
                  <th width="10%"><span class="glyphicon glyphicon-cog"></span></th>
                  <th width="10%">Action</th>
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
                  <th><span class="glyphicon glyphicon-cog"></span></th>
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
  Ajout();
  Modal();
  Edit();
  Suppression();

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

  $(document).ready(function(){
    $( "#actuelKm" ).keyup(function() {
      let debutKm = $('input:text[id=debutKm]').val();
      let actuelKm = this.value;
      let restantKm = debutKm - actuelKm;
      $('input[id=restantKm]').val(restantKm);
    });
  });

  $(document).ready(function(){
    $( "#actuelKmMod" ).keyup(function() {
      let debutKmMod = $('input:text[id=debutKmMod]').val();
      let actuelKmMod = this.value;
      let restantKmMod = debutKmMod - actuelKmMod;
      $('input[id=restantKmMod]').val(restantKmMod);
    });
  });

  function Affichage(){
      var employeeData = $('#example2').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"<?php echo base_url(); ?>index.php/vehicule/vehicule_crud",
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
            url  : '<?php echo base_url(); ?>index.php/vehicule/vehicule_crud',
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
        url : '<?php echo base_url(); ?>index.php/vehicule/vehicule_crud',
        type : 'POST',
        data : {id:id, action:action},
        dataType : 'json',
        success : function(data){
          $('#modal-warning input[name=vehicule]').val(data.Id);
          $('#modal-warning input[name=Referance]').val(data.Referance);
          $('#modal-warning input[name=CodeImmo]').val(data.CodImmo);
          $('#modal-warning input[name=NumMatricule]').val(data.NumMatricule);
          $('#modal-warning input[name=NomChauff]').val(data.NomChauff);
          $('#modal-warning input[name=DebutKm]').val(data.DebutKm);
          $('#modal-warning input[name=KmActuel]').val(data.KmActuel);
          $('#modal-warning input[name=KmRestant]').val(data.KmRestant);
          $('#modal-warning input[name=DateVisite]').val(data.DateVisite);
          $('#modal-warning input[name=DateProchVisite]').val(data.DateProchVisite);
        },
      });
    });
   }
   function Edit(){
     $(document).on('click','.valider',function(){
        var form = $('#editform').serialize(this);//alert(form);
          $.ajax({
            url  : '<?php echo base_url(); ?>index.php/vehicule/vehicule_crud',
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
        if(confirm("Etes-vous sûr de vouloir supprimer le vehicule "+nom+" de la liste?")){
          $.ajax({
            url : '<?php echo base_url(); ?>index.php/vehicule/vehicule_crud',
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
                <h4 class="modal-title">NOUVEAU VEHICULE</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" id="addform">
                  <div class="box-body">
                   
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">Referance</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="Referance" placeholder="Referance" required="veuillez remplir ce champs">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">CodImmo</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="CodeImmo" placeholder="CodeImmo" required="veuillez remplir ce champs">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">NumMatricule</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="NumMatricule" placeholder="NumMatricule" required="veuillez remplir ce champs">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">NomChauff</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="NomChauff" placeholder="NomChauff" required="veuillez remplir ce champs">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">DebutKm</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="debutKm" name="DebutKm" placeholder="DebutKm" required="veuillez remplir ce champs">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">KmActuel</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="actuelKm" name="kmActuel" placeholder="kmActuel" required="veuillez remplir ce champs">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">KmRestant</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="restantKm" name="KmRestant" placeholder="KmRestant" required="veuillez remplir ce champs">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">DateVisite</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="DateVisite" placeholder="DateVisite" required="veuillez remplir ce champs">
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="nom" class="col-sm-2 control-label">DatePrcVisite</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="DateProchVisite" placeholder="DateProchVisite" required="veuillez remplir ce champs">
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
                        <input type="id" class="form-control" name="vehicule">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">Referance</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="Referance" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">CodImmo</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="CodeImmo">
                      </div>
                    </div>
                      <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">NumMatricule</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="NumMatricule">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">NomChauff</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="NomChauff">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">DebutKm</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="debutKmMod" name="DebutKm" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">KmActuel</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="actuelKmMod" name="KmActuel">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">KmRestant</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="restantKmMod" name="KmRestant" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">DateVisite</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="DateVisite">
                      </div>
                    </div>
                    <div class="form-group">
                     <label for="nom" class="col-sm-2 control-label">DatePrcVisite</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="DateProchVisite">
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
