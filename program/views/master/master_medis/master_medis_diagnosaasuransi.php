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

        <?php $this->load->view('primer/header'); ?>


        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <?php $this->load->view('primer/left_side'); ?>


        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Master
                    <small>TINDAKAN DAN DIAGNOSA</small>
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
                                <h3 class="box-title">DIAGNOSA (Asuransi)</h3>
                                <!-- /.box-header -->
                                <div class="box-header">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-tambah">Tambah Data</button>
                                    <button type="button" class="btn btn-success">Export Data</button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Description</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>BPJS Kesehatan</td>
                                                <td>
                                                    <a class="btn btn-success" data-toggle="modal"
                                                        data-target="#modal-diagnosaasuransi">Detail</a>
                                                    <a href="#" class="btn btn-primary">Edit</a>
                                                    <a href="#" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>BPJS Ketenagakerjaan</td>
                                                <td>
                                                    <a href="#" class="btn btn-success">Detail</a>
                                                    <a href="#" class="btn btn-primary">Edit</a>
                                                    <a href="#" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Asuransi AXA Mandiri Financial Service</td>
                                                <td>
                                                    <a href="#" class="btn btn-success">Detail</a>
                                                    <a href="#" class="btn btn-primary">Edit</a>
                                                    <a href="#" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Asuransi AA Internasional Indonesia</td>
                                                <td>
                                                    <a href="#" class="btn btn-success">Detail</a>
                                                    <a href="#" class="btn btn-primary">Edit</a>
                                                    <a href="#" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Asuransi Medicilin</td>
                                                <td>
                                                    <a href="#" class="btn btn-success">Detail</a>
                                                    <a href="#" class="btn btn-primary">Edit</a>
                                                    <a href="#" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- /.box -->

    <?php $this->load->view('primer/footer'); ?>

    <div class="modal fade" id="modal-diagnosaasuransi">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Detail : <i>BPJS Ketenagakerjaan</i></h4>
                    <button type="button" class="btn btn-primary mt-12" data-toggle="modal"
                        data-target="#modal-tambahdeskripsi">Tambah Data</button>
                </div>
                <div class="modal-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode ICD</th>
                                <th>Nama ICD</th>
                                <th>Kode KTD</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Q-5-21-0</td>
                                <td>ABORSI</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Q-5-20-0</td>
                                <td>ABORSI MENGANCAM</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>W-4-13-III</td>
                                <td>ABORTUS BERAT</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>W-4-14-III</td>
                                <td>ABORTUS MENGANCAM BERAT</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>W-4-14-I</td>
                                <td>ABORTUS MENGANCAM RINGAN</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>W-1-14-II</td>
                                <td>ABORTUS MENGANCAM SEDANG</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>W-4-13-I</td>
                                <td>ABORTUS RINGAN</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>W-4-13-II</td>
                                <td>ABORTUS SEDANG</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>D-4-10-II</td>
                                <td>AGRANUL BERAT</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn-sm btn-danger">Delete</a>
                                </td>
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
    <div class="modal fade" id="modal-tambahdeskripsi">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Data Deskripsi BPJS Kesehatan</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Kode ICD</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Nama ICD</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Kode KTD</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                </div>
                <div class="modal-footer mt-2">
                    <button type="button" class="btn btn-success">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- /.modal -->
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Data Deskripsi Diagnosa (Asuransi)</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                </div>
                <div class="modal-footer mt-2">
                    <button type="button" class="btn btn-success">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

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