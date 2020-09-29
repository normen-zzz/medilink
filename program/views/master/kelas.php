<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('primer/head');?>

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
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-1">ID</label>

                                    <div class="col-sm-1">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="ID">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-1">Nama Kelas</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Kelas">
                                    </div>
                                  </div>
                                   <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-1">Harga Kamar</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Harga Kamar">
                                    </div>
                                  </div>
                                </div>
                            </form>
                
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
                  <td>1.</td>
                  <td>VIP</td>
                  <td>800.000</td>
                  
                </tr>
                <tr>
                  <td>2.</td>
                  <td>KELAS I</td>
                  <td>450.000</td>

                 
                </tr>
                <tr>
                  <td>3.</td>
                  <td>KELAS II</td>
                  <td>300.000</td>
                  
                </tr>
                <tr>
                  <td>4.</td>
				          <td>KELAS III</td>
                 <td>175.000</td>
                  
                </tr>

                 <tr>
                  <td>5.</td>
                  <td>ISOLASI</td>
                <td>500.000</td>
                </tr>


                 <tr>
                  <td>6.</td>
                  <td>VK</td>
                 <td>425.000</td>
                  
                </tr>
                  

              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
		  
		  <div class="box-footer">
                <button type="submit" class="btn btn-success mb-3">Export Excel</button>
                <button type="submit" class="btn btn-danger pull-right">Batal</button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>

          
                
                

          
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

  <?php $this->load->view('primer/footer');?>

 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php $this->load->view('primer/jse');?>
</body>
</html>
