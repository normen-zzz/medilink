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
        Master Medis
        <small>Data Tindakan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Halaman</a></li>
        <li class="active">Halaman Sekarang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
      <!-- Default box -->
	  
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar Tindakan</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><center>ID</center></th>
                  <th><center>Deskripsi</center></th>
                  <th><center>Aksi</center></th>
                </tr>
                </thead>
                <tbody>
					<tr>
                      <td><center>2</center></td>
                      <td><center>Mobilitation of Other Joint</center></td>
                      <td>
						<center>
							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
								Cek Detail
							</button>
						</center>
					  </td>
                    </tr>
                    <tr>
                      <td><center>3</center></td>
                      <td><center>Perawatan Saluran Akar</center></td>
                      <td>
						<center>
							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
								Cek Detail
							</button>
						</center>
					  </td>
                    </tr>
                    <tr>
                      <td><center>4</center></td>
                      <td><center>Anterbrachi/Lengan Bawah</center></td>
                      <td>
						<center>
							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
								Cek Detail
							</button>
						</center>
					  </td>
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
                <h4 class="modal-title">Detail : <i>Mobilitation of Other Joint</i></h4>
              </div>
              <div class="modal-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th><center>Nama Kelas</center></th>
                    <th><center>Biaya RS</center></th>
                    <th><center>Biaya Dokter</center></th>
                    <th><center>Biaya Perawat</center></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>VIP</td>
                    <td>100.000</td>
                    <td>-</td>
                    <td>15.000</td>
                  </tr>
                  <tr>
                    <td>KELAS I</td>
                    <td>110.000</td>
                    <td>110.000</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>KELAS II</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>KELAS III</td>
                    <td>80.000</td>
                    <td>80.000</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>ISOLASI</td>
                    <td>70.000</td>
                    <td>70.000</td>
                    <td>70.000</td>
                  </tr>
                </tbody>
              </table>
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
