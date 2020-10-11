<!DOCTYPE html>
<html>

<head>
  <?php //$this->load->view('primer/head');
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
          MASTER
          <small>Rawat inap</small>
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
            <h3 class="box-title">Nurse Station</h3>

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
                Tambah Paviliun
              </button>
            </div>

          </div>
          <!-- /.box-body -->


          <div class="box">

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <tr>
                  <th style="width: 100px;">ID</th>
                  <th>Nama Paviliun</th>

                </tr>
                <tr>
                  <td>1</td>
                  <td>RPA/RPM</td>

                </tr>
                <tr>
                  <td>2</td>
                  <td>RPU DEWASA</td>

                </tr>
                <tr>
                  <td>3</td>
                  <td>HCU</td>

                </tr>
                <tr>
                  <td>4</td>
                  <td>ICU</td>

                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Paviliun</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="0">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Paviliun</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Paviliun">
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <!-- /.box -->

              <!--<div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->


            </div>
            <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view('primer/footer'); ?>


    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <?php $this->load->view('primer/jse'); ?>
</body>

</html>