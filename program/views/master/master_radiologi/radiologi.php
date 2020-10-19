<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('primer/head');?>
 <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS sidebar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini fixed">
<!-- Site wrapper -->
<div class="wrapper">

   <?php $this->load->view('primer/header');?>


  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
   <?php $this->load->view('primer/left_side');?>


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master 
        <small>Radiologi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master</a></li>
        <li class="active">Radiologi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
      <!-- Default box -->
	  
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Radiologi</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			<div class="margin">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
					Tambah Radiologi
				</button>
        <br>
			</div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Deskripsi</th>
                  <th>Biaya RS</th>
                  <th>Biaya Dokter</th>
                  <th>Biaya Radiografer</th>
				  <th>Fee Pengirim</th>
                  <th>Biaya</th>
                </tr>
                </thead>
                <tbody>
               <tr>
                      <td>1</td>
                      <td>Abdomen Polos</td>
                      <td>120.000,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Ankle Joint</td>
                      <td>110.000,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Ankle Joint Bilateral</td>
                      <td>220.000,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Antebrachi</td>
                      <td>110.000,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td></td>
                    </tr>
                    <tr>
                    <td>5</td>
                      <td>Antebrachi Bilateral</td>
                      <td>220.000,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Appendicorgam</td>
                      <td>350.000,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td></td>
                    </tr>
                    <tr>
                    <td>7</td>
                      <td>BNO</td>
                      <td>120.000,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Calcaneus</td>
                      <td>110.000,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td></td>
                    </tr>
                    <tr>
                    <td>9</td>
                      <td>Calcaneus Bilateral</td>
                      <td>220.000,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Cervical AP + Lateral</td>
                      <td>135.000,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td>0,00</td>
                      <td></td>
                    </tr>
                </tbody>
              </table>
        </div>
        <!-- /.box-body -->
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Radiologi</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Radiologi ID</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Radiologi ID">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Deskripsi</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Deskripsi">
                </div>
				<div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Biaya Rumah Sakit</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rp. 0,-">
                </div>
				<div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Biaya Pengirim</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rp. 0,-">
                </div>
				<div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Biaya Ruang</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rp. 0,-">
                </div>
				<div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Biaya Dokter</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rp. 0,-">
                </div>
				<div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Biaya BHP</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rp. 0,-">
                </div>
				<div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Biaya Overhead</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rp. 0,-">
                </div>
				<div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Biaya Radiografer</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rp. 0,-">
                </div>
				<div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Biaya Ruang</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rp. 0,-">
                </div>
				<div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Biaya Overhead</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rp. 0,-">
                </div>
                <div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Biaya Radiografer</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rp. 0,-">
                </div>
                <div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Biaya Alat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rp. 0,-">
                </div>
                <div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Biaya On Call</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rp. 0,-">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('primer/footer');?>

 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php //$this->load->view('primer/jse');?>
<!-- Tempat JQuery dll dibawah sini sesuaikan kenutuhan-->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
