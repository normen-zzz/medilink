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
                    <small>Pembelian</small>
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
								<h4>Data Pembelian Obat</h4>
								<button type="button" class="btn btn-default" data-toggle="modal" data-target="#data">
									Tambah Data
								</button>
                            </div>
							<div class="box-body table-responsive no-padding">
							  <table class="table table-hover">
								<tr>
								  <th>Kode Order</th>
								  <th>Nama Obat</th>
								  <th>Tanggal Order</th>
								  <th>Jumlah Pesanan</th>
								  <th>Harga Satuan</th>
								  <th>Harga Total</th>
								  <th>Detail</th>
								  <th>Aksi</th>
								</tr>
								<tr>
								  <td>123</td>
								  <td>Paracetamol</td>
								  <td>6 Januari 2021</td>
								  <td>100 botol</td>
								  <td>Rp.5.000/Botol</td>
								  <td>Rp.560.000</td>
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
						  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Pesanan</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3">
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Jumlah Pesanan</label>
						  <div class="col-sm-4">
							<input type="email" class="form-control" id="inputEmail3">
						  </div>
						  <label for="inputEmail3" class="col-sm-2 control-label">Satuan</label>
						  <div class="col-sm-4">
							<select class="form-control">
								<option>Botol</option>
								<option>Pcs</option>
								<option>Amp</option>
							</select>
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Harga satuan</label>
						  <div class="col-sm-4">
							<input type="email" class="form-control" id="inputEmail3">
						  </div>
						  <label for="inputEmail3" class="col-sm-2 control-label">Satuan</label>
						  <div class="col-sm-4">
							<select class="form-control">
								<option>Botol</option>
								<option>Pcs</option>
								<option>Amp</option>
							</select>
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Supplier</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3">
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Diskon</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3">
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Ongkir</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3">
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">PPN</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3">
						  </div>
						</div>
					  </div>
					  <div class="box-body">
						<div class="form-group">
						  <label for="inputEmail3" class="col-sm-2 control-label">Kadaluarsa Obat</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="datepicker">
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
                <h4 class="modal-title">Detail Pesanan</h4>
              </div>
              <div class="modal-body">
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tr>
						  <td>Nomor Faktur</td>
						  <td>0001</td>
						</tr>
						<tr>
						  <td>Kode Obat</td>
						  <td>123</td>
						</tr>
						<tr>
						  <td>Nama Obat</td>
						  <td>Paracetamol</td>
						</tr>
						<tr>
						  <td>Tanggal Order</td>
						  <td>6 Januari 2021</td>
						</tr>
						<tr>
						  <td>Jumlah Pesanan</td>
						  <td>100 Botol</td>
						</tr>
						<tr>
						  <td>Harga Satuan</td>
						  <td>Rp.5.000/Botol</td>
						</tr>
						<tr>
						  <td>Supplier</td>
						  <td>Pt.Obat Indonesia</td>
						</tr>
						<tr>
						  <td>Diskon</td>
						  <td>20%</td>
						</tr>
						<tr>
						  <td>Ongkir</td>
						  <td>Rp.10.000</td>
						</tr>
						<tr>
						  <td>PPN</td>
						  <td>10%</td>
						</tr>
						<tr>
						  <td>Kadaluarsa Obat</td>
						  <td>7 April 2024</td>
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