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
                    <small>Data Obat</small>
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
								<h4>Data Obat</h4>
								<button type="button" class="btn btn-default" data-toggle="modal" data-target="#data">
									Tambah Data
								</button>
                            </div>
							<div class="box-body">
							  <table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
									  <th>Kode Obat</th>
									  <th>Nama Obat</th>
									  <th>HPP</th>
									  <th>Harga</th>
									  <th>Stock</th>
									  <th>Detail</th>
									  <th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									  <td>O1-001</td>
									  <td>Acarbose 100mg</td>
									  <td>Rp.831</td>
									  <td>Rp.1.500/Box</td>
									  <td>327 Box</td>
									  <td>
										<button type="button" class="btn btn-default" data-toggle="modal" data-target="#detail">
											More Detail
										</button>
									  </td>
									  <td>
										<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
											Edit
										</button>
										<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">
											Delete
										</button>
									  </td>
									</tr>	
								</tbody>
							  </table>
						</div>
							
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
	
		<div class="modal fade" id="data">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data</h4>
              </div>
              <div class="modal-body">
				<div class="box box-info">
					<!-- form start -->
					<form class="form-horizontal">
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Kode Obat</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3">
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Nama Obat</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3">
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Satuan</label>
						  <div class="col-sm-10">
							<select class="form-control">
								<option>-: Pilihan :-</option>
								<option>Botol</option>
								<option>Pcs</option>
								<option>Amp</option>
							</select>
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Kemasan</label>
						  <div class="col-sm-10">
							<select class="form-control">
								<option>-: Pilihan :-</option>
								<option>Botol</option>
								<option>Box</option>
							</select>
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">HPP</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3">
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
						  <div class="col-sm-4">
							<input type="email" class="form-control" id="inputEmail3">
						  </div>
						  <label for="inputEmail3" class="col-sm-2 control-label">Tiap</label>
						  <div class="col-sm-4">
							<select class="form-control">
								<option>-: Pilihan :-</option>
								<option>Botol</option>
								<option>Pcs</option>
								<option>Amp</option>
							</select>
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Stock</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3">
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
						  <div class="col-sm-10">
							<select class="form-control">
								<option>-: Pilihan :-</option>
								<option>Tablet</option>
								<option>Salep</option>
								<option>Sirup</option>
								<option>Injeksi</option>
								<option>Alkes</option>
							</select>
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Kronis</label>
						  <div class="col-sm-10">
							<select class="form-control">
								<option>-: Pilihan :-</option>
								<option>Kronis</option>
								<option>Non-Kronis</option>
							</select>
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Supplier/Pabrik</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3">
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Golongan Narkotika</label>
						  <div class="col-sm-10">
							<select class="form-control">
								<option>-: Pilihan :-</option>
								<option>Obat Keras</option>
								<option>Psikotropika</option>
								<option>Obat-Obatan Tertentu</option>
							</select>
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Nama Generik</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3">
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Kelas Generik</label>
						  <div class="col-sm-10">
							<select class="form-control">
								<option>-: Pilihan :-</option>
								<option>Generik</option>
								<option>Non-Generik</option>
							</select>
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Formula</label>
						  <div class="col-sm-10">
							<select class="form-control">
								<option>-: Pilihan :-</option>
								<option>Formulanium</option>
								<option>Non-Formulanium</option>
							</select>
						  </div>
						</div>
					  </div>
					</form>
				</div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
						  
		<div class="modal fade" id="detail">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Detail Obat</h4>
              </div>
              <div class="modal-body">
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tr>
						  <td>Kode Obat</td>
						  <td>O1-001</td>
						</tr>
						<tr>
						  <td>Nama Obat</td>
						  <td>Acarbose 100mg</td>
						</tr>
						<tr>
						  <td>Satuan</td>
						  <td>Pcs</td>
						</tr>
						<tr>
						  <td>Kemasan</td>
						  <td>Box</td>
						</tr>
						<tr>
						  <td>HPP</td>
						  <td>Rp.831</td>
						</tr>
						<tr>
						  <td>Harga</td>
						  <td>Rp.1.500/Box</td>
						</tr>
						<tr>
						  <td>Stock</td>
						  <td>327 Box</td>
						</tr>
						<tr>
						  <td>Kategori</td>
						  <td>Tablet</td>
						</tr>
						<tr>
						  <td>Supplier/Pabrik</td>
						  <td>Dexa Medica</td>
						</tr>
						<tr>
						  <td>Golongan Narkotika</td>
						  <td>Obat Keras</td>
						</tr>
						<tr>
						  <td>Nama Generik</td>
						  <td>Acarbose</td>
						</tr>
						<tr>
						  <td>Kelas Gemerik</td>
						  <td>Generik</td>
						</tr>
						<tr>
						  <td>Formula</td>
						  <td>Formulanium</td>
						</tr>
					</table>
				</div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Print</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
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
		//Date picker
		$('#datepicker').datepicker({
		  autoclose: true
		})
    </script>

</body>

</html>