c<!DOCTYPE html>
<html>
<head>
  <?php //$this->load->view('primer/head');?>
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
        Rekening Rawat Inap
        <small>On Call DPJP</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Rekening Rawat Inap</a></li>
        <li class="active">Visite Dokter</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Data Pasien</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body">
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-1">Reg. ID</label>
                      <div class="col-sm-2">
                        <a class="btn btn-app">
                          <i class="fa fa-users"></i> Users
                        </a>
                        <input type="number" class="form-control" id="inputEmail3" placeholder="1" disabled>
                        
                      </div>

                      <label for="inputEmail3" class="col-sm-1">Kamar</label>
                      <div class="col-sm-3">
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>

                      <label for="inputEmail3" class="col-sm-1">Penjamin</label>
                      <div class="col-sm-3">
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>


                    <label>Data Pasien</label>

                    <div class="form-group">
                      <label for="nama" class="col-sm-1">Nama</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama" placeholder="Nama" disabled="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nama" class="col-sm-1">Alamat</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama" placeholder="alamat" disabled="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-1">No RM</label>
                      <div class="col-sm-2">
                        <input type="number" class="form-control" id="inputEmail3" placeholder="0" disabled="">
                      </div>

                    </div>


                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-1">Tanggal Masuk</label>
                      <div class="col-sm-2">
                        <input type="number" class="form-control" id="inputEmail3" placeholder="0" disabled="">
                      </div>

                      <label for="inputPassword3" class="col-sm-1">Jam</label>
                      <div class="col-sm-2">
                        <input type="number" class="form-control" id="inputEmail3" placeholder="0" disabled="">
                      </div>

                      <label for="inputPassword3" class="col-sm-1">Kamar</label>
                      <div class="col-sm-2">
                        <input type="number" class="form-control" id="inputEmail3" placeholder="0" disabled="" 
                        >
                      </div>

                      <label for="inputPassword3" class="col-sm-1">Paviliun</label>
                      <div class="col-sm-2">
                        <input type="number" class="form-control" id="inputEmail3" placeholder="0" disabled="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-1">Paket</label>
                      <div class="col-sm-2">
                        <input type="number" class="form-control" id="inputEmail3" placeholder="0" disabled="">
                      </div>

                    </div>



                  </div>
                  <h3>Entry Data Konsul</h3>
                  <form class="form-horizontal">
                    <div class="box-body">


                      <label for="inputEmail3" class="col-sm-1">Dokter</label>
                      <div class="col-sm-3">
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>

                      <label class="col-sm-1">Tanggal</label>
                      <div class="col-sm-4">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="datepicker">
                        </div>
                      </div>

                    <label for="inputPassword3" class="col-sm-1">Jam</label>
                      <div class="col-sm-2">
                        <input type="number" class="form-control" id="inputEmail3" placeholder="">
                      </div>

                      <label for="inputPassword3" class="col-sm-1">Biaya</label>
                      <div class="col-sm-2">
                        <input type="number" class="form-control" id="inputEmail3" placeholder="0" >
                      </div>

                      <label for="inputPassword3" class="col-sm-1">Potongan</label>
                      <div class="col-sm-2">
                        <input type="number" class="form-control" id="inputEmail3" placeholder="0">
                      </div>

                      <label for="inputPassword3" class="col-sm-1">Netto</label>
                      <div class="col-sm-2">
                        <input type="number" class="form-control" id="inputEmail3" placeholder="0">
                      </div>


                      <button type="submit" class="btn btn-danger pull-right">Batal</button>
                      <button type="submit" class="btn btn-info pull-right">simpan</button>

                    </div>





                    <!-- /.box-body -->
                    <div class="box">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>id</th>
                              <th>Kamar</th>
                              <th>Dokter</th>
                              <th>Tanggal</th>
                              <th>Jam</th>
                              <th>Biaya</th>
                              <th>Potongan</th>
                              <th>Netto</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>

                            </tr>
                          </table>
                        </div>
                        <!-- /.box-body -->
                      </div>

                    </form>
                  </div>
                </div>
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
