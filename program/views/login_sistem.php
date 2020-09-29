<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('primer/head');?>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS sidebar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
<body class="hold-transition skin-blue  sidebar-mini fixed">
<!-- Site wrapper -->
<div class="wrapper">

   <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b style="color:#330066;">AP</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b style="color:#330066;">APLI</b>MED</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <!--a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a-->
		<span class="pull-left" style="color:#336600;padding: 10px 15px; position: relative;dispaly: block;font-size:1.2em;">
            <strong> RS.SEHAT SELALU</strong>             
        </span>
      <div class="navbar-custom-menu">	
		
        <ul class="nav navbar-nav">
          <!--li class="pull-left">
            <a href="#">
              RS.SEHAT SELALU              
            </a>
		  </li-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">              
              <span class="hidden-xs" style="color:#ff9326;"><?php echo $this->input->server('REMOTE_ADDR');?></span>
            </a>
            
          </li>
         
        </ul>
      </div>
    </nav>
  </header>


  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          
        </div>
        <img src="gambar/no-logo.png" width="" class="" alt="User Image">
        <!--img src="gambar/rsip-mobile.png" width="200" class="" alt="User Image"-->
      </div>
	  
	 </section>
  </aside>


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman Login
        <small></small>
      </h1>
      <!--ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Halaman</a></li>
        <li class="active">Halaman Sekarang</li>
      </ol-->
    </section>

    <!-- Main content -->
    <section class="content">
    
      <!-- Default box -->
	  
      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-success">
            <div class="box-body box-profile">
			<?php echo form_open($form['action'], $form['atr']);?>
				<?php $autofocus = '';?>
				<?php foreach($form['set_rules'] as $fe):?>
					<?php
						$atr = '';
						$atr .= 'type="'.$fe['type'].'" class="form-control" id="'.$fe['field'].'" name="'.$fe['field'].'" value="'.set_value($fe['field']).'" placeholder="'.$fe['placeholder'].'"';
						
						if($autofocus==''):
							if(! validation_errors()):
								$atr .= ' autofocus';
							else:
								if(form_error($fe['field'])) $atr .= ' autofocus';
							endif;
						endif;
					?>
              
				  <div class="form-group has-feedback">
					<label for="<?php echo $fe['field'];?>"><?php echo $fe['label'];?></label>
					<input <?php echo $atr;?> />								
					<span class="glyphicon <?php echo $fe['fas'];?> form-control-feedback"></span>
					<?php echo form_error($fe['field']);?>
				  </div>
				<?php endforeach;?>  				 
				  <div class="row">
					
					<!-- /.col -->
					<div class="col-xs-4">
					  <button type="submit" class="btn btn-success btn-block btn-flat">Masuk</button>
					</div>
					<!-- /.col -->
				  </div>
			<?php echo form_close();?>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-8">
          <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tag"></i> Sekapur Sirih</h3>
        </div>
        <div class="box-body">
          <div class="row">
            
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
