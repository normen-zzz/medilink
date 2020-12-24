<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('primer/head');
  ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MEDILINK</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
                    Farmasi
                    <small>Penjualan</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Master</a></li>
                    <li class="active">Tambah User</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Default box -->

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Uji Pasien</h3>
								<small>20120002</small>
                                <!-- /.box-header -->
                                <div class="box-header">
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-tambah">Tambah Data</button>
                                    <button type="button" class="btn btn-success">Export Data</button>
                                </div> -->
								<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
									Data Pasien
								</button>
								<form class="form-horizontal">
								  <div class="box-body">
									<div class="form-group">
									  <label for="inputEmail3" class="col-sm-10 control-label ">No. Antrian</label>
									  <div class="col-sm-2">
										<input type="email" class="form-control" id="inputEmail3" placeholder="0">
									  </div>
									</div>
								  <!-- /.box-footer -->
								</form>
                            </div>
							
							<div class="row">
							<div class="col-xs-12">
							  <div class="box">
								<!-- /.box-header -->
								<div class="box-body table-responsive no-padding">
								  <table class="table table-hover">
									<tr>
									  <th>No.</th>
									  <th>Kode</th>
									  <th>Nama</th>
									  <th>Satuan</th>
									  <th>Harga Satuan</th>
									  <th>Stok</th>
									  <th>Quantity (Resep)</th>
									  <th>Quantity</th>
									  <th>Puyer</th>
									  <th>Harga Total</th>
									  <th>Aksi</th>
									</tr>
									<tr>
									  <td>1</td>
									  <td>O1-582</td>
									  <td>Sabutamol 2 mg</td>
									  <td>pcs</td>
									  <td>Rp. 113.28</td>
									  <td>532</td>
									  <td>10</td>
									  <td>10</td>
									  <td>1</td>
									  <td></td>
									  <td>
										<button type="button" class="btn btn-default">
											edit
										</button>
										<button type="button" class="btn btn-danger">
											Delete
										</button>
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>O1-495</td>
									  <td>Paracetamol 500 mg</td>
									  <td>pcs</td>
									  <td>Rp. 253</td>
									  <td>1391</td>
									  <td>10</td>
									  <td>10</td>
									  <td>1</td>
									  <td></td>
									  <td>
										<button type="button" class="btn btn-default">
											edit
										</button>
										<button type="button" class="btn btn-danger">
											Delete
										</button>
									  </td>
									</tr>
								  </table>
								</div>
								<!-- /.box-body -->
							  </div>
								<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default1">
									Tambah Data
								</button>
							  <!-- /.box -->
							</div>
						  </div>
							<form class="form-horizontal">
							  <div class="box-body">
								<div class="form-group">
								  <label for="inputEmail3" class="col-sm-8 control-label">Diskon</label>
								  <div class="col-sm-1">
									<input type="email" class="form-control" id="inputEmail3" placeholder="0.0%">
								  </div>
								  <div class="col-sm-3">
									<input type="email" class="form-control" id="inputEmail3" placeholder="Rp. 0,00">
								  </div>
								</div>
								<div class="form-group">
								  <label for="inputEmail3" class="col-sm-8 control-label">Netto</label>
								  <div class="col-sm-4">
									<input type="password" class="form-control" id="inputPassword3" placeholder="Rp. 0,00">
								  </div>
								</div>
								<div class="form-group">
								  <label for="inputEmail3" class="col-sm-8 control-label">Dibulatkan</label>
								  <div class="col-sm-4">
									<input type="password" class="form-control" id="inputPassword3" placeholder="Rp. 0,00">
								  </div>
								</div>
							  </div>
							  <!-- /.box-body -->
							  <div class="box-footer">
								<button type="submit" class="btn btn-info pull-right">Simpan</button>
							  </div>
							  <!-- /.box-footer -->
							</form>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
        </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view('primer/footer'); ?>
	
	<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Pasien</h4>
              </div>
              <div class="modal-body">
                <div class="row">
							<div class="col-xs-12">
							  <div class="box">
								<!-- /.box-header -->
								<div class="box-body table-responsive no-padding">
								  <table class="table table-hover">
									<tr>
									  <th>No. RM</th>
									  <th>Nama Pasien</th>
									  <th>Pintu Masuk</th>
									  <th>Dokter</th>
									</tr>
									<tr>
									  <td>20120002</td>
									  <td>Uji Pasien</td>
									  <td>Poli Umum</td>
									  <td>dr.H.Cucu Setiawan</td>
									</tr>
								  </table>
								</div>
								<!-- /.box-body -->
							  </div>
							  <!-- /.box -->
							</div>
						  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Set</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    </div>
    
    <div class="modal fade" id="modal-default1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data</h4>
              </div>
              <div class="modal-body">
                <div class="form-group col-sm-9">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Obat">
                </div>
				<div class="form-group col-sm-3">
                  <label for="exampleInputEmail1">Stock</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="0">
                </div>
				<div class="form-group col-sm-4">
                  <label for="exampleInputEmail1">Quantity (Resep)</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="0">
                </div>
				<div class="form-group col-sm-4">
                  <label for="exampleInputEmail1">Quantity</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="0">
                </div>
				<div class="form-group col-sm-4">
                  <label for="exampleInputEmail1">Puyer</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="0">
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


    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <?php //$this->load->view('primer/jse');
    ?>

    <!-- jQuery 3 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="bower_components/moment/min/moment.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- bootstrap color picker -->
    <script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- DataTables -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>

</body>

</html>