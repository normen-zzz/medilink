<!DOCTYPE html>
<html>

<head>
  <?php $this->load->view('primer/head'); ?>
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
          <small>RAWAT INAP</small>
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
            <h3 class="box-title">Kelas</h3>

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
                Tambah Kelas
              </button>
            </div>

          </div>
          <!-- /.box-body -->


          <div class="box">

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <tr>
                  <th>ID</th>
                  <th>Nama Paviliun</th>
                  <th>Harga Kamar</th>

                </tr>
                <tr>
                  <td>1</td>
                  <td>VIP</td>
                  <td>800.000</td>

                </tr>
                <tr>
                  <td>2</td>
                  <td>KELAS I</td>
                  <td>450.000</td>


                </tr>
                <tr>
                  <td>3</td>
                  <td>KELAS II</td>
                  <td>300.000</td>

                </tr>
                <tr>
                  <td>4</td>
                  <td>KELAS III</td>
                  <td>175.000</td>

                </tr>

                <tr>
                  <td>5</td>
                  <td>ISOLASI</td>
                  <td>500.000</td>
                </tr>


                <tr>
                  <td>6</td>
                  <td>VK</td>
                  <td>425.000</td>

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
                    <h4 class="modal-title">Tambah Kelas</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="0">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kelas</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Kelas">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Harga Kamar</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rp. 0,-">
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /.box -->

          <!--<div class="box-footer">
          Footer
        </div> -->
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